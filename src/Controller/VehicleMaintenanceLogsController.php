<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleMaintenanceLogs Controller
 *
 * @property \App\Model\Table\VehicleMaintenanceLogsTable $VehicleMaintenanceLogs
 */
class VehicleMaintenanceLogsController extends AppController
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
                $this->Auth->allow(['admin_request']);
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
            'contain' => ['Agencies', 'Vendors', 'Vehicles']
        ];
        $this->set('vehicleMaintenanceLogs', $this->paginate($this->VehicleMaintenanceLogs));
        $this->set('_serialize', ['vehicleMaintenanceLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Maintenance Log id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleMaintenanceLog = $this->VehicleMaintenanceLogs->get($id, [
            'contain' => ['Agencies', 'Vendors', 'Vehicles']
        ]);
        $this->set('vehicleMaintenanceLog', $vehicleMaintenanceLog);
        $this->set('_serialize', ['vehicleMaintenanceLog']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleMaintenanceLog = $this->VehicleMaintenanceLogs->newEntity();
        if ($this->request->is('post')) {
            $vehicleMaintenanceLog = $this->VehicleMaintenanceLogs->patchEntity($vehicleMaintenanceLog, $this->request->data);
            if ($this->VehicleMaintenanceLogs->save($vehicleMaintenanceLog)) {
                $this->Flash->success(__('The vehicle maintenance log has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The vehicle maintenance log could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->VehicleMaintenanceLogs->Agencies->find('list', ['limit' => 200]);
        $vendors = $this->VehicleMaintenanceLogs->Vendors->find('list', ['limit' => 200]);
        $vehicles = $this->VehicleMaintenanceLogs->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleMaintenanceLog', 'agencies', 'vendors', 'vehicles'));
        $this->set('_serialize', ['vehicleMaintenanceLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Maintenance Log id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleMaintenanceLog = $this->VehicleMaintenanceLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleMaintenanceLog = $this->VehicleMaintenanceLogs->patchEntity($vehicleMaintenanceLog, $this->request->data);
            if ($this->VehicleMaintenanceLogs->save($vehicleMaintenanceLog)) {
                $this->Flash->success(__('The vehicle maintenance log has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle maintenance log could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->VehicleMaintenanceLogs->Agencies->find('list', ['limit' => 200]);
        $vendors = $this->VehicleMaintenanceLogs->Vendors->find('list', ['limit' => 200]);
        $vehicles = $this->VehicleMaintenanceLogs->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleMaintenanceLog', 'agencies', 'vendors', 'vehicles'));
        $this->set('_serialize', ['vehicleMaintenanceLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Maintenance Log id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleMaintenanceLog = $this->VehicleMaintenanceLogs->get($id);
        if ($this->VehicleMaintenanceLogs->delete($vehicleMaintenanceLog)) {
            $this->Flash->success(__('The vehicle maintenance log has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle maintenance log could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Admin : Request Add method
     *
     * @return void
     */
    public function admin_request()
    {
        $nav_selected = ["administrator"];
        $this->set(['page_title' => 'Vehicle Maintenance', 'nav_selected' => $nav_selected]);
    }
}
