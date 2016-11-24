<div class="cd-tabs">
  <style type="text/css">
    label
    {
      padding: 10px;
      padding-left: 0px;
      padding-top: 0px;
      }
  </style>
<ul class="cd-tabs-content" style="width: 100%;float: left;">
    <li data-content="tab1" class="selected">
  <!-- second partition -->
  <div class="page-title" align="center">
    <h1 style="font-size: 30px; color: #000"> Add New Vehicle </h1>
   
    <br>
    <br>
   
  </div>
  <div class="col-md-12" style="color: #000">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($vehicle,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php                        
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
                                <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back To list'), ['action' => 'agency_vehicles'],['class' => 'btn btn-warning', 'escape' => false]) ?>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
        <!-- END FORM-->
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>
</li>
</ul>
</div>
