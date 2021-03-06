<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Datasource\ConnectionManager;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = [
        'RequestHandler',
        'Acl' => [
            'className' => 'Acl.Acl'
        ]
    ];

    public $global_user_data;

    /**
     * Initialization hook method.
     * ID : CA-01
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => [
                'Acl.Actions' => ['actionPath' => 'controllers/']
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login',
                
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Main',
                'action' => 'index',
                'prefix' => false
            ],
            'authError' => 'You must be logged in to view this page.',
            'flash' => [
                'element' => 'error'
            ]
        ]);

        $session = $this->request->session();    
        $user_data = $session->read('User.data');   
        $this->global_user_data = $user_data;        
        $base_url  = Router::url('/',true);  
        $this->set([
            'base_url' => $base_url,
            'hdr_user_data' => $user_data
        ]);
    }

    /**
     * beforeFilter method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login']);
    }

    /**
     * isAuthorized method
     * ID : CA-03
     * @return void
     */
    public function isAuthorized($user) {
        // Here is where we should verify the role and give access based on role
         
        return true;
    }

    
}
