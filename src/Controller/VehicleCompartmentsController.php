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

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['vehicle','ajax_load_top_vehicle_compartment_list']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['vehicle','ajax_load_top_vehicle_compartment_list']);
            }
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
     * Delete Vehicle Compartment method
     *     
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete_compartment()
    {
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->request->data;        
        if( $data['vehile_compartment_id'] > 0 ){
            $vehicleCompartment = $this->VehicleCompartments->get($data['vehile_compartment_id']);
            $vehicle_id = $vehicleCompartment->vehicle_id;
            if ($this->VehicleCompartments->delete($vehicleCompartment)) {
                $this->Flash->success(__('The vehicle compartment has been deleted.'));
            } else {
                $this->Flash->error(__('The vehicle compartment could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'vehicle', $vehicle_id]);
        }else{
            $this->Flash->error(__('The vehicle compartment could not be deleted. Please, try again.'));
            return $this->redirect(['action' => 'index']);
        }                
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
        
        $this->set(['vehicle' => $vehicle, 'load_top_vehicle_compartment_script' => true, 'vehicle_id' => $id]);
    }

    public function ajax_load_top_vehicle_compartment_list()
    {   
        $this->viewBuilder()->layout(""); 
        $vehicle_id = $this->request->data['vehicle_id'];
        $vehicle = $this->VehicleCompartments->Vehicles->get($vehicle_id, []);        
        /*$this->paginate = [
            'contain' => ['ParentVehicleCompartments', 'Vehicles'],
            'conditions' => ['VehicleCompartments.vehicle_id' => $id, 'VehicleCompartments.parent_id' => 0],
            'order' => ['VehicleCompartments.sort' => 'DESC']
        ];*/
        $vehicleCompartments = $this->VehicleCompartments->find('all')
            ->where(['VehicleCompartments.vehicle_id' => $vehicle_id])
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
            if ($result = $this->VehicleCompartments->save($vehicleCompartment)) {

                $this->CheckedCompartments = TableRegistry::get('CheckedCompartments');
                $checked_compartments = $this->CheckedCompartments->newEntity();
                $cc_data['vehicle_compartment_id'] = $result->id;
                $cc_data['status'] = NOT_STARTED;
                $checked_compartments = $this->CheckedCompartments->patchEntity($checked_compartments, $cc_data);
                if ($this->CheckedCompartments->save($checked_compartments)) {
    
                } 

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
                'agency_id' => $vehicle->agency_id,
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
            if($data['item_category_id'] == 'all') {
                $items            = $this->Items->find('all')->where(['Items.agency_id' => $data['agency_id']]); 
            }else{ 
                $items            = $this->Items->find('all')->where(['Items.item_category_id' => $data['item_category_id']]); 
            }
            

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

            $vehicle_sub_compartment = $this->VehicleCompartments->find('all')
                ->where(['VehicleCompartments.id' => $data['compartment_parent_id']]);

            $this->CompartmentItems      = TableRegistry::get('CompartmentItems');
           	$compartment_items = array(); 
            foreach($vehicle_sub_compartment as $vsc) {

            	//COLLECT AND STORE TO ARRAY ALL SUBCOMPARTMENTS
            	$this->lookForChildCompartment($vsc->id);

            	//GET COMPARTMENT ITEMS
            	$compartment_items_array = $this->CompartmentItems->find('all')
            		->where(['CompartmentItems.vehicle_compartment_id' => $vsc->id])
            		->contain(['Items']);

            	foreach($compartment_items_array as $ci) {
            		$compartment_items[$vsc->id][$ci->item_id] = ['id' => $ci->id,'name' => $ci->item->name];
            	}
            }

            //GET COMPARTMENT ITEMS FROM CHILD SUBCOMPARTMENTS
            if(!empty($this->global_sub_compartment)) {
            	foreach($this->global_sub_compartment as $key => $values) {
            		foreach($values as $value) {
            			$compartment_items_array = $this->CompartmentItems->find('all')
		            		->where(['CompartmentItems.vehicle_compartment_id' => $value['id']])
		            		->contain(['Items']);

		            	foreach($compartment_items_array as $ci) {
		            		$compartment_items[$value['id']][$ci->item_id] = ['id' => $ci->id,'name' => $ci->item->name];
		            	}
            		}
            	}
            }

            //debug($compartment_items);
            $this->set([
                'vehicle_sub_compartment' => $vehicle_sub_compartment,
                'compartment_items' => $compartment_items,
                'child_subcompartments' => $this->global_sub_compartment
            ]);
        }else{
            echo 'No record found';
        }
    }

    public function ajax_load_copyable_vehicle_compartment()
    {
        $this->viewBuilder()->layout(""); 
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $copyable_vehicle_compartments = $this->VehicleCompartments->find('all')->where(['VehicleCompartments.vehicle_id' => $data['vehicle_id']]);

            $this->set([
                'copyable_vehicle_compartments' => $copyable_vehicle_compartments
            ]);
        }else{
            echo 'No record found.';
        }
    }

    public function ajax_save_copied_compartment()
    {
        $this->viewBuilder()->layout(""); 
        $json['is_success'] = false;
        $json['message'] = "Unable to copy.";        
        
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if($data['selected_compartment'] != "") {
                $copied_compartment = $this->VehicleCompartments->get($data['selected_compartment']);
                $copied_compartment = $copied_compartment->toArray();

                $copied_compartment['parent_id'] = $data['main_compartment_id'];
                $copied_compartment['vehicle_id'] = $data['vehicle_id'];

                $vehicleCompartment = $this->VehicleCompartments->newEntity();
                $vehicleCompartment = $this->VehicleCompartments->patchEntity($vehicleCompartment, $copied_compartment);            
                if ($result = $this->VehicleCompartments->save($vehicleCompartment)) {

                    $this->CheckedCompartments = TableRegistry::get('CheckedCompartments');
                    $checked_compartments = $this->CheckedCompartments->newEntity();
                    $cc_data['vehicle_compartment_id'] = $result->id;
                    $cc_data['status'] = NOT_STARTED;
                    $checked_compartments = $this->CheckedCompartments->patchEntity($checked_compartments, $cc_data);
                    if ($this->CheckedCompartments->save($checked_compartments)) {
        
                    } 

                    $this->CompartmentItems      = TableRegistry::get('CompartmentItems');
                    $copied_items = $this->CompartmentItems->find('all')->where(['CompartmentItems.vehicle_compartment_id' => $data['selected_compartment'] ]);
                    foreach($copied_items as $ci) {
                        $compartment_items = $this->CompartmentItems->newEntity();
                        $data = [
                            'vehicle_compartment_id' => $result->id,
                            'item_id' => $ci->item_id
                        ];

                        $compartment_items = $this->CompartmentItems->patchEntity($compartment_items, $data);            
                        $this->CompartmentItems->save($compartment_items);
                    }
                    $json['is_success'] = true;
                    $json['message'] = "Compartment has been successfully copied.";           
                } 
            }
            
        }

        echo json_encode($json);
        exit;
    }

    public $global_sub_compartment = array();
    public function lookForChildCompartment($parent_id) 
    {
    	$vehicle_sub_compartment = $this->VehicleCompartments->find('all')->where(['VehicleCompartments.parent_id' => $parent_id]);
    	if($vehicle_sub_compartment->count() > 0) {
    		foreach($vehicle_sub_compartment as $vsc) {
	    		$this->global_sub_compartment[$vsc->parent_id][$vsc->name] = array(
	    			'parent_id' => $vsc->parent_id,
	    			'id' => $vsc->id,
	    			'name' => $vsc->name,
                    'allow_seal' => $vsc->allow_seal
	    		);
	    		$this->lookForChildCompartment($vsc->id);
	    	}
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
            if ($result = $this->VehicleCompartments->save($vehicleCompartment)) {
                $this->CheckedCompartments = TableRegistry::get('CheckedCompartments');
                $checked_compartments = $this->CheckedCompartments->newEntity();
                $cc_data['vehicle_compartment_id'] = $result->id;
                $cc_data['status'] = NOT_STARTED;
                $checked_compartments = $this->CheckedCompartments->patchEntity($checked_compartments, $cc_data);
                if ($this->CheckedCompartments->save($checked_compartments)) {
    
                } 
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
                ->where(['CompartmentItems.vehicle_compartment_id' => $this->request->data['compartment_id'], 'CompartmentItems.item_id' => $this->request->data['item_id'] ]);

            if($is_exist->count() == 0) {
                $compartment_items = $this->CompartmentItems->newEntity();
                
                $data = [
                    'vehicle_compartment_id' => $this->request->data['compartment_id'],
                    'item_id' => $this->request->data['item_id']
                ];

                $compartment_items = $this->CompartmentItems->patchEntity($compartment_items, $data);            
                if ($result = $this->CompartmentItems->save($compartment_items)) {
                    $json['is_success'] = true;
                    $json['message'] = "Compartment Item has been added.";   
                    $json['compartment_item_id'] = $result->id;        
                } 
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
    public function ajax_delete_compartment_id()
    {
        $this->viewBuilder()->layout(""); 
        $this->CompartmentItems    = TableRegistry::get('CompartmentItems');     
        $this->VehicleCompartments = TableRegistry::get('VehicleCompartments');   
        
        $json['is_success'] = false;
        $json['message'] = "Unable to delete.";
        $data = $this->request->data;

        if ( $this->request->is('post') && $data['vehile_compartment_item_id'] > 0 ) { 
            $compartmentItem = $this->CompartmentItems->get($data['vehile_compartment_item_id']);
            $vehicle_compartment_id = $compartmentItem->vehicle_compartment_id;
            $compartment = $this->VehicleCompartments->get($vehicle_compartment_id);

            if ($this->CompartmentItems->delete($compartmentItem)) {
                $json['is_success'] = true;
                $json['message']    = "Item deleted.";
            }
            $json['vehicle_compartment_id'] = $compartment->parent_id;
        }
        
        echo json_encode($json);
        exit;
    }

}
