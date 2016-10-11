<section class="content-header">
    <h1><?= __('Add Vehicle') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-car'></i>" . __('Vehicles'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($vehicle,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='agency_id' class='col-sm-2 control-label'>" . __('Agency') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('agency_id', ['class' => 'form-control', 'id' => 'agency_id', 'label' => false, 'options' => $agencies]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vehicle_type_id' class='col-sm-2 control-label'>" . __('Vehicle Type') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vehicle_type_id', ['class' => 'form-control', 'id' => 'vehicle_type_id', 'label' => false, 'options' => $vehicleTypes]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='color_id' class='col-sm-2 control-label'>" . __('Color') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('color_id', ['class' => 'form-control', 'id' => 'color_id', 'label' => false, 'options' => $colors]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='number_vehicle' class='col-sm-2 control-label'>" . __('Vehicle ID') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('number_vehicle', ['class' => 'form-control', 'id' => 'number_vehicle', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vehicle_year' class='col-sm-2 control-label'>" . __('Vehicle Year') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('vehicle_year', ['class' => 'form-control', 'id' => 'vehicle_year', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='make' class='col-sm-2 control-label'>" . __('Make') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('make', ['class' => 'form-control', 'id' => 'make', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='model' class='col-sm-2 control-label'>" . __('Model') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('model', ['class' => 'form-control', 'id' => 'model', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vin' class='col-sm-2 control-label'>" . __('Vin') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('vin', ['class' => 'form-control', 'id' => 'vin', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='part_vehicle_inspection' class='col-sm-2 control-label'>" . __('Vehicle Inspection') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('part_vehicle_inspection', ['options' => array('Yes' => 'Yes', 'No' => 'No'), 'class' => 'form-control', 'id' => 'part_vehicle_inspection', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='registration_card' class='col-sm-2 control-label'>" . __('Registration Card') . "</label>
                                        <div class='col-sm-6 '><div class='input-group'><span class='input-group-addon'><i class='fa fa-picture-o'></i></span>";
                                        echo $this->Form->input('registration_card', ['class' => 'form-control has-ck-finder', 'id' => 'registration_card', 'label' => false]);                
                                    echo "</div> </div></div>";  

                                    echo "
                                    <div class='form-group'>
                                        <label for='registration_card_expiration_date' class='col-sm-2 control-label'>" . __('Registration Card Expiration Date') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('registration_card_expiration_date', ['type' => 'text', 'class' => 'form-control default-datepicker', 'id' => 'registration_card_expiration_date', 'label' => false]);                
                                    echo " </div></div>";   
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='insurance_card' class='col-sm-2 control-label'>" . __('Insurance Card') . "</label>
                                        <div class='col-sm-6'><div class='input-group'><span class='input-group-addon'><i class='fa fa-picture-o'></i></span>";
                                        echo $this->Form->input('insurance_card', ['class' => 'form-control has-ck-finder', 'id' => 'insurance_card', 'label' => false]);                
                                    echo " </div></div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='insurance_card_expiration_date' class='col-sm-2 control-label'>" . __('Insurance Card Expiration Date') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('insurance_card_expiration_date', ['type' => 'text', 'class' => 'form-control default-datepicker', 'id' => 'insurance_card_expiration_date', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="action-fixed-bottom">
                                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue adding'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
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