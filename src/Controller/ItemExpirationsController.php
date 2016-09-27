<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemExpirations Controller
 *
 * @property \App\Model\Table\ItemExpirationsTable $ItemExpirations
 */
class ItemExpirationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items']
        ];
        $this->set('itemExpirations', $this->paginate($this->ItemExpirations));
        $this->set('_serialize', ['itemExpirations']);
    }

    /**
     * View method
     *
     * @param string|null $id Item Expiration id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemExpiration = $this->ItemExpirations->get($id, [
            'contain' => ['Items']
        ]);
        $this->set('itemExpiration', $itemExpiration);
        $this->set('_serialize', ['itemExpiration']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemExpiration = $this->ItemExpirations->newEntity();
        if ($this->request->is('post')) {
            $itemExpiration = $this->ItemExpirations->patchEntity($itemExpiration, $this->request->data);
            if ($this->ItemExpirations->save($itemExpiration)) {
                $this->Flash->success(__('The item expiration has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The item expiration could not be saved. Please, try again.'));
            }
        }
        $items = $this->ItemExpirations->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemExpiration', 'items'));
        $this->set('_serialize', ['itemExpiration']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Expiration id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemExpiration = $this->ItemExpirations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemExpiration = $this->ItemExpirations->patchEntity($itemExpiration, $this->request->data);
            if ($this->ItemExpirations->save($itemExpiration)) {
                $this->Flash->success(__('The item expiration has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The item expiration could not be saved. Please, try again.'));
            }
        }
        $items = $this->ItemExpirations->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemExpiration', 'items'));
        $this->set('_serialize', ['itemExpiration']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Expiration id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemExpiration = $this->ItemExpirations->get($id);
        if ($this->ItemExpirations->delete($itemExpiration)) {
            $this->Flash->success(__('The item expiration has been deleted.'));
        } else {
            $this->Flash->error(__('The item expiration could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
