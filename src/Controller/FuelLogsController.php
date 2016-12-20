<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FuelLogs Controller
 *
 * @property \App\Model\Table\FuelLogsTable $FuelLogs
 */
class FuelLogsController extends AppController
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
        $nav_selected = ["fuel_logs"];

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['administrator']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['member']);
            }
        }

        $this->set('nav_selected', $nav_selected);  
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserEntities', 'Vehicles']
        ];
        $this->set('fuelLogs', $this->paginate($this->FuelLogs));
        $this->set('_serialize', ['fuelLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Fuel Log id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fuelLog = $this->FuelLogs->get($id, [
            'contain' => ['UserEntities', 'Vehicles']
        ]);
        $this->set('fuelLog', $fuelLog);
        $this->set('_serialize', ['fuelLog']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fuelLog = $this->FuelLogs->newEntity();
        if ($this->request->is('post')) {
            $fuelLog = $this->FuelLogs->patchEntity($fuelLog, $this->request->data);
            if ($this->FuelLogs->save($fuelLog)) {
                $this->Flash->success(__('The fuel log has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The fuel log could not be saved. Please, try again.'));
            }
        }
        $userEntities = $this->FuelLogs->UserEntities->find('list', ['limit' => 200]);
        $vehicles = $this->FuelLogs->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('fuelLog', 'userEntities', 'vehicles'));
        $this->set('_serialize', ['fuelLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fuel Log id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fuelLog = $this->FuelLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fuelLog = $this->FuelLogs->patchEntity($fuelLog, $this->request->data);
            if ($this->FuelLogs->save($fuelLog)) {
                $this->Flash->success(__('The fuel log has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The fuel log could not be saved. Please, try again.'));
            }
        }
        $userEntities = $this->FuelLogs->UserEntities->find('list', ['limit' => 200]);
        $vehicles = $this->FuelLogs->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('fuelLog', 'userEntities', 'vehicles'));
        $this->set('_serialize', ['fuelLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fuel Log id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fuelLog = $this->FuelLogs->get($id);
        if ($this->FuelLogs->delete($fuelLog)) {
            $this->Flash->success(__('The fuel log has been deleted.'));
        } else {
            $this->Flash->error(__('The fuel log could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Member : Request Add method
     *
     * @return void
     */
    public function member()
    {        
        $this->set(['page_title' => 'SUBMIT RECORD']);
    }
}
