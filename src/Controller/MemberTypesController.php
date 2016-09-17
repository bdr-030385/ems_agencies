<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MemberTypes Controller
 *
 * @property \App\Model\Table\MemberTypesTable $MemberTypes
 */
class MemberTypesController extends AppController
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
            $nav_selected = ["member_types"];
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
        $this->set('memberTypes', $this->paginate($this->MemberTypes));
        $this->set('_serialize', ['memberTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Member Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $memberType = $this->MemberTypes->get($id, [
            'contain' => ['Agencies']
        ]);
        $this->set('memberType', $memberType);
        $this->set('_serialize', ['memberType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $memberType = $this->MemberTypes->newEntity();
        if ($this->request->is('post')) {
            $memberType = $this->MemberTypes->patchEntity($memberType, $this->request->data);
            if ($this->MemberTypes->save($memberType)) {
                $this->Flash->success(__('The member type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The member type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('memberType'));
        $this->set('_serialize', ['memberType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Member Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $memberType = $this->MemberTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $memberType = $this->MemberTypes->patchEntity($memberType, $this->request->data);
            if ($this->MemberTypes->save($memberType)) {
                $this->Flash->success(__('The member type has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The member type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('memberType'));
        $this->set('_serialize', ['memberType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Member Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $memberType = $this->MemberTypes->get($id);
        if ($this->MemberTypes->delete($memberType)) {
            $this->Flash->success(__('The member type has been deleted.'));
        } else {
            $this->Flash->error(__('The member type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
