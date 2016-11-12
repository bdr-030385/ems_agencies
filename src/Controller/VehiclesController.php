<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use App\Controller\VehicleCompartmentsController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Mailer\Email;

/**
 * Vehicles Controller
 *
 * @property \App\Model\Table\VehiclesTable $Vehicles
 */
class VehiclesController extends AppController
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
            $nav_selected = ["vehicles"];
        }       

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['agency_vehicles','agency_add','agency_edit', 'view', 'agency_delete']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['agency_vehicles']);
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
            'contain' => ['Agencies', 'VehicleTypes', 'Colors']
        ];
        $this->set('vehicles', $this->paginate($this->Vehicles));
        $this->set('_serialize', ['vehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $session = $this->request->session();    
        $user_data = $session->read('User.data');
        $group_id  = $user_data->group_id;

        $vehicle = $this->Vehicles->get($id, [
            'contain' => ['Agencies', 'VehicleTypes', 'Colors', 'VehicleFiles']
        ]);        
        $this->set(['vehicle' => $vehicle, 'load_form_css' => true]);
        $this->set('_serialize', ['vehicle','group_id']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicle = $this->Vehicles->newEntity();
        if ($this->request->is('post')) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->data);
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->Vehicles->Agencies->find('list', ['limit' => 200]);
        $vehicleTypes = $this->Vehicles->VehicleTypes->find('list', ['limit' => 200]);
        $colors = $this->Vehicles->Colors->find('list', ['limit' => 200]);
        $load_form_css = true;
        $this->set(compact('vehicle', 'agencies', 'vehicleTypes', 'colors', 'load_form_css'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicle = $this->Vehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->data);
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->Vehicles->Agencies->find('list', ['limit' => 200]);
        $vehicleTypes = $this->Vehicles->VehicleTypes->find('list', ['limit' => 200]);
        $colors = $this->Vehicles->Colors->find('list', ['limit' => 200]);
        $load_form_css = true;
        $this->set(compact('vehicle', 'agencies', 'vehicleTypes', 'colors','load_form_css'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicle = $this->Vehicles->get($id);
        if ($this->Vehicles->delete($vehicle)) {
            $this->Flash->success(__('The vehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Agency vehicles method
     *
     * @return void
     */
    public function agency_vehicles()
    {
        $session = $this->request->session();    
        $user_data = $session->read('User.data');

        $this->paginate = [
            'contain' => ['Agencies', 'VehicleTypes', 'Colors'],
            'condition' => ['Vehicles.agency_id' => $user_data->agency_id]
        ];
        $this->set(['action' => 'agency_add']);
        $this->set('vehicles', $this->paginate($this->Vehicles));
        $this->set('_serialize', ['vehicles']);
    }

    /**
     * Agency Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function agency_add()
    {
        $vehicle = $this->Vehicles->newEntity();
        if ($this->request->is('post')) {
            $session = $this->request->session();    
            $user_data = $session->read('User.data');
            $this->request->data['agency_id'] = $user_data->agency_id;

            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->data);
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'agency_vehicles']);
                }else{
                    return $this->redirect(['action' => 'agency_add']);
                }                    
            } else {
                $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
            }
        }        
        $vehicleTypes = $this->Vehicles->VehicleTypes->find('list', ['limit' => 200]);
        $colors = $this->Vehicles->Colors->find('list', ['limit' => 200]);
        $load_form_css = true;
        $this->set(compact('vehicle', 'vehicleTypes', 'colors','load_form_css'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Agency Edit method
     *
     * @param string|null $id Vehicle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function agency_edit($id = null)
    {
        $vehicle = $this->Vehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->data);
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'agency_vehicles']);
                }else{
                    return $this->redirect(['action' => 'agency_edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
            }
        }        
        $vehicleTypes = $this->Vehicles->VehicleTypes->find('list', ['limit' => 200]);
        $colors = $this->Vehicles->Colors->find('list', ['limit' => 200]);
        $load_form_css = true;
        $this->set(compact('vehicle', 'vehicleTypes', 'colors','load_form_css'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Agency Delete method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function agency_delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicle = $this->Vehicles->get($id);
        if ($this->Vehicles->delete($vehicle)) {
            $this->Flash->success(__('The vehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'agency_vehicles']);
    }

    public function check($id = null)
    {   
        $vehicle = $this->Vehicles->get($id, []);        
        $this->VehicleCompartments = TableRegistry::get('VehicleCompartments');
        $vehicle_compartments = $this->VehicleCompartments->find('all')
        	->where(['VehicleCompartments.vehicle_id' => $id])
        	->contain(['CheckedCompartments']);


        $this->CompartmentItems      = TableRegistry::get('CompartmentItems');
        $this->CheckedItems      = TableRegistry::get('CheckedItems');
       	$compartment_items = array(); 
       	$vehicleCompartmentsController = new VehicleCompartmentsController;
       	$compartments = array();
       	$a_checked_compartments = array();
        $a_checked_items = array();
        foreach($vehicle_compartments as $vsc) {
        	if(!empty($vsc->checked_compartments[0])) {
        		$cc = $vsc->checked_compartments[0];
        		$a_checked_compartments[$vsc->id] = $cc->status;
        	}else{
        		$a_checked_compartments[$vsc->id] = NOT_STARTED;
        	}
        	
        	
        	//COLLECT AND STORE TO ARRAY ALL SUBCOMPARTMENTS
        	$vehicleCompartmentsController->lookForChildCompartment($vsc->id);

        	//GET COMPARTMENT ITEMS
        	$compartment_items_array = $this->CompartmentItems->find('all')
        		->where(['CompartmentItems.vehicle_compartment_id' => $vsc->id])
        		->contain(['Items']);

        	foreach($compartment_items_array as $ci) {
        		$compartment_items[$vsc->id][$ci->item_id] = [
        			'id' => $ci->id,
        			'name' => $ci->item->name,
        			'quantity' => $ci->item->quantity
        		];

                $checked_items = $this->CheckedItems->find('all')->where(['CheckedItems.compartment_item_id' => $ci->id])->first();
                if(!empty($checked_items)) {
                    $a_checked_items[$ci->id] = $checked_items->status;
                }else{
                    $a_checked_items[$ci->id] = NOT_STARTED;
                }
                
        	}
        }

        //debug($vehicle_compartments->toArray());
        //debug($vehicleCompartmentsController->global_sub_compartment);
        //debug($a_checked_compartments);
        //debug($compartment_items);
        //debug($a_checked_items);

        $this->set([
        	'vehicle' => $vehicle, 
        	'vehicle_compartments' => $vehicle_compartments, 
        	'compartment_items' => $compartment_items,
        	'a_checked_compartments' => $a_checked_compartments,
            'a_checked_items' => $a_checked_items,
        	'child_subcompartments' => $vehicleCompartmentsController->global_sub_compartment
        ]);
    }

    public function ajax_save_sealed_compartment()
    {
    	$this->viewBuilder()->layout(""); 

    	$json['is_success'] = false;
    	$json['message'] = "";

    	if ($this->request->is(['patch', 'post', 'put'])) {
    		$this->CheckedCompartments = TableRegistry::get('CheckedCompartments');

    		$cp = $this->CheckedCompartments->find('all')->where(['CheckedCompartments.vehicle_compartment_id' => $this->request->data['vehicle_compartment_id']]);
	    	if($cp->count() == 0) {
	    		$checked_compartments = $this->CheckedCompartments->newEntity();
	            $checked_compartments = $this->CheckedCompartments->patchEntity($checked_compartments, $this->request->data);
	            if ($this->CheckedCompartments->save($checked_compartments)) {
	                $json['is_success'] = true;      
	            } 
	    	}else{
	    		$checked_compartments = $cp->first();
	    		$checked_compartments = $this->CheckedCompartments->patchEntity($checked_compartments, $this->request->data);
	            if ($this->CheckedCompartments->save($checked_compartments)) {
	                $json['is_success'] = true;      
	            } 
	    	}
	    		
        }

        echo json_encode($json);
        exit;

    }

    public function ajax_load_compartment_item_note_form()
    {
    	$this->viewBuilder()->layout("");
    	if ($this->request->is(['post'])) {
    		$this->Items = TableRegistry::get('Items');
    		$item = $this->Items->get($this->request->data['item_id']);

            $this->ItemExpirations = TableRegistry::get('ItemExpirations');
            $item_expirations = $this->ItemExpirations->find('all')->where(['ItemExpirations.item_id' => $this->request->data['item_id']]);

            $this->CompartmentItems = TableRegistry::get('CompartmentItems');
            $compartment_item = $this->CompartmentItems->find('all')
                ->where(['CompartmentItems.item_id' => $this->request->data['item_id'], 'CompartmentItems.vehicle_compartment_id' => $this->request->data['vehicle_compartment_id']]);

            $compartment_item = $compartment_item->first();

            $item_status = NOT_STARTED;
            $checked_items = array();
            if(!empty($compartment_item)){
                $this->CheckedItems = TableRegistry::get('CheckedItems');
                $checked_items = $this->CheckedItems->find('all')->where(['CheckedItems.compartment_item_id' => $compartment_item->id])->first();
                if(!empty($checked_items)) {
                    $item_status = $checked_items->status;
                }else{
                    $checked_items = $this->CheckedItems->newEntity();
                    $data['status'] = NOT_STARTED;
                    $data['compartment_item_id'] = $compartment_item->id;
                    $checked_items = $this->CheckedItems->patchEntity($checked_items, $data);
                    $checked_items = $this->CheckedItems->save($checked_items);
                }
            }

    		$this->set([
                'item' => $item, 
                'item_expirations' => $item_expirations,
                'item_status' => $item_status,
                'checked_item' => $checked_items
                ]
            );
    	}
    }

    public function ajax_update_compartment_status_note()
    {
    	$json['is_success'] = false;
    	$this->viewBuilder()->layout("");
    	if ($this->request->is(['post'])) {
    		$this->Items = TableRegistry::get('Items');
    		$data = $this->request->data;

            $this->CheckedItems = TableRegistry::get('CheckedItems');
            $checked_item = $this->CheckedItems->get($data['checked_item_id']);
            $checked_item->status = $data['status'];
            $this->CheckedItems->save($checked_item);

    		$item = $this->Items->get($data['item_id']);
    		$item = $this->Items->patchEntity($item, $data);
    		if ($this->Items->save($item)) {
                $json['is_success'] = true;      
            } 
    	}
    	echo json_encode($json);
    	exit;
    }

    public function save_item_expiration_date()
    {
        $json['is_success'] = false;
        $this->viewBuilder()->layout("");
        if ($this->request->is(['post'])) {
            $this->ItemExpirations = TableRegistry::get('ItemExpirations');
            $data = $this->request->data;

            $item_expiration = $this->ItemExpirations->newEntity();
            $item_expiration = $this->ItemExpirations->patchEntity($item_expiration, $data);
            if ($this->ItemExpirations->save($item_expiration)) {
                $json['is_success'] = true;
                $json['expiration_date'] = $data['expiration_date'];
            } 
        }
        echo json_encode($json);
        exit;
    }

    public function delete_item_expiration_date()
    {
        $json['is_success'] = false;
        $this->viewBuilder()->layout("");
        if ($this->request->is(['post'])) {
            $this->ItemExpirations = TableRegistry::get('ItemExpirations');
            $item_expiration = $this->ItemExpirations->get($this->request->data['item_expiration_id']);
            if ($this->ItemExpirations->delete($item_expiration)) {
                $json['is_success'] = true;
            }
        }
        echo json_encode($json);
        exit;
    }

}
