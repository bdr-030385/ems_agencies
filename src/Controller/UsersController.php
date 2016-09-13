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
        if ($this->request->action == "dashboard") {
            $nav_selected = ["dashboard"];
        } else {
            $nav_selected = ["users"];
        }       
        $this->set('nav_selected', $nav_selected);

        $this->set(['load_css_script' => 'users']);

        $this->Users = TableRegistry::get('Users');
        $users = $this->Users->find('all');
        if($users->count() == 0) {
            //$this->redirect(['controller' => 'customer', 'action' => 'register']);
        }

        $this->Auth->allow();
    }

    /**
     * beforeFilter method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout', 'login', 'request_forgot_password', 'forgot_password']);
    }

    /**
     * Index method     
     * @return void
     */
    public function index()
    {
        $user = $this->Users->find('all', [
            'contain' => ['Groups']
        ]);
        $this->set('users', $this->paginate($user));
        $this->set('_serialize', ['users']);
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
                $this->Flash->success(__('The user has been saved.'));
                return custom_redirect($this,['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
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

    /**
     * delete method    
     * @return void
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        /*if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }*/
        $this->Flash->error(__('Deleting of user is currently disabled.'));
        return custom_redirect($this,['action' => 'index']);
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
 
                $this->Auth->setUser($user);

                $user_id  = $this->Auth->user('id');  
                /*$this->Customer = TableRegistry::get('Customer');            
                $customer = $this->Customer->find()            
                    ->where(['Customer.user_id' => $user_id])
                    ->first()
                ;     */   
                $session  = $this->request->session();
                /*if( $customer ){                         
                    $session->write('User.data', $customer);
                }else{
   
                }   */    

                $_SESSION['KCEDITOR']['disabled'] = false;
                $_SESSION['KCEDITOR']['uploadURL'] = Router::url('/')."webroot/upload";

                
                //return $this->redirect(['controller' => 'appointment', 'action' => 'index']);
                return $this->redirect($this->Auth->redirectUrl());
                //return custom_redirect($this,array('controller' => 'users', 'action' => 'index'));  
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
        $this->viewBuilder()->layout('');
        $user = $this->Users->find('all')->where( ['Users.username' => $this->request->data['email_username'] ] );
        if($user->count() > 0) {
            if ($this->request->is(['patch', 'post', 'put'])) {
                $data = $this->request->data;

                $user = $user->first();
                $user_id = $user->id;

                $this->Customer = TableRegistry::get('Customer');
                $customer = $this->Customer->find()
                    ->where(['Customer.user_id' => $user_id])
                    ->first()
                ;
                $result = $customer->toArray();
                $url = Router::url('/',true).'users/forgot_password?uid='.encrypt($user_id);
                $result['link'] = "<a href='{$url}' target='_blank'>Reset Link</a>";
                //echo decrypt(encrypt($user_id));
                //debug($result); exit;

                //$to = "rossel.barasharig160101@gmail.com";
                $to = $user->username;
                $email_sales = new Email('default');
                $email_sales->from(['sender@intellidentph.com' => 'IntelliDent'])
                 ->template('request_forgot_password')
                 ->emailFormat('html')
                 ->to($to)                                                                                                     
                 ->subject('IntelliDent : Forgot Password Assistance')
                 ->viewVars(['result' => $result])
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
}
