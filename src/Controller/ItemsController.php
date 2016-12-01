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
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout("Ems/default"); 
        // Add the selected sidebar-menu 'active' class
        // Valid value can be found in NavigationSelectorHelper   
        $this->viewBuilder()->layout("Ems/default");     
        if ($this->request->action == "dashboard") {
            $nav_selected = ["dashboard"];
        } else {
            $nav_selected = ["administrator"];
        }       
        $this->set('nav_selected', $nav_selected);

        $this->set(['load_css_script' => 'items']);

        $this->Users = TableRegistry::get('Users');
        $users = $this->Users->find('all');
        if($users->count() == 0) {
            //$this->redirect(['controller' => 'customer', 'action' => 'register']);
        }

        $this->Auth->allow(['add_vendor_item']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agencies', 'ItemCategories', 'Vendors']
        ];
        $optionsUom = ['Case' => 'Case', 'Pack' => 'Pack', 'Piece' => 'Piece'];
        $this->set('items', $this->paginate($this->Items));
        $this->set(['optionsUom' => $optionsUom]);
        $this->set('_serialize', ['items']);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Agencies', 'ItemCategories', 'Vendors', 'ItemExpirations', 'VendorItems']
        ]);
        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['expiration_date'] = '2100-01-01';
            if( $this->request->data['is_part_800'] == 0 ){
                $this->request->data['part_800'] = "";
            }             
            $item = $this->Items->patchEntity($item, $this->request->data);            
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'add']);
                }                    
            } else {
                $this->Flash->error(__('The item could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->Items->Agencies->find('list', ['limit' => 200]);
        $itemCategories = $this->Items->ItemCategories->find('list', ['limit' => 200]);
        $vendors = $this->Items->Vendors->find('all', ['limit' => 200]);
        $vendors = $vendors->toArray();
        $data = array();
        foreach($vendors as $value) {
            $data[$value['id']] = $value['vendor_name'];
            
        }

        $vendors = $data;
        $reorder_category = get_reorder_category();
        $load_form_css = true;
        $this->set(compact('item', 'agencies', 'itemCategories', 'vendors', 'reorder_category','load_form_css'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->data);
            if( $this->request->data['is_part_800'] == 0 ){
                $this->request->data['part_800'] = "";
            }
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));
                $action = $this->request->data['save'];
                if( $action == 'save' ){
                    return $this->redirect(['action' => 'index']);
                }else{
                    return $this->redirect(['action' => 'edit', $id]);
                }         
            } else {
                $this->Flash->error(__('The item could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->Items->Agencies->find('list', ['limit' => 200]);
        $itemCategories = $this->Items->ItemCategories->find('list', ['limit' => 200]);
        $vendors = $this->Items->Vendors->find('all', ['limit' => 200]);
        $vendors = $vendors->toArray();
        $data = array();
        foreach($vendors as $value) {
            $data[$value['id']] = $value['vendor_name'];
            
        }

        $vendors = $data;
        $reorder_category = get_reorder_category();
        $load_form_css = true;
        $this->set(compact('item', 'agencies', 'itemCategories', 'vendors', 'reorder_category','load_form_css'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function add_vendor_item()
    {
        $this->VendorItems = TableRegistry::get('VendorItems');
        $vendorItem = $this->VendorItems->newEntity();
        if ($this->request->is('post')) {
            $vendorItem = $this->VendorItems->patchEntity($vendorItem, $this->request->data);
            if ($this->VendorItems->save($vendorItem)) {
                $this->Flash->success(__('The vendor item has been saved.'));                               
            } else {
                $this->Flash->error(__('The vendor item could not be saved. Please, try again.'));
            }            
        }
        return $this->redirect(['action' => 'index']);    
    }

    public function info()
    {
    	$this->set(['page_title' => 'Item Information']);
    }
}
