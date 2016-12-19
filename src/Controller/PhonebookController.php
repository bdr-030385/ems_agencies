<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleMaintenanceRequests Controller
 *
 * @property \App\Model\Table\VehicleMaintenanceRequestsTable $VehicleMaintenanceRequests
 */
class PhonebookController extends AppController
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
        $nav_selected = ["phonebook"];

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        /*if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['administrator']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['member_request']);
            }
        }*/

        $this->set('nav_selected', $nav_selected);  
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        /*$this->paginate = [
            'contain' => ['Agencies', 'UserEntities']
        ];
        $this->set('vehicleMaintenanceRequests', $this->paginate($this->VehicleMaintenanceRequests));
        $this->set('_serialize', ['vehicleMaintenanceRequests']);*/
    }

    
}
