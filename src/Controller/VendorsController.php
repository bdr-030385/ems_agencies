<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use App\Controller\SyncServiceController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Mailer\Email;

/**
 * Vendors Controller
 *
 * @property \App\Model\Table\VendorsTable $Vendors
 */
class VendorsController extends AppController
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
            $nav_selected = ["administrator"];
        }       

        $session = $this->request->session();    
        $user_data = $session->read('User.data');          
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Super Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Administrator
                $this->Auth->deny();
                $this->Auth->allow(['agency_vendors','agency_add','agency_edit','agency_delete']);
            }elseif( $user_data->user->group_id == 3 ){ //Member                
                $this->Auth->deny();
                $this->Auth->allow(['agency_vendors']);
            }
        }

        $this->set('nav_selected', $nav_selected);
        $this->set(['load_css_script' => 'users']);

        $this->Users = TableRegistry::get('Users');
        $users = $this->Users->find('all');
        if($users->count() == 0) {
            //$this->redirect(['controller' => 'customer', 'action' => 'register']);
        }

        $this->viewBuilder()->layout("Ems/default"); 
        $this->Auth->allow(['load_vendor_by_agency_id']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agencies']
        ];
        $this->set('vendors', $this->paginate($this->Vendors));
        $this->set('_serialize', ['vendors']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendor = $this->Vendors->get($id, [
            'contain' => ['Agencies']
        ]);
        $this->set('vendor', $vendor);
        $this->set('_serialize', ['vendor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendor = $this->Vendors->newEntity();
        if ($this->request->is('post')) { 
            $vendor = $this->Vendors->patchEntity($vendor, $this->request->data);
            if ($this->Vendors->save($vendor)) {
                $this->Flash->success(__('The vendor has been saved.'));
                return $this->redirect(['action' => 'index']);
                /*$action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }    */                
            } else {
                $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->Vendors->Agencies->find('list', ['limit' => 200]);
        $this->set(['page_title' => 'Vendor']);
        $this->set(compact('vendor', 'agencies'));
        $this->set('_serialize', ['vendor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendor = $this->Vendors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendor = $this->Vendors->patchEntity($vendor, $this->request->data);
            if ($this->Vendors->save($vendor)) {
                $this->Flash->success(__('The vendor has been saved.'));
                return $this->redirect(['action' => 'index']);
                /*$action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                } */        
            } else {
                $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->Vendors->Agencies->find('list', ['limit' => 200]);
        $this->set(compact('vendor', 'agencies'));
        $this->set('_serialize', ['vendor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendor = $this->Vendors->get($id);
        if ($this->Vendors->delete($vendor)) {
            $this->Flash->success(__('The vendor has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function load_vendor_by_agency_id()
    {
        $this->request->allowMethod(['post']);
        $vendors = $this->Vendors->find('all', ['limit' => 200])->where(['Vendors.agency_id' => $this->request->data['agency_id'] ]);
        $vendors = $vendors->toArray();
        $data = array();
        foreach($vendors as $value) {
            $data[$value['id']] = $value['vendor_name'];
            
        }

        $vendors = $data;

        $this->set(compact('vendors'));
    }

    /**
     * Agency Index method
     *
     * @return void
     */
    public function agency_vendors()
    {
        $session = $this->request->session();    
        $user_data = $session->read('User.data');

        $this->paginate = [
            'contain' => ['Agencies'],
            'conditions' => ['Vendors.agency_id' => $user_data->agency_id]
        ];
        $this->set('vendors', $this->paginate($this->Vendors));
        $this->set('_serialize', ['vendors']);
    }

    /**
     * Agency Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function agency_add()
    {
        $vendor = $this->Vendors->newEntity();
        if ($this->request->is('post')) {
            $session = $this->request->session();    
            $user_data = $session->read('User.data');
            $this->request->data['agency_id'] = $user_data->agency_id;
            $vendor = $this->Vendors->patchEntity($vendor, $this->request->data);
            if ($this->Vendors->save($vendor)) {
                $this->Flash->success(__('The vendor has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'agency_vendors']);
                }else{
                    return $this->redirect(['action' => 'agency_add']);
                }                    
            } else {
                $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
            }
        }        
        $this->set(['page_title' => 'Vendor']);
        $this->set(compact('vendor'));
        $this->set('_serialize', ['vendor']);
    }

    /**
     * Agency Edit method
     *
     * @param string|null $id Vendor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function agency_edit($id = null)
    {
        $vendor = $this->Vendors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendor = $this->Vendors->patchEntity($vendor, $this->request->data);
            if ($this->Vendors->save($vendor)) {
                $this->Flash->success(__('The vendor has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'agency_vendors']);
                }else{
                    return $this->redirect(['action' => 'agency_edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
            }
        }        
        $this->set(compact('vendor'));
        $this->set('_serialize', ['vendor']);
    }

    /**
     * Agency Delete method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function agency_delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendor = $this->Vendors->get($id);
        if ($this->Vendors->delete($vendor)) {
            $this->Flash->success(__('The vendor has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'agency_vendors']);
    }
}
