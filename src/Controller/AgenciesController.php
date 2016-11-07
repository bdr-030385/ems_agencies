<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Agencies Controller
 *
 * @property \App\Model\Table\AgenciesTable $Agencies
 */
class AgenciesController extends AppController
{

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout("Ems/default");
        // Add the selected sidebar-menu 'active' class
        // Valid value can be found in NavigationSelectorHelper       
        if ($this->request->action == "dashboard") {
            $nav_selected = ["dashboard"];
        } else {
            $nav_selected = ["agencies"];
        }       

        $this->set('nav_selected', $nav_selected);
        $this->set(['load_css_script' => 'users']);
    }
    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AccountTypes', 'MemberTypes']
        ];
        $this->set('agencies', $this->paginate($this->Agencies));
        $this->set('_serialize', ['agencies']);
    }

    /**
     * View method
     *
     * @param string|null $id Agency id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agency = $this->Agencies->get($id, [
            'contain' => ['AccountTypes', 'MemberTypes', 'UserEntities']
        ]);
        $this->set('agency', $agency);
        $this->set('_serialize', ['agency']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agency = $this->Agencies->newEntity();
        if ($this->request->is('post')) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->data);
            if ($result_agency = $this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The agency could not be saved. Please, try again.'));
            }
        }
        $accountTypes = $this->Agencies->AccountTypes->find('list', ['limit' => 200]);
        $memberTypes = $this->Agencies->MemberTypes->find('list', ['limit' => 200]);
        $load_form_css = true;
        $this->set(compact('agency', 'accountTypes', 'memberTypes','load_form_css'));
        $this->set('_serialize', ['agency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agency id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agency = $this->Agencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->data);
            if ($this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The agency could not be saved. Please, try again.'));
            }
        }
        $accountTypes = $this->Agencies->AccountTypes->find('list', ['limit' => 200]);
        $memberTypes = $this->Agencies->MemberTypes->find('list', ['limit' => 200]);
        $load_form_css = true;
        $this->set(compact('agency', 'accountTypes', 'memberTypes','load_form_css'));
        $this->set('_serialize', ['agency']);
    }

    /**
     * Add User method
     *
     * @param string|null $id Agency id.
     * @return void Redirects on successful add users, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function add_users($id = null)
    {
        $this->UserEntities = TableRegistry::get("UserEntities");

        $agency = $this->Agencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $user_data['username'] = $this->request->data['email_address'];
            $user_data['password'] = $this->request->data['password'];
            $user_data['group_id'] = $this->request->data['group_id'];
            $custom_fields = $this->request->data['custom_field'];

            $this->Users = TableRegistry::get("Users");
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
        $gender = array("Male", "Female");
        $this->set(['gender' => $gender]);
        $this->set(compact('agency','groups'));
        $this->set('_serialize', ['agency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agency = $this->Agencies->get($id);
        if ($this->Agencies->delete($agency)) {
            $this->Flash->success(__('The agency has been deleted.'));
        } else {
            $this->Flash->error(__('The agency could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
