<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleCompartments Controller
 *
 * @property \App\Model\Table\VehicleCompartmentsTable $VehicleCompartments
 */
class VehicleCompartmentsController extends AppController
{

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
}
