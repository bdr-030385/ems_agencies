<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserCustomFields Controller
 *
 * @property \App\Model\Table\UserCustomFieldsTable $UserCustomFields
 */
class UserCustomFieldsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserEntities']
        ];
        $this->set('userCustomFields', $this->paginate($this->UserCustomFields));
        $this->set('_serialize', ['userCustomFields']);
    }

    /**
     * View method
     *
     * @param string|null $id User Custom Field id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userCustomField = $this->UserCustomFields->get($id, [
            'contain' => ['UserEntities']
        ]);
        $this->set('userCustomField', $userCustomField);
        $this->set('_serialize', ['userCustomField']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userCustomField = $this->UserCustomFields->newEntity();
        if ($this->request->is('post')) {
            $userCustomField = $this->UserCustomFields->patchEntity($userCustomField, $this->request->data);
            if ($this->UserCustomFields->save($userCustomField)) {
                $this->Flash->success(__('The user custom field has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The user custom field could not be saved. Please, try again.'));
            }
        }
        $userEntities = $this->UserCustomFields->UserEntities->find('list', ['limit' => 200]);
        $this->set(compact('userCustomField', 'userEntities'));
        $this->set('_serialize', ['userCustomField']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Custom Field id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userCustomField = $this->UserCustomFields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userCustomField = $this->UserCustomFields->patchEntity($userCustomField, $this->request->data);
            if ($this->UserCustomFields->save($userCustomField)) {
                $this->Flash->success(__('The user custom field has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The user custom field could not be saved. Please, try again.'));
            }
        }
        $userEntities = $this->UserCustomFields->UserEntities->find('list', ['limit' => 200]);
        $this->set(compact('userCustomField', 'userEntities'));
        $this->set('_serialize', ['userCustomField']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Custom Field id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userCustomField = $this->UserCustomFields->get($id);
        if ($this->UserCustomFields->delete($userCustomField)) {
            $this->Flash->success(__('The user custom field has been deleted.'));
        } else {
            $this->Flash->error(__('The user custom field could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
