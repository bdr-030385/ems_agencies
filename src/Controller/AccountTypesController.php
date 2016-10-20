<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AccountTypes Controller
 *
 * @property \App\Model\Table\AccountTypesTable $AccountTypes
 */
class AccountTypesController extends AppController
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
        $this->set('accountTypes', $this->paginate($this->AccountTypes));
        $this->set('_serialize', ['accountTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Account Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountType = $this->AccountTypes->get($id, [
            'contain' => ['Agencies']
        ]);
        $this->set('accountType', $accountType);
        $this->set('_serialize', ['accountType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountType = $this->AccountTypes->newEntity();
        if ($this->request->is('post')) {
            $accountType = $this->AccountTypes->patchEntity($accountType, $this->request->data);
            if ($this->AccountTypes->save($accountType)) {
                $this->Flash->success(__('The account type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The account type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('accountType'));
        $this->set('_serialize', ['accountType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountType = $this->AccountTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountType = $this->AccountTypes->patchEntity($accountType, $this->request->data);
            if ($this->AccountTypes->save($accountType)) {
                $this->Flash->success(__('The account type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The account type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('accountType'));
        $this->set('_serialize', ['accountType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountType = $this->AccountTypes->get($id);
        if ($this->AccountTypes->delete($accountType)) {
            $this->Flash->success(__('The account type has been deleted.'));
        } else {
            $this->Flash->error(__('The account type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
