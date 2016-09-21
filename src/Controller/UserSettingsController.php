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
class UserSettingsController extends AppController
{

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();       
        $this->Auth->allow();
    }

    public function ajax_update_member_push_notification()
    {
        $this->UserEntities = TableRegistry::get('UserEntities');

        $json['is_success'] = false;
        $json['message']    = "Cannot update setting";

        if( isset($this->request->data['enable_push_notification']) ){
            $enable_push_notification = $this->request->data['enable_push_notification'];
            $session   = $this->request->session();    
            $user_data = $session->read('User.data');   

            $userEntity = $this->UserEntities->find()
                ->contain(['Users'])
                ->where(['UserEntities.id' => $user_data->id])
                ->first()
            ;

            if( $userEntity ){
                $userEntity->enable_push_notification = $enable_push_notification;
                $this->UserEntities->save($userEntity);                
                $session->write('User.data', $userEntity);  
                $json['is_success'] = true;
                $json['message']    = "User setting updated";
            } 
        } 

        echo json_encode($json);
        exit;
    }
}
