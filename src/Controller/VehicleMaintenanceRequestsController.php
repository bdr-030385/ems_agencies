<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleMaintenanceRequests Controller
 *
 * @property \App\Model\Table\VehicleMaintenanceRequestsTable $VehicleMaintenanceRequests
 */
class VehicleMaintenanceRequestsController extends AppController
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
        $nav_selected = ["vehicle_maintenance"];

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
                $this->Auth->allow(['member_request']);
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
            'contain' => ['Agencies', 'UserEntities']
        ];
        $this->set('vehicleMaintenanceRequests', $this->paginate($this->VehicleMaintenanceRequests));
        $this->set('_serialize', ['vehicleMaintenanceRequests']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Maintenance Request id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleMaintenanceRequest = $this->VehicleMaintenanceRequests->get($id, [
            'contain' => ['Agencies', 'UserEntities']
        ]);
        $this->set('vehicleMaintenanceRequest', $vehicleMaintenanceRequest);
        $this->set('_serialize', ['vehicleMaintenanceRequest']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleMaintenanceRequest = $this->VehicleMaintenanceRequests->newEntity();
        if ($this->request->is('post')) {
            $vehicleMaintenanceRequest = $this->VehicleMaintenanceRequests->patchEntity($vehicleMaintenanceRequest, $this->request->data);
            if ($this->VehicleMaintenanceRequests->save($vehicleMaintenanceRequest)) {
                $this->Flash->success(__('The vehicle maintenance request has been saved.'));
                return $this->redirect(['action' => 'add']);                    
            } else {
                $this->Flash->error(__('The vehicle maintenance request could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->VehicleMaintenanceRequests->Agencies->find('list', ['limit' => 200]);
        $userEntities = $this->VehicleMaintenanceRequests->UserEntities->find('list', ['limit' => 200]);
        $this->set(['page_title' => 'SUBMIT VEHICLE MAINTENANCE REQUEST']);
        $this->set(compact('vehicleMaintenanceRequest', 'agencies', 'userEntities'));
        $this->set('_serialize', ['vehicleMaintenanceRequest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Maintenance Request id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleMaintenanceRequest = $this->VehicleMaintenanceRequests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleMaintenanceRequest = $this->VehicleMaintenanceRequests->patchEntity($vehicleMaintenanceRequest, $this->request->data);
            if ($this->VehicleMaintenanceRequests->save($vehicleMaintenanceRequest)) {
                $this->Flash->success(__('The vehicle maintenance request has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle maintenance request could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->VehicleMaintenanceRequests->Agencies->find('list', ['limit' => 200]);
        $userEntities = $this->VehicleMaintenanceRequests->UserEntities->find('list', ['limit' => 200]);
        $this->set(compact('vehicleMaintenanceRequest', 'agencies', 'userEntities'));
        $this->set('_serialize', ['vehicleMaintenanceRequest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Maintenance Request id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleMaintenanceRequest = $this->VehicleMaintenanceRequests->get($id);
        if ($this->VehicleMaintenanceRequests->delete($vehicleMaintenanceRequest)) {
            $this->Flash->success(__('The vehicle maintenance request has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle maintenance request could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Member : Request Add method
     *
     * @return void
     */
    public function member_request()
    {
        $nav_selected = ["vehicle_maintenance_requests"];
        $this->set(['page_title' => 'SUBMIT VEHICLE MAINTENANCE REQUEST', 'nav_selected' => $nav_selected]);
    }
}
