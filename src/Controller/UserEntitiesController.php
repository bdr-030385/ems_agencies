<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserEntities Controller
 *
 * @property \App\Model\Table\UserEntitiesTable $UserEntities
 */
class UserEntitiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agencies', 'Users', 'Members']
        ];
        $this->set('userEntities', $this->paginate($this->UserEntities));
        $this->set('_serialize', ['userEntities']);
    }

    /**
     * View method
     *
     * @param string|null $id User Entity id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userEntity = $this->UserEntities->get($id, [
            'contain' => ['Agencies', 'Users', 'Members', 'UserCustomFields']
        ]);
        $this->set('userEntity', $userEntity);
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userEntity = $this->UserEntities->newEntity();
        if ($this->request->is('post')) {
            $userEntity = $this->UserEntities->patchEntity($userEntity, $this->request->data);
            if ($this->UserEntities->save($userEntity)) {
                $this->Flash->success(__('The user entity has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user entity could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->UserEntities->Agencies->find('list', ['limit' => 200]);
        $users = $this->UserEntities->Users->find('list', ['limit' => 200]);
        $members = $this->UserEntities->Members->find('list', ['limit' => 200]);
        $this->set(compact('userEntity', 'agencies', 'users', 'members'));
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Entity id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userEntity = $this->UserEntities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userEntity = $this->UserEntities->patchEntity($userEntity, $this->request->data);
            if ($this->UserEntities->save($userEntity)) {
                $this->Flash->success(__('The user entity has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user entity could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->UserEntities->Agencies->find('list', ['limit' => 200]);
        $users = $this->UserEntities->Users->find('list', ['limit' => 200]);
        $members = $this->UserEntities->Members->find('list', ['limit' => 200]);
        $this->set(compact('userEntity', 'agencies', 'users', 'members'));
        $this->set('_serialize', ['userEntity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Entity id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userEntity = $this->UserEntities->get($id);
        if ($this->UserEntities->delete($userEntity)) {
            $this->Flash->success(__('The user entity has been deleted.'));
        } else {
            $this->Flash->error(__('The user entity could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
