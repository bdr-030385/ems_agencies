<?php
namespace App\Controller;

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
 * VendorItems Controller
 *
 * @property \App\Model\Table\VendorItemsTable $VendorItems
 */
class VendorItemsController extends AppController
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
            $nav_selected = ["vendors"];
        }       
        $this->set('nav_selected', $nav_selected);

        $this->set(['load_css_script' => 'users']);

        $this->Users = TableRegistry::get('Users');
        $users = $this->Users->find('all');
        if($users->count() == 0) {
            //$this->redirect(['controller' => 'customer', 'action' => 'register']);
        }

        //$this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendors', 'Items']
        ];
        $this->set('vendorItems', $this->paginate($this->VendorItems));
        $this->set('_serialize', ['vendorItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendor Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendorItem = $this->VendorItems->get($id, [
            'contain' => ['Vendors', 'Items']
        ]);
        $this->set('vendorItem', $vendorItem);
        $this->set('_serialize', ['vendorItem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendorItem = $this->VendorItems->newEntity();
        if ($this->request->is('post')) {
            $vendorItem = $this->VendorItems->patchEntity($vendorItem, $this->request->data);
            if ($this->VendorItems->save($vendorItem)) {
                $this->Flash->success(__('The vendor item has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The vendor item could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->VendorItems->Vendors->find('all', ['limit' => 200]);
        $items = $this->VendorItems->Items->find('list', ['limit' => 200]);
        $vendors = $vendors->toArray();

        $data = array();
        foreach($vendors as $value) {
            $data[$value['id']] = $value['vendor_name'];
        }

        $vendors = $data;
        $this->set(compact('vendorItem', 'vendors', 'items'));
        $this->set('_serialize', ['vendorItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendor Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendorItem = $this->VendorItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendorItem = $this->VendorItems->patchEntity($vendorItem, $this->request->data);
            if ($this->VendorItems->save($vendorItem)) {
                $this->Flash->success(__('The vendor item has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The vendor item could not be saved. Please, try again.'));
            }
        }
        $vendors = $this->VendorItems->Vendors->find('all', ['limit' => 200]);
        $vendors = $vendors->toArray();

        $data = array();
        foreach($vendors as $value) {
            $data[$value['id']] = $value['vendor_name'];
        }

        $vendors = $data;
        $items = $this->VendorItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('vendorItem', 'vendors', 'items'));
        $this->set('_serialize', ['vendorItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendorItem = $this->VendorItems->get($id);
        if ($this->VendorItems->delete($vendorItem)) {
            $this->Flash->success(__('The vendor item has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
