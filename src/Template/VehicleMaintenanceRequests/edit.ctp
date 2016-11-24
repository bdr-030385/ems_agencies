<section class="content-header">
    <h1><?= __('Edit Vehicle Maintenance Request') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Vehicle Maintenance Requests'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($vehicleMaintenanceRequest,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
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
                                        <label for='user_entity_id' class='col-sm-2 control-label'>" . __('User Entity Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('user_entity_id', ['class' => 'form-control', 'id' => 'user_entity_id', 'label' => false, 'options' => $userEntities]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='complaint' class='col-sm-2 control-label'>" . __('Complaint') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('complaint', ['class' => 'form-control', 'id' => 'complaint', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='complaint_description' class='col-sm-2 control-label'>" . __('Complaint Description') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('complaint_description', ['class' => 'form-control', 'id' => 'complaint_description', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='description' class='col-sm-2 control-label'>" . __('Description') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('description', ['class' => 'form-control', 'id' => 'description', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='note' class='col-sm-2 control-label'>" . __('Note') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('note', ['class' => 'form-control', 'id' => 'note', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='date_occurred' class='col-sm-2 control-label'>" . __('Date Occurred') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('date_occurred', ['class' => 'form-control', 'id' => 'date_occurred', 'label' => false]);                
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