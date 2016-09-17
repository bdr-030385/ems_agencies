<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleFiles Controller
 *
 * @property \App\Model\Table\VehicleFilesTable $VehicleFiles
 */
class VehicleFilesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vehicles']
        ];
        $this->set('vehicleFiles', $this->paginate($this->VehicleFiles));
        $this->set('_serialize', ['vehicleFiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle File id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleFile = $this->VehicleFiles->get($id, [
            'contain' => ['Vehicles']
        ]);
        $this->set('vehicleFile', $vehicleFile);
        $this->set('_serialize', ['vehicleFile']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleFile = $this->VehicleFiles->newEntity();
        if ($this->request->is('post')) {
            $vehicleFile = $this->VehicleFiles->patchEntity($vehicleFile, $this->request->data);
            if ($this->VehicleFiles->save($vehicleFile)) {
                $this->Flash->success(__('The vehicle file has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The vehicle file could not be saved. Please, try again.'));
            }
        }
        $vehicles = $this->VehicleFiles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleFile', 'vehicles'));
        $this->set('_serialize', ['vehicleFile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle File id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleFile = $this->VehicleFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleFile = $this->VehicleFiles->patchEntity($vehicleFile, $this->request->data);
            if ($this->VehicleFiles->save($vehicleFile)) {
                $this->Flash->success(__('The vehicle file has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vehicle file could not be saved. Please, try again.'));
            }
        }
        $vehicles = $this->VehicleFiles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('vehicleFile', 'vehicles'));
        $this->set('_serialize', ['vehicleFile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle File id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleFile = $this->VehicleFiles->get($id);
        if ($this->VehicleFiles->delete($vehicleFile)) {
            $this->Flash->success(__('The vehicle file has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle file could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
