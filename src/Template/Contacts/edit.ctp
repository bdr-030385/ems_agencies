<section class="content-header">
    <h1><?= __('Edit Contact') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Contacts'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($contact,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
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
                                        <label for='email_address' class='col-sm-2 control-label'>" . __('Email Address') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('email_address', ['class' => 'form-control', 'id' => 'email_address', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='street' class='col-sm-2 control-label'>" . __('Street') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('street', ['class' => 'form-control', 'id' => 'street', 'label' => false]);                
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
                                        <label for='phone_h' class='col-sm-2 control-label'>" . __('Phone H') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('phone_h', ['class' => 'form-control', 'id' => 'phone_h', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='phone_c' class='col-sm-2 control-label'>" . __('Phone C') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('phone_c', ['class' => 'form-control', 'id' => 'phone_c', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='carrier' class='col-sm-2 control-label'>" . __('Carrier') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('carrier', ['class' => 'form-control', 'id' => 'carrier', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='emergency_notification_text' class='col-sm-2 control-label'>" . __('Emergency Notification Text') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('emergency_notification_text', ['class' => 'form-control', 'id' => 'emergency_notification_text', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='emergency_notification_email' class='col-sm-2 control-label'>" . __('Emergency Notification Email') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('emergency_notification_email', ['class' => 'form-control', 'id' => 'emergency_notification_email', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='information_text' class='col-sm-2 control-label'>" . __('Information Text') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('information_text', ['class' => 'form-control', 'id' => 'information_text', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='information_email' class='col-sm-2 control-label'>" . __('Information Email') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('information_email', ['class' => 'form-control', 'id' => 'information_email', 'label' => false]);                
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