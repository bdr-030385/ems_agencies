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
 * UserEntities Controller
 *
 * @property \App\Model\Table\UserEntitiesTable $UserEntities
 */
class UserEntitiesController extends AppController
{

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

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['agency_users','agency_add','agency_edit','agency_delete']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['agency_users']);
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
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agencies', 'Users']
        ];
        $this->set('userEntities', $this->paginate($this->UserEntities));
        $this->set('_serialize', ['userEntities']);
    }

    /**
     * View method
     *
     * @param string|null $id User Entity id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userEntity = $this->UserEntities->get($id, [
            'contain' => ['Agencies', 'Users', 'UserCustomFields']
        ]);
        $this->set('userEntity', $userEntity);
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Users = TableRegistry::get("Users");
        $this->UserEntities = TableRegistry::get("UserEntities");

        $userEntity = $this->UserEntities->newEntity();
        if ($this->request->is('post')) {            
            $user_data['username'] = $this->request->data['email_address'];
            $user_data['password'] = $this->request->data['password'];
            $user_data['group_id'] = $this->request->data['group_id'];
                
            $custom_fields = $this->request->data['custom_field'];

            $user = $this->Users->newEntity();
            $user = $this->Users->patchEntity($user, $user_data);
            $result_user = $this->Users->save($user);
            if ($result_user = $this->Users->save($user)) {
                $user_entities_data = $this->request->data;
                $user_entities_data['user_id'] = $result_user->id;
                $user_entities_data['email']   = $this->request->data['email_address'];
                
                $user_entities = $this->UserEntities->newEntity();
                $user_entities = $this->UserEntities->patchEntity($user_entities, $user_entities_data);

                if($result_user_entities = $this->UserEntities->save($user_entities)) {

                    foreach( $custom_fields as $cs ){
                        $custom_data = [
                            'user_entity_id' => $result_user_entities->id,
                            'name' => $cs['name'],
                            'value' => $cs['value']
                        ];

                        $customFields = $this->UserEntities->UserCustomFields->newEntity();
                        $customFields = $this->UserEntities->UserCustomFields->patchEntity($customFields, $custom_data);
                        $this->UserEntities->UserCustomFields->save($customFields);
                    }

                    $this->Flash->success(__('User has been saved.'));
                    $action = $this->request->data['save'];
                    if( $action == 'save' ){
                        return $this->redirect(['action' => 'index']);
                    }else{
                        return $this->redirect(['action' => 'add']);
                    }    
                }else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }

                     
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }

        $groups   = $this->UserEntities->Users->Groups->find('list');
        $agencies = $this->UserEntities->Agencies->find('list');
        $users    = $this->UserEntities->Users->find('list');
        $gender   = array("Male", "Female");
        $this->set(compact('userEntity', 'agencies', 'users','gender','groups'));
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Entity id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userEntity = $this->UserEntities->get($id, [
            'contain' => ['Users' => ['Groups'], 'Agencies']
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            //Update user data            
            $user = $this->UserEntities->Users->get($userEntity->user->id);
            $user->agency_id = $this->request->data['agency_id'];
            $user->group_id  = $this->request->data['group_id'];
            $custom_fields   = $this->request->data['custom_field'];

            $this->UserEntities->Users->save($user);
            //Update user entity data
            $userEntity = $this->UserEntities->patchEntity($userEntity, $this->request->data);
            if ($this->UserEntities->save($userEntity)) {

                //Custom Fields
                $this->UserEntities->UserCustomFields->deleteAll(['UserCustomFields.user_entity_id' => $userEntity->id]); //Delete all entries, will create new data
                foreach( $custom_fields as $cs ){
                    $custom_data = [
                        'user_entity_id' => $userEntity->id,
                        'name' => $cs['name'],
                        'value' => $cs['value']
                    ];

                    $customFields = $this->UserEntities->UserCustomFields->newEntity();
                    $customFields = $this->UserEntities->UserCustomFields->patchEntity($customFields, $custom_data);
                    $this->UserEntities->UserCustomFields->save($customFields);
                }

                $this->Flash->success(__('The user entity has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The user entity could not be saved. Please, try again.'));
            }
        }

        $customFields = $this->UserEntities->UserCustomFields->find('all')
            ->where(['UserCustomFields.user_entity_id' => $userEntity->id])
        ;        
        $dataCustomFields = array();
        foreach( $customFields as $cs ){
            $dataCustomFields[] = ['name' => $cs->name, 'value' => $cs->value];            
        }

        $agencies = $this->UserEntities->Agencies->find('list', ['limit' => 200]); 
        $groups   = $this->UserEntities->Users->Groups->find('list');       
        $gender   = array("Male", "Female");
        $this->set(compact('userEntity', 'agencies', 'groups', 'gender', 'dataCustomFields'));
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Entity id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userEntity = $this->UserEntities->get($id);
        if ($this->UserEntities->delete($userEntity)) {
            $this->Flash->success(__('The user entity has been deleted.'));
        } else {
            $this->Flash->error(__('The user entity could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Agency Index method
     *
     * @return void
     */
    public function agency_users()
    {
        $session = $this->request->session();    
        $user_data = $session->read('User.data');

        $this->paginate = [
            'contain' => ['Agencies', 'Users'],
            'condition' => ['UserEntities.agency_id' => $user_data->agency_id]
        ];

        $this->set('userEntities', $this->paginate($this->UserEntities));
        $this->set('_serialize', ['userEntities']);
    }

    /**
     * Agency Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function agency_add()
    {
        $this->Users = TableRegistry::get("Users");
        $this->UserEntities = TableRegistry::get("UserEntities");

        $userEntity = $this->UserEntities->newEntity();
        if ($this->request->is('post')) {            
            $session = $this->request->session();    
            $session_user_data = $session->read('User.data');

            $user_data['username'] = $this->request->data['email_address'];
            $user_data['password'] = $this->request->data['password'];
            $user_data['group_id'] = $this->request->data['group_id'];
                
            $custom_fields = $this->request->data['custom_field'];

            $user = $this->Users->newEntity();
            $user = $this->Users->patchEntity($user, $user_data);            
            $result_user = $this->Users->save($user);
            
            if ($result_user = $this->Users->save($user)) {
                $user_entities_data = $this->request->data;
                $user_entities_data['user_id'] = $result_user->id;
                $user_entities_data['email']   = $this->request->data['email_address'];
                $user_entities_data['agency_id'] = $session_user_data->agency_id;
                
                $user_entities = $this->UserEntities->newEntity();
                $user_entities = $this->UserEntities->patchEntity($user_entities, $user_entities_data);

                if($result_user_entities = $this->UserEntities->save($user_entities)) {

                    foreach( $custom_fields as $cs ){
                        $custom_data = [
                            'user_entity_id' => $result_user_entities->id,
                            'name' => $cs['name'],
                            'value' => $cs['value']
                        ];

                        $customFields = $this->UserEntities->UserCustomFields->newEntity();
                        $customFields = $this->UserEntities->UserCustomFields->patchEntity($customFields, $custom_data);
                        $this->UserEntities->UserCustomFields->save($customFields);
                    }

                    $this->Flash->success(__('User has been saved.'));
                    $action = $this->request->data['save'];
                    if( $action == 'save' ){
                        return $this->redirect(['action' => 'agency_users']);
                    }else{
                        return $this->redirect(['action' => 'agency_add']);
                    }    
                }else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }

                     
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }

        $groups   = $this->UserEntities->Users->Groups->find('list');        
        $users    = $this->UserEntities->Users->find('list');
        $gender   = array("Male", "Female");
        $this->set(compact('userEntity','users','gender','groups'));
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Agency Edit method
     *
     * @param string|null $id User Entity id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function agency_edit($id = null)
    {
        $userEntity = $this->UserEntities->get($id, [
            'contain' => ['Users' => ['Groups'], 'Agencies']
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            //Update user data            
            $user = $this->UserEntities->Users->get($userEntity->user->id);            
            $user->group_id  = $this->request->data['group_id'];
            $custom_fields   = $this->request->data['custom_field'];

            $this->UserEntities->Users->save($user);
            //Update user entity data
            $userEntity = $this->UserEntities->patchEntity($userEntity, $this->request->data);
            if ($this->UserEntities->save($userEntity)) {

                //Custom Fields
                $this->UserEntities->UserCustomFields->deleteAll(['UserCustomFields.user_entity_id' => $userEntity->id]); //Delete all entries, will create new data
                foreach( $custom_fields as $cs ){
                    $custom_data = [
                        'user_entity_id' => $userEntity->id,
                        'name' => $cs['name'],
                        'value' => $cs['value']
                    ];

                    $customFields = $this->UserEntities->UserCustomFields->newEntity();
                    $customFields = $this->UserEntities->UserCustomFields->patchEntity($customFields, $custom_data);
                    $this->UserEntities->UserCustomFields->save($customFields);
                }

                $this->Flash->success(__('The user entity has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'agency_users']);
                }else{
                    return $this->redirect(['action' => 'agency_edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The user entity could not be saved. Please, try again.'));
            }
        }

        $customFields = $this->UserEntities->UserCustomFields->find('all')
            ->where(['UserCustomFields.user_entity_id' => $userEntity->id])
        ;        
        $dataCustomFields = array();
        foreach( $customFields as $cs ){
            $dataCustomFields[] = ['name' => $cs->name, 'value' => $cs->value];            
        }

        $groups   = $this->UserEntities->Users->Groups->find('list');       
        $gender   = array("Male", "Female");
        $this->set(compact('userEntity', 'groups', 'gender', 'dataCustomFields'));
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Agency Delete method
     *
     * @param string|null $id User Entity id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function agency_delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userEntity = $this->UserEntities->get($id);
        if ($this->UserEntities->delete($userEntity)) {
            $this->Flash->success(__('The user entity has been deleted.'));
        } else {
            $this->Flash->error(__('The user entity could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'agency_users']);
    }
}
