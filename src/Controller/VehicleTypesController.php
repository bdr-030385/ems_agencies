<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleTypes Controller
 *
 * @property \App\Model\Table\VehicleTypesTable $VehicleTypes
 */
class VehicleTypesController extends AppController
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
            $nav_selected = ["settings"];
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
        $this->set('vehicleTypes', $this->paginate($this->VehicleTypes));
        $this->set('_serialize', ['vehicleTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleType = $this->VehicleTypes->get($id, [
            'contain' => ['Vehicles']
        ]);
        $this->set('vehicleType', $vehicleType);
        $this->set('_serialize', ['vehicleType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleType = $this->VehicleTypes->newEntity();
        if ($this->request->is('post')) {
            $vehicleType = $this->VehicleTypes->patchEntity($vehicleType, $this->request->data);
            if ($this->VehicleTypes->save($vehicleType)) {
                $this->Flash->success(__('The vehicle type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The vehicle type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehicleType'));
        $this->set('_serialize', ['vehicleType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleType = $this->VehicleTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleType = $this->VehicleTypes->patchEntity($vehicleType, $this->request->data);
            if ($this->VehicleTypes->save($vehicleType)) {
                $this->Flash->success(__('The vehicle type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehicleType'));
        $this->set('_serialize', ['vehicleType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleType = $this->VehicleTypes->get($id);
        if ($this->VehicleTypes->delete($vehicleType)) {
            $this->Flash->success(__('The vehicle type has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
