<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompartmentItems Controller
 *
 * @property \App\Model\Table\CompartmentItemsTable $CompartmentItems
 */
class CompartmentItemsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Compartments', 'Items']
        ];
        $this->set('compartmentItems', $this->paginate($this->CompartmentItems));
        $this->set('_serialize', ['compartmentItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Compartment Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compartmentItem = $this->CompartmentItems->get($id, [
            'contain' => ['Compartments', 'Items']
        ]);
        $this->set('compartmentItem', $compartmentItem);
        $this->set('_serialize', ['compartmentItem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compartmentItem = $this->CompartmentItems->newEntity();
        if ($this->request->is('post')) {
            $compartmentItem = $this->CompartmentItems->patchEntity($compartmentItem, $this->request->data);
            if ($this->CompartmentItems->save($compartmentItem)) {
                $this->Flash->success(__('The compartment item has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The compartment item could not be saved. Please, try again.'));
            }
        }
        $compartments = $this->CompartmentItems->Compartments->find('list', ['limit' => 200]);
        $items = $this->CompartmentItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('compartmentItem', 'compartments', 'items'));
        $this->set('_serialize', ['compartmentItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Compartment Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compartmentItem = $this->CompartmentItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compartmentItem = $this->CompartmentItems->patchEntity($compartmentItem, $this->request->data);
            if ($this->CompartmentItems->save($compartmentItem)) {
                $this->Flash->success(__('The compartment item has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The compartment item could not be saved. Please, try again.'));
            }
        }
        $compartments = $this->CompartmentItems->Compartments->find('list', ['limit' => 200]);
        $items = $this->CompartmentItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('compartmentItem', 'compartments', 'items'));
        $this->set('_serialize', ['compartmentItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Compartment Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compartmentItem = $this->CompartmentItems->get($id);
        if ($this->CompartmentItems->delete($compartmentItem)) {
            $this->Flash->success(__('The compartment item has been deleted.'));
        } else {
            $this->Flash->error(__('The compartment item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
