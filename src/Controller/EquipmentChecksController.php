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
 * UserEntities Controller
 *
 * @property \App\Model\Table\UserEntitiesTable $UserEntities
 */
class EquipmentChecksController extends AppController
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
        $this->viewBuilder()->layout("Ems/default"); 
        $nav_selected = ["equipment_checks"];      

        $this->Auth->allow();
        $this->set('nav_selected', $nav_selected);

        $this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->redirect(['action' => 'my_checks']);
    }

    public function my_checks()
    {
        $this->set(['page_title' => 'Rig/Inventory Check']);
    }
}
