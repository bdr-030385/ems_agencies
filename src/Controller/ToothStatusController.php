<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;


/**
 * ToothStatus Controller
 *
 * @property \App\Model\Table\ToothStatusTable $ToothStatus
 */
class ToothStatusController extends AppController
{
    public $helpers = ['NavigationSelector'];
    public $paginate = ['maxLimit' => 10];

    /**
     * initialize method     
     * 
     */
    public function initialize()
    {
        parent::initialize();
        // Add the selected sidebar-menu 'active' class
        // Valid value can be found in NavigationSelectorHelper       
        $nav_selected = ["settings"];
        $this->set('nav_selected', $nav_selected);

        //$this->Auth->allow(['list']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        if( isset($this->request->query['str_query']) && trim($this->request->query['str_query']) != '' ){            
            $str_query = trim($this->request->query['str_query']);            
            $toothStatus = $this->ToothStatus->find('all')
                ->where(['ToothStatus.is_archive' => 0, 'ToothStatus.customer_id' => $this->cid])
                ->andWhere(['ToothStatus.code LIKE' => '%' . $str_query . '%'])
                ->orWhere(['ToothStatus.name LIKE' => '%' . $str_query . '%', 'ToothStatus.customer_id' => $this->cid])
                ->order(['ToothStatus.date_updated' => 'DESC'])
            ;
        }else{
            $toothStatus = $this->ToothStatus->find('all')
                ->where(['ToothStatus.is_archive' => 0])
                ->order(['ToothStatus.date_updated' => 'DESC'])
            ;      
        
        }

        $this->set('toothStatus', $toothStatus);
        $this->set('_serialize', ['toothStatus']);
    }

    /**
     * View method
     *
     * @param string|null $id Tooth Status id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $toothStatus = $this->ToothStatus->get($id, [
            'conditions' => ['ToothStatus.customer_id' => $this->cid]
        ]);
        $this->set('toothStatus', $toothStatus);
        $this->set('_serialize', ['toothStatus']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $toothStatus = $this->ToothStatus->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $data['is_archive'] = 0;
            $data['date_created'] = date("Y-m-d H:i:s");
            $data['date_updated'] = date("Y-m-d H:i:s");
            $data['is_sync']      = 1;
            $data['customer_id'] = 1;
            $toothStatus = $this->ToothStatus->patchEntity($toothStatus, $data);
            if ( $result = $this->ToothStatus->save($toothStatus)) {
                //Update sync data
                
                $this->Flash->success(__('The treatment has been saved.'));
                
            } else {
                $this->Flash->error(__('The treatment could not be saved. Please, try again.'));
            }
        }
        return custom_redirect($this,['controller' => 'tooth_status', 'action' => 'index']);
    }

    /**
     * Update method
     *
     * @param string|null $id Tooth Status id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function update()
    {
        $id = $this->request->data['id'];
        $toothStatus = $this->ToothStatus->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            $data['date_updated'] = date("Y-m-d H:i:s");
            $data['is_sync']      = 1;
            $data['customer_id'] = $this->cid;
            $toothStatus = $this->ToothStatus->patchEntity($toothStatus, $data);
            if ( $result = $this->ToothStatus->save($toothStatus)) {
                //Update sync data
                
                $this->Flash->success(__('The treatment has been updated.'));
                
            } else {
                $this->Flash->error(__('The treatment could not be saved. Please, try again.'));
            }
        }
        return custom_redirect($this,['controller' => 'tooth_status', 'action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tooth Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $toothStatus = $this->ToothStatus->get($id);
        $this->archiveData($id,'ToothStatus');

        $this->Flash->success(__('The treatment has been deleted.'));        
        return custom_redirect($this,['controller' => 'tooth_status', 'action' => 'index']);
    }

    /**
     * Archive data
     *
     *@param int $id     
     *@param string $model
     *@return null
    */

    public function archiveData($id = 0, $model = '') 
    {
        if( $id > 0 ){
            $object = $this->{$model}->get($id);
            $object->is_archive = 1;
            $object->is_sync    = 1;
            $this->{$model}->save($object);
        }
    }
}
