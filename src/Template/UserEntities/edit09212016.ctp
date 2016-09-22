<section class="content-header">
    <h1><?= __('Edit User Entity') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('User Entities'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li class="active"><?= __('Edit') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">

                </div>
                <div class="box-body">
                    <?= $this->Form->create(null,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='agency_id' class='col-sm-2 control-label'>" . __('Agency Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('agency_id', ['class' => 'form-control', 'id' => 'agency_id', 'label' => false, 'options' => $agencies]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='user_id' class='col-sm-2 control-label'>" . __('User Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('user_id', ['class' => 'form-control', 'id' => 'user_id', 'label' => false, 'options' => $users]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='firstname' class='col-sm-2 control-label'>" . __('Firstname') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('firstname', ['class' => 'form-control', 'id' => 'firstname', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='lastname' class='col-sm-2 control-label'>" . __('Lastname') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('lastname', ['class' => 'form-control', 'id' => 'lastname', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='mi' class='col-sm-2 control-label'>" . __('Mi') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('mi', ['class' => 'form-control', 'id' => 'mi', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='mid' class='col-sm-2 control-label'>" . __('Mid') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('mid', ['class' => 'form-control', 'id' => 'mid', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='gender' class='col-sm-2 control-label'>" . __('Gender') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('gender', ['class' => 'form-control', 'id' => 'gender', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='birthdate' class='col-sm-2 control-label'>" . __('Birthdate') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('birthdate', ['class' => 'form-control', 'id' => 'birthdate', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='ssn' class='col-sm-2 control-label'>" . __('Ssn') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('ssn', ['class' => 'form-control', 'id' => 'ssn', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='address' class='col-sm-2 control-label'>" . __('Address') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('address', ['class' => 'form-control', 'id' => 'address', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='city' class='col-sm-2 control-label'>" . __('City') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('city', ['class' => 'form-control', 'id' => 'city', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='state' class='col-sm-2 control-label'>" . __('State') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('state', ['class' => 'form-control', 'id' => 'state', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='zip' class='col-sm-2 control-label'>" . __('Zip') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('zip', ['class' => 'form-control', 'id' => 'zip', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='email' class='col-sm-2 control-label'>" . __('Email') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('email', ['class' => 'form-control', 'id' => 'email', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='phone' class='col-sm-2 control-label'>" . __('Phone') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('phone', ['class' => 'form-control', 'id' => 'phone', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='home' class='col-sm-2 control-label'>" . __('Home') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('home', ['class' => 'form-control', 'id' => 'home', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='work_phone' class='col-sm-2 control-label'>" . __('Work Phone') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('work_phone', ['class' => 'form-control', 'id' => 'work_phone', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='cell_phone' class='col-sm-2 control-label'>" . __('Cell Phone') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('cell_phone', ['class' => 'form-control', 'id' => 'cell_phone', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='cell_phone_carrier' class='col-sm-2 control-label'>" . __('Cell Phone Carrier') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('cell_phone_carrier', ['class' => 'form-control', 'id' => 'cell_phone_carrier', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='emergency_contact_name' class='col-sm-2 control-label'>" . __('Emergency Contact Name') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('emergency_contact_name', ['class' => 'form-control', 'id' => 'emergency_contact_name', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='emergency_email' class='col-sm-2 control-label'>" . __('Emergency Email') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('emergency_email', ['class' => 'form-control', 'id' => 'emergency_email', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="action-fixed-bottom">
                                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </section>
    </div>
</section>