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
 * VehicleCompartments Controller
 *
 * @property \App\Model\Table\VehicleCompartmentsTable $VehicleCompartments
 */
class VehicleCompartmentsController extends AppController
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
            $nav_selected = ["vehicle_compartments"];
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
            'contain' => ['ParentVehicleCompartments', 'Vehicles']
        ];
        $this->set('vehicleCompartments', $this->paginate($this->VehicleCompartments));
        $this->set('_serialize', ['vehicleCompartments']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Compartment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleCompartment = $this->VehicleCompartments->get($id, [
            'contain' => ['ParentVehicleCompartments', 'Vehicles', 'ChildVehicleCompartments']
        ]);
        $this->set('vehicleCompartment', $vehicleCompartment);
        $this->set('_serialize', ['vehicleCompartment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleCompartment = $this->VehicleCompartments->newEntity();
        if ($this->request->is('post')) {
            $vehicleCompartment = $this->VehicleCompartments->patchEntity($vehicleCompartment, $this->request->data);
            if ($this->VehicleCompartments->save($vehicleCompartment)) {
                $this->Flash->success(__('The vehicle compartment has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The vehicle compartment could not be saved. Please, try again.'));
            }
        }
        $parentVehicleCompartments = $this->VehicleCompartments->ParentVehicleCompartments->find('list', ['limit' => 200]);
        $vehicles = $this->VehicleCompartments->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleCompartment', 'parentVehicleCompartments', 'vehicles'));
        $this->set('_serialize', ['vehicleCompartment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Compartment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleCompartment = $this->VehicleCompartments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleCompartment = $this->VehicleCompartments->patchEntity($vehicleCompartment, $this->request->data);
            if ($this->VehicleCompartments->save($vehicleCompartment)) {
                $this->Flash->success(__('The vehicle compartment has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle compartment could not be saved. Please, try again.'));
            }
        }
        $parentVehicleCompartments = $this->VehicleCompartments->ParentVehicleCompartments->find('list', ['limit' => 200]);
        $vehicles = $this->VehicleCompartments->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleCompartment', 'parentVehicleCompartments', 'vehicles'));
        $this->set('_serialize', ['vehicleCompartment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Compartment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleCompartment = $this->VehicleCompartments->get($id);
        if ($this->VehicleCompartments->delete($vehicleCompartment)) {
            $this->Flash->success(__('The vehicle compartment has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle compartment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Vehicle Compartments method
     *
     * @param id vehicle id
     * @return void
     */
    public function vehicle($id = null)
    {   
        $vehicle = $this->VehicleCompartments->Vehicles->get($id, []);        
        /*$this->paginate = [
            'contain' => ['ParentVehicleCompartments', 'Vehicles'],
            'conditions' => ['VehicleCompartments.vehicle_id' => $id, 'VehicleCompartments.parent_id' => 0],
            'order' => ['VehicleCompartments.sort' => 'DESC']
        ];*/
        $vehicleCompartments = $this->VehicleCompartments->find('all')
            ->find('threaded')
            ->toArray();
        ;
        $this->set('vehicleCompartments', $vehicleCompartments);
        $this->set(['vehicle' => $vehicle]);
        $this->set('_serialize', ['vehicleCompartments']);
    }

    /**
     * Vehicle Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function vehicle_add($id = null)
    {
        $vehicle = $this->VehicleCompartments->Vehicles->get($id, []);
        $vehicleCompartment = $this->VehicleCompartments->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['parent_id'] = 0;
            $this->request->data['vehicle_id'] = $vehicle->id;   

            $options = ['vehicle_id' => $vehicle->id];
            $last    = $this->VehicleCompartments->find('lastInsertedDataByVehicleId',$options)->first();            
            if( !empty($last) ){
                $this->request->data['sort'] = $last->sort + 1;
            }else{
                $this->request->data['sort'] = 1;
            }
            $vehicleCompartment = $this->VehicleCompartments->patchEntity($vehicleCompartment, $this->request->data);            
            if ($this->VehicleCompartments->save($vehicleCompartment)) {
                $this->Flash->success(__('The vehicle compartment has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'vehicle', $vehicle->id]);
                }else{
                    return $this->redirect(['action' => 'vehicle_add', $vehicle->id]);
                }                    
            } else {
                $this->Flash->error(__('The vehicle compartment could not be saved. Please, try again.'));
            }
        }
        $parentVehicleCompartments = $this->VehicleCompartments->ParentVehicleCompartments->find('list', ['limit' => 200]);
        $vehicles = $this->VehicleCompartments->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleCompartment', 'parentVehicleCompartments', 'vehicles','vehicle'));
        $this->set('_serialize', ['vehicleCompartment']);
    }

    /**
     * Vehicle Sub Compartments method
     *
     * @param id Vehicle Compartment id
     * @return void
     */
    public function subcompartments($id = null)
    {   
        $vehicle_compartment = $this->VehicleCompartments->get($id, []);
        $vehicle             = $this->VehicleCompartments->Vehicles->get($vehicle_compartment->vehicle_id);
        $this->paginate = [
            'contain' => ['ParentVehicleCompartments', 'Vehicles'],
            'conditions' => ['VehicleCompartments.parent_id' => $id],
            'order' => ['VehicleCompartments.sort' => 'DESC']
        ];
        $this->set('vehicleCompartments', $this->paginate($this->VehicleCompartments));
        $this->set(['vehicle' => $vehicle]);
        $this->set('_serialize', ['vehicleCompartments']);
    }

    /**
     * Ajax Load Vehicle Main Compartment method
     *
     *
     * @return void
     */
    public function ajax_load_main_compartment()
    {   
        $this->viewBuilder()->layout(""); 
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $vehicle_compartment = $this->VehicleCompartments->get($data['vehicle_compartment_id'], []);
            $vehicle             = $this->VehicleCompartments->Vehicles->get($vehicle_compartment->vehicle_id);

            $this->Vehicles      = TableRegistry::get('Vehicles');
            $copyable_vehicles   = $this->Vehicles->find('all')->where(['Vehicles.agency_id' => $vehicle->agency_id, 'Vehicles.id !=' => $vehicle->id]);

            $this->ItemCategories      = TableRegistry::get('ItemCategories');
            $item_categories           = $this->ItemCategories->find('all')->where(['ItemCategories.agency_id' => $vehicle->agency_id]);

            $this->set([
                'vehicle' => $vehicle, 
                'vehicle_compartment' => $vehicle_compartment,
                'copyable_vehicles' => $copyable_vehicles,
                'item_categories' => $item_categories
            ]);
        }else{
            echo 'No record found';
        }
    }

    /**
     * Ajax Load Items by Category method
     *
     *
     * @return void
     */
    public function ajax_load_items_by_category()
    {   
        $this->viewBuilder()->layout(""); 
        if ($this->request->is('post')) {
            $data = $this->request->data;

            $this->Items      = TableRegistry::get('Items');
            $items            = $this->Items->find('all')->where(['Items.item_category_id' => $data['item_category_id']]);

            $this->set([
                'items' => $items
            ]);
        }else{
            echo 'No record found';
        }
    }

    /**
     * Ajax Load Vehicle Sub Compartment method
     *
     *
     * @return void
     */
    public function ajax_load_vehicle_sub_compartment()
    {   
        $this->viewBuilder()->layout(""); 
        if ($this->request->is('post')) {
            $data = $this->request->data;

            $vehicle_sub_compartment = $this->VehicleCompartments->find('all')->where(['VehicleCompartments.parent_id' => $data['compartment_parent_id']]);

            $this->set([
                'vehicle_sub_compartment' => $vehicle_sub_compartment
            ]);
        }else{
            echo 'No record found';
        }
    }

    /**
     * Ajax Add SubCompartment method
     *
     * @return json Array
     */
    public function ajax_add_sub_compartment()
    {
    	$this->viewBuilder()->layout(""); 
        $vehicle = $this->VehicleCompartments->Vehicles->get($this->request->data['vehicle_id'], []);
        $vehicleCompartment = $this->VehicleCompartments->newEntity();

        $json['is_success'] = false;
        $json['message'] = "Unable to add.";

        if ($this->request->is('post')) { 
        	$this->request->data['description'] = 'SubCompartment';
            $vehicleCompartment = $this->VehicleCompartments->patchEntity($vehicleCompartment, $this->request->data);            
            if ($this->VehicleCompartments->save($vehicleCompartment)) {
                $json['is_success'] = true;
        		$json['message'] = "Sub Compartment has been added.";           
            } 
        }
        
        echo json_encode($json);
        exit;
    }

    /**
     * Ajax Add Item to SubCompartment method
     *
     * @return json Array
     */
    public function ajax_add_item_compartment()
    {
        $this->viewBuilder()->layout(""); 
        $this->CompartmentItems      = TableRegistry::get('CompartmentItems');
        
        $json['is_success'] = false;
        $json['message'] = "Unable to add.";

        if ($this->request->is('post')) { 
            $is_exist = $this->CompartmentItems->find('all')
                ->where(['CompartmentItems.compartment_id' => $this->request->data['compartment_id'], 'CompartmentItems.item_id' => $this->request->data['item_id'] ]);

            if($is_exist->count() == 0) {
                $compartment_items = $this->CompartmentItems->newEntity();

                $compartment_items = $this->CompartmentItems->patchEntity($compartment_items, $this->request->data);            
                if ($this->CompartmentItems->save($compartment_items)) {
                    $json['is_success'] = true;
                    $json['message'] = "Compartment Item has been added.";           
                } 
            }
        }
        
        echo json_encode($json);
        exit;
    }

}
