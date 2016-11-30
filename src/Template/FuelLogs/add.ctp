<section class="content-header">
    <h1><?= __('Add Fuel Log') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Fuel Logs'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li class="active"><?= __('Add') ?></li>
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
                    <?= $this->Form->create($fuelLog,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='user_entity_id' class='col-sm-2 control-label'>" . __('User Entity Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('user_entity_id', ['class' => 'form-control', 'id' => 'user_entity_id', 'label' => false, 'options' => $userEntities]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vehicle_id' class='col-sm-2 control-label'>" . __('Vehicle Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vehicle_id', ['class' => 'form-control', 'id' => 'vehicle_id', 'label' => false, 'options' => $vehicles]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='mileage' class='col-sm-2 control-label'>" . __('Mileage') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('mileage', ['class' => 'form-control', 'id' => 'mileage', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='gas_credit_card_number' class='col-sm-2 control-label'>" . __('Gas Credit Card Number') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('gas_credit_card_number', ['class' => 'form-control', 'id' => 'gas_credit_card_number', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='gallons_pumped' class='col-sm-2 control-label'>" . __('Gallons Pumped') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('gallons_pumped', ['class' => 'form-control', 'id' => 'gallons_pumped', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='date_submitted' class='col-sm-2 control-label'>" . __('Date Submitted') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('date_submitted', ['class' => 'form-control', 'id' => 'date_submitted', 'label' => false]);                
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