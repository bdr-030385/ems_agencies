<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use App\Controller\SyncServiceController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public $helpers = ['NavigationSelector'];
    
    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();
        // Add the selected sidebar-menu 'active' class
        // Valid value can be found in NavigationSelectorHelper  
        $this->viewBuilder()->layout("Ems/default");      
        if ($this->request->action == "dashboard") {
            $nav_selected = ["home"];
        } else {
            $nav_selected = ["users"];
        }       

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['user_dashboard','change_password']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['user_dashboard','change_password']);
            }
        }

        $this->set('nav_selected', $nav_selected);
        $this->set(['load_css_script' => 'users']);

        $this->Users = TableRegistry::get('Users');
        $users = $this->Users->find('all');
        if($users->count() == 0) {
            //$this->redirect(['controller' => 'customer', 'action' => 'register']);
        }

        //$this->Auth->allow();
    }

    /**
     * beforeFilter method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout', 'login', 'request_forgot_password', 'forgot_password', 'update']);
    }

    /**
     * Index method     
     * @return void
     */
    public function index()
    {
        $user = $this->Users->find('all', [
            'contain' => ['Groups']
        ])->where(['Users.is_archive' => 0]);

        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(['groups' => $groups]);
        $this->set('users', $this->paginate($user));
        $this->set('_serialize', ['users']);
    }

    /**
     * Dashboard method     
     * @return void
     */
    public function dashboard()
    {
        if( $this->global_user_data->user->group_id == 1 ){
            //$this->viewBuilder()->layout("Users\dashboard"); 
            //return $this->redirect(['controller' => 'agencies', 'action' => 'index']);
        }

        $session    = $this->request->session();
        $user_data  = $session->read('User.data'); 

        $title = "<h1 style='text-align:left !important; width:100%;'>Dashboard
                    <small>Welcome - {$user_data->firstname} {$user_data->lastname}</small>
                </h1>";
        $this->set(['page_title' => $title]);
    }

    /**
     * View method     
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ["Groups"]
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method     
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {      
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('User has been saved.'));
                return custom_redirect($this,['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    public function update()
    {
        $id = $this->request->data['id'];
        $users = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data['username'] = $this->request->data['username'];
            $data['group_id'] = $this->request->data['group_id'];
            if($this->request->data['password'] != "******") {
                $data['password'] = $this->request->data['password'];
            }

            $users = $this->Users->patchEntity($users, $data);
            if ( $result = $this->Users->save($users)) {
                
                $this->Flash->success(__('User has been updated.'));
                
            } else {
                $this->Flash->error(__('User could not be saved. Please, try again.'));
            }
        }
        return custom_redirect($this,['controller' => 'users', 'action' => 'index']);
    }

    /**
     * Edit method
     * ID : CA-07
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        return custom_redirect($this,['controller' => 'Appointment', 'action' => 'index']);
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $result = $this->Users->save($user);
            if ($result) {
                $this->Flash->success(__('User data has been updated.'));
                if(isset($this->request->data['edit'])) {
                    return custom_redirect($this,['action' => 'edit', $id]);
                }else{
                    return custom_redirect($this,['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('User data could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

         $this->set('groups', $this->Users->Groups->find('list', array('fields' => array('name','id') ) ) );
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $user->is_archive = 1;
        $this->Users->save($user);

        $this->Flash->success(__('User has been deleted.'));        
        return custom_redirect($this,['controller' => 'users', 'action' => 'index']);
    }

    /**
     * Login     
     * login module then redirect to dashboard
     */
    public function login()
    {       
        // Change layout
        $this->viewBuilder()->layout("Users/login");        
        
        //if already logged-in, redirect
        if($this->Auth->user()){
            //custom_redirect($this,array('controller' => 'appointment', 'action' => 'index'));      
        }

        if ($this->request->is('post')) {                    
            $user = $this->Auth->identify();                   
            if ($user) {       
                $user_data = $this->Users->UserEntities->find()   
                    ->contain(['Users'])             
                    ->where(['UserEntities.user_id' => $user['id']])
                    ->first()
                ;                             
                if( $user_data->user->is_archive == 0 ){
                    $this->Auth->setUser($user);
                    $user_id  = $this->Auth->user('id');                      
                    $session  = $this->request->session();  
                    $session->write('User.data', $user_data);     
                    
                    $_SESSION['KCEDITOR']['disabled'] = false;
                    $_SESSION['KCEDITOR']['uploadURL'] = Router::url('/')."webroot/upload/".$user_data->agency_id;
                    if( $user_data->user->group_id == 1){                        
                        return $this->redirect(['controller' => 'users', 'action' => 'dashboard']);
                    }elseif( $user_data->user->group_id == 2){                        
                        return $this->redirect(['controller' => 'users', 'action' => 'dashboard']);
                    }elseif( $user_data->user->group_id == 3){                        
                        return $this->redirect(['controller' => 'users', 'action' => 'dashboard']);
                    }
                }else{
                    //Redirect to error page
                }                
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        $this->set('page_title', 'User Login');
    }

    /**
     * logout     
     * logout user and go back to login page
     */
    public function logout()
    {
        //session_start();
        session_destroy();
        return $this->redirect($this->Auth->logout());
    }

    public function request_forgot_password()
    {
        $this->UserEntities = TableRegistry::get('UserEntities');
        $this->viewBuilder()->layout('');        
        
        if ($this->request->is(['patch', 'post', 'put'])) {                
            $data = $this->request->data;        
            $user = $this->Users->find()
                ->where(['Users.username' => $data['email_username']])
                ->first()
            ;

            if($user) {
                $userEntity = $this->UserEntities->find()
                    ->where(['UserEntities.user_id' => $user->id])
                    ->first()
                ;
                if( $userEntity ){
                    $randChar   = rand() . $user->id;                
                    $reset_code = md5(uniqid($randChar, true));  

                    //Save verification code
                    $user->reset_code = $reset_code;
                    $this->Users->save($user);

                    //Send email notification to customer                
                    $edata = [
                        'user_name' => $userEntity->firstname,
                        'reset_code' => $reset_code
                    ];

                    $recipient = $userEntity->email;                     
                    $email_smtp = new Email('cake_smtp');
                    $email_smtp->from(['websystem@emsuptodate.com' => 'WebSystem'])
                        ->template('request_forgot_password')
                        ->emailFormat('html')
                        ->to($recipient)                                                                                                     
                        ->subject('EmsAgencies : Forgot Password')
                        ->viewVars(['edata' => $edata])
                        ->send();

                    $json['message'] = "An email has been sent to your e-mail address for confirmation.";
                    $json['is_success'] = true;
                }else{
                    $json['message'] = "Invalid form entry";
                    $json['is_success'] = false;   
                }                
            }else{
                $json['message'] = "Invalid form entry";
                $json['is_success'] = false;    
            }
        }else{
            $json['message'] = "Invalid form entry";
            $json['is_success'] = false;
        }
        
        echo json_encode($json);
        exit;
    }

    public function forgot_password()
    {
        $this->viewBuilder()->layout('');
        $user = $this->Users->find('all')->where( ['Users.id' => decrypt($_GET['uid']) ] );
        if($user->count() > 0) {
            $data = $this->request->data;

            $user = $user->first();
            $user_id = $user->id;

            $new_password = encrypt(date('YmdHis'));
            $new_password = strtoupper(substr($new_password, 0, 8));
            $new_password = str_replace("_", "A", $new_password);
            $new_password = str_replace("-", "A", $new_password);

            $user =$this->Users->get($user_id);
            $user = $this->Users->patchEntity($user, [
                    'password'      => $new_password,
                ]
            );
            //debug($user);
            if ($this->Users->save($user)) {
                echo "Password has been successfully changed. Please check your email for new password.";
                $this->Customer = TableRegistry::get('Customer');
                $customer = $this->Customer->find()
                    ->where(['Customer.user_id' => $user_id])
                    ->first()
                ;
                $result = $customer->toArray();
                $result['new_password'] = $new_password;

                //$to = "rossel.barasharig160101@gmail.com";
                $to = $user->username;
                /*$email_sales = new Email('default');
                $email_sales->from(['sender@intellidentph.com' => 'IntelliDent'])
                 ->template('forgot_password')
                 ->emailFormat('html')
                 ->to($to)                                                                                                     
                 ->subject('IntelliDent : Reset Password Successfully')
                 ->viewVars(['result' => $result])
                 ->send();*/
            } else {
                echo "Unable to process request.";
            }

            
                
        }else{
            echo "Unable to process request.";
        }

        exit;
    }

    /**
     * Member Dashboard method
     * ID : CA-11
     * @return void
     */
    public function test_form()
    {
        
    }

    /**
     * Dashboard method     
     * @return void
     */
    public function user_dashboard()
    {
        $this->set('nav_selected', ['dashboard']);
    }

    /**
     * Change Password method     
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function change_password()
    {      
        $this->UserEntities = TableRegistry::get('UserEntities');
        $session      = $this->request->session();    
        $user_session = $session->read('User.data');       

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            if( $data['password'] == $data['repassword'] ){
                
                $user = $this->UserEntities->Users->get($user_session->user->id);
                $user->password = $data['password'];                
                
                if( $this->UserEntities->Users->save($user) ){
                    //Update is_enabled
                    $user_entity = $this->UserEntities->get($user_session->id);
                    if( $user_entity->is_password_changed == 0 ){
                        $user_entity->is_password_changed = 1;
                        $this->UserEntities->save($user_entity);
                    }

                    //Send email
                    $edata = [
                        'user_name' => $user_session->firstname,
                        'password' => $data['password']                        
                    ];
                    $recipient = $user_session->email;                     
                    $email_smtp = new Email('cake_smtp');
                    $email_smtp->from(['websystem@emsuptodate.com' => 'WebSystem'])
                        ->template('change_password')
                        ->emailFormat('html')
                        ->to($recipient)                                                                                                     
                        ->subject('EmsAgencies : Change Password')
                        ->viewVars(['edata' => $edata])
                        ->send();

                    $this->Flash->success(__('Your password has been changed.'));
                    return $this->redirect(['controller' => 'profile', 'action' => 'index']);
                }else{
                    $this->Flash->error(__('Your password could not be change. Please, try again.'));                    
                }
            }else{
                $this->Flash->error(__('Password does not match!'));                    
            }
        }

        $load_form_css = true;
        $this->set(['user_data' => $user_session, 'load_form_css' => $load_form_css]);
    }
}
