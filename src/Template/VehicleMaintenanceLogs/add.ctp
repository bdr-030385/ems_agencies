<section class="content-header">
    <h1><?= __('Add Vehicle Maintenance Log') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Vehicle Maintenance Logs'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($vehicleMaintenanceLog,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
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
                                        <label for='vendor_id' class='col-sm-2 control-label'>" . __('Vendor Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vendor_id', ['class' => 'form-control', 'id' => 'vendor_id', 'label' => false, 'options' => $vendors]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='invoice_number' class='col-sm-2 control-label'>" . __('Invoice Number') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('invoice_number', ['class' => 'form-control', 'id' => 'invoice_number', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='mileage' class='col-sm-2 control-label'>" . __('Mileage') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('mileage', ['class' => 'form-control', 'id' => 'mileage', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='date_performed' class='col-sm-2 control-label'>" . __('Date Performed') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('date_performed', ['class' => 'form-control', 'id' => 'date_performed', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vehicle_id' class='col-sm-2 control-label'>" . __('Vehicle Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vehicle_id', ['class' => 'form-control', 'id' => 'vehicle_id', 'label' => false, 'options' => $vehicles]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='submitted_by' class='col-sm-2 control-label'>" . __('Submitted By') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('submitted_by', ['class' => 'form-control', 'id' => 'submitted_by', 'label' => false]);                
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