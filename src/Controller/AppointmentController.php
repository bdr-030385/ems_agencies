<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

/**
 * Appointment Controller
 *
 * @property \App\Model\Table\AppointmentTable $Appointment
 */
class AppointmentController extends AppController
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
        $nav_selected = ["appointments"];
        $this->set('nav_selected', $nav_selected);

        if($this->Auth->user()){
            //echo 222; exit;
            //custom_redirect($this,array('controller' => 'appointment', 'action' => 'index'));      
        }else{
            $this->redirect(['controller' => 'users', 'action' => 'login']);
            //echo 111; exit;
        }

        /*$session = $this->request->session();    
        $user_data = $session->read('User.data'); 
        if( isset($user_data) ){
            if( $user_data->user->group_id == 1 ){ //Admin
                $this->Auth->allow();
            }elseif( $user_data->user->group_id == 2 ){ //Company
                $this->Auth->allow(['dashboard']);
            }    
        }*/
        $this->set(['load_css_script' => 'appointment']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index($default_date = null)
    {
        if($default_date == null) {
            $default_date = date("Y-m-d");
        }

        $selected_date = date("Y-m-d");

        $this->set(['type' => array('Walk-in' => 'Walk-in', 'Via Call' => 'Via Call') ]);
        $this->set([ 'selected_date' => $selected_date, 'a_provinces' => array('1' => '1') ]);
        $this->set(['load_full_calendar' => true,'default_date' => $default_date ]);
        $this->set('appointment', $this->paginate($this->Appointment));
        $this->set('_serialize', ['appointment']);
    }

    /**
     * View method
     *
     * @param string|null $id Appointment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appointment = $this->Appointment->get($id, [
            'contain' => []
        ]);
        $this->set('appointment', $appointment);
        $this->set('_serialize', ['appointment']);
    }

    /**
     * Add method
     * 
     * 
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appointment = $this->Appointment->newEntity();

        $proceed = true;
        $patient_id = 0;
        if ($this->request->is('post')) {
            $data = $this->request->data;

            // Patient saving
            $this->Patient = TableRegistry::get('Patient');
            $patients = $this->Patient->find('all')
                ->where(['Patient.is_archive' => 0])
                ->andWhere(['Patient.firstname ' => $this->request->data['firstname']])
                ->andWhere(['Patient.lastname ' => $this->request->data['lastname']])
                ->andWhere(['Patient.middlename ' => $this->request->data['middlename']])
                ->andWhere(['Patient.customer_id ' => $this->cid])
                ->limit(1);

            if( $patients->count() > 0 ){
                foreach( $patients as $patient ){ 
                    $patient_id = $patient->id;
                }
            }else{

                $session        = $this->request->session();
                $customer_data  = $session->read('Customer.data'); 
                if( $customer_data['package_type'] == PACKAGE_1 ){
                    $limit = 0;
                    if( $customer_data['subscription_type'] == SUBSCRIPTION_TYPE_BASIC) {
                        $limit = BASIC_LIMIT;
                    }else if( $customer_data['subscription_type'] == SUBSCRIPTION_TYPE_STANDARD) {
                        $limit = STANDARD_LIMIT;
                    }else if( $customer_data['subscription_type'] == SUBSCRIPTION_TYPE_PREMIUM) {
                        $limit = PREMIUM_LIMIT;
                    }

                    $total_active_patient = $this->Patient->find()->where(['is_archive' => 0])->count();

                    if($total_active_patient >= $limit) {
                        $proceed = false;
                    }
                }

                if($proceed) {
                    $patient = $this->Patient->newEntity();

                    $patient_data['customer_id']    = $this->cid;
                    $patient_data['firstname']    = ucfirst($this->request->data['firstname']);
                    $patient_data['lastname']     = ucfirst($this->request->data['lastname']);
                    $patient_data['middlename']   = ucfirst($this->request->data['middlename']);
                    $patient_data['mobile_number']   = $this->request->data['contact_number'];
                    $patient_data['address']      = $this->request->data['address'];
                    $patient_data['province']      = $this->request->data['province'];
                    $patient_data['city']      = $this->request->data['city'];
                    $patient_data['birthdate']    = '1970-01-01';
                    $patient_data['date_created'] = date("Y-m-d H:i:s");
                    $patient_data['date_updated'] = date("Y-m-d H:i:s");
                    $patient_data['is_treatment'] = 0;
                    $patient_data['created_by']   = '';
                    $patient_data['referred_by']  = '';
                    $patient_data['remarks']      = '';
                    $patient_data['is_sync']      = 1;
                    $patient_data['is_archive']   = 0; 

                    $patient = $this->Patient->patchEntity($patient, $patient_data);  

                    if ( $result = $this->Patient->save($patient)) {
                        $patient_id = $result->id;
                        $patient_code = generatePatientCode($result->id);
                        $result->patient_code = $patient_code;
                        $this->Patient->save($result);
                        $this->updateSyncStatus('Patient', $result, 'patient', 'add');
                    }
                }
                
            }

            // Appointment saving
            $data['customer_id'] = $this->cid;
            $data['appointment_date'] = $this->request->data['dt_appointment_date'];
            $data['start_time']  = date("H:i:s",strtotime($data['start_time']));
            $data['end_time']    = date("H:i:s",strtotime($data['end_time']));
            //$data['appointment_date'] = date('l, F d, Y',strtotime($data['appointment_date']));
            $data['date_created'] = date("Y-m-d H:i:s");
            $data['date_updated'] = date("Y-m-d H:i:s");
            $data['is_archive']   = 0;
            $data['is_sync']      = 1;
            $data['patient_id']   = $patient_id;
            $appointment = $this->Appointment->patchEntity($appointment, $data);
            
            if($proceed) {
                /*$app = $this->Appointment->find('all')
                    ->where(['Appointment.appointment_date' => $data['appointment_date']])
                    ->andWhere([function($exp) {
                        return $exp->between("'".date("H:i:s",strtotime($this->request->data['start_time']))."'", new \Cake\Database\Expression\IdentifierExpression('Appointment.start_time') , new \Cake\Database\Expression\IdentifierExpression('Appointment.end_time') );
                    }])
                    ->orWhere([function($exp) {
                        return $exp->between("'".date("H:i:s",strtotime($this->request->data['end_time']))."'", new \Cake\Database\Expression\IdentifierExpression('Appointment.start_time') , new \Cake\Database\Expression\IdentifierExpression('Appointment.end_time') );
                    }])
                    ->limit(10);*/
                //debug($app);
                /*if($app->count() > 0) {

                }else{
                    
                }*/

                if ( $result = $this->Appointment->save($appointment)) {
                    //Update sync data
                    $this->updateSyncStatus('Appointment', $result, 'appointment', 'add');
                    $this->Flash->success(__('The appointment has been saved.'));
                } else {
                    $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
                }
            }else{
                $this->Flash->error(__('You have reached the maximum limit of patient.'));
            }
            
        }
        return custom_redirect($this,['controller' => 'appointment', 'action' => 'index']);
        exit;
    }

    /**
     * Edit method
     *
     *
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit()
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            $appointment = $this->Appointment->get($data['id'], [
                'conditions' => ['Appointment.customer_id' => $this->cid, 'Appointment.is_archive' => 0]
            ]);

            if($appointment) {
                $data['customer_id']    = $this->cid;
                $data['appointment_date'] = $this->request->data['dt_appointment_date'];            
                $data['date_updated'] = date("Y-m-d H:i:s");
                $data['is_sync']      = 1;
                $data['start_time']  = date("H:i:s",strtotime($data['start_time']));
                $data['end_time']    = date("H:i:s",strtotime($data['end_time']));

                $appointment = $this->Appointment->patchEntity($appointment, $data);
                if ( $result = $this->Appointment->save($appointment)) {
                    //Update sync data
                    $this->updateSyncStatus('Appointment', $result, 'appointment', 'update');
                    $this->Flash->success(__('The appointment has been updated.'));             
                } else {
                    $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
                }
            }else{
                $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
            }
            
        }

        return custom_redirect($this,['action' => 'index']);
        exit;
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appointment = $this->Appointment->get($id, [
            'conditions' => ['Appointment.customer_id' => $this->cid ]
        ]);
        $this->archiveData($id,'Appointment');
        $this->updateSyncStatus('Appointment', $appointment, 'appointment', 'delete');
        $this->Flash->success(__('The appointment has been deleted.'));   
        return custom_redirect($this,['action' => 'index']);
    }

    /**
     * Ajax load appointments by date method
     *     
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function ajax_load_appointments_by_date()
    {   
        $date = $this->request->query['date'];
        $appointments = $this->Appointment->find('all')
            ->where(['Appointment.appointment_date' => $date, 'Patient.is_archive' => 0, 'Appointment.is_archive' => 0,'Appointment.customer_id' => $this->cid,'Patient.customer_id' => $this->cid])
            ->contain(['Patient'])
            ->order(['Appointment.start_time' => 'ASC'])
        ;

        $this->viewBuilder()->layout('');

        $this->set(['type' => array('Walk-in' => 'Walk-in', 'Via Call' => 'Via Call') ]);
        $this->set(['appointments' => $appointments]);
    }

    /**
     * Ajax load appointments by date method
     *     
     * @return json
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function json_load_events()
    {
        // Set layout as blank to enable json
        $this->viewBuilder()->layout('');
        $data = $this->request->query;
        $appointments = $this->Appointment->find()
            ->where([
                'Appointment.appointment_date >=' => $data['start'], 
                'Appointment.appointment_date <=' => $data['end'], 
                'Patient.is_archive' => 0,
                'Appointment.is_archive' => 0,
                'Appointment.customer_id' => $this->cid,
                'Patient.customer_id' => $this->cid
                ])
            ->contain(['Patient'])
            ->order(['Appointment.appointment_date' => 'ASC']);

        //Construct json data       
        $counter   = 0;
        $last_date = '';
        $json_data = array();
        if( $appointments->count() > 0 ){
            foreach( $appointments as $appointment ){                
                $json_data[$counter]['start']     = $appointment->appointment_date->format('Y-m-d');
                $json_data[$counter]['end']       = $appointment->appointment_date->format('Y-m-d');
                $json_data[$counter]['date_event'] = $appointment->appointment_date->format('Y-m-d');          
                $json_data[$counter]['id']    = $appointment->id;
                $counter++;
            }
        }
        
        echo json_encode($json_data);
        exit;        
    }

   /**
     * Index method
     *
     * @return void
     */
    public function search()
    {
        if( isset($this->request->query['str_query']) && trim($this->request->query['str_query']) != '' ){
            $str_query = trim($this->request->query['str_query']);
            $appointments = $this->Appointment->find('all') 
                ->where(['Appointment.note LIKE' => '%' . $str_query . '%'])
                ->orWhere(['Appointment.firstname LIKE' => '%' . $str_query . '%'])
                ->orWhere(['Appointment.lastname LIKE' => '%' . $str_query . '%'])            
            ;
        }else{
            return custom_redirect($this,['action' => 'index']);
        }

        $this->set('appointments', $this->paginate($appointments));
        $this->set('_serialize', ['appointment']);
    }

    /**
     * Update sync status 
     *
     *@param string $model
     *@param array $object
     *@param string $action - add / update / delete
     *@return null
    */

    public function updateSyncStatus($model = '', $object, $table_name = '', $action = '') 
    {
        // Check if internet is available
        $session        = $this->request->session();
        $customer_data  = $session->read('Customer.data'); 
        if( $customer_data['package_type'] == PACKAGE_1 ){
            if(isNetworkAvailable()) {                            
                if( !empty($customer_data) ){               
                    // Fill required fields 
                    $data = $object->toArray();
                    if( !empty($data['appointment_date']) && !empty($data['start_time']) && !empty($data['end_time']) ) {
                        $data['appointment_date'] = date("D, M d, Y",strtotime($data['appointment_date']));
                        $data['start_time']  = date("h:i A",strtotime($data['start_time']));
                        $data['end_time']    = date("h:i A",strtotime($data['end_time']));
                    }
                    
                    $data['action']      = $action;
                    $data['s_code']      = $table_name;
                    $data['device_type'] = 'desktop';
                    $data['mac_address'] = getMacAddress();
                    $data['pk_id']       = $object->id;
                    $data['customer_id'] = $customer_data->customer_id;

                    $data['date_created'] = date("Y-m-d h:i:s A",strtotime($data['date_created']));
                    $data['date_updated'] = date("Y-m-d h:i:s A",strtotime($data['date_updated']));

                    // Post data to cloud app
                    $response = apiIntellidentGetResponse("sync.php", $data);
                    if($response['is_success'] == 1) {
                        // Reset is_sync to 0 since the data has been synced to cloudDB
                        $object->is_sync  = 0;
                        $this->{$model}->save($object);
                    }
                }
            }
        }     
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
