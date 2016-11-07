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
    <h1 style="font-size: 30px; color: #000"> Add New Agency </h1>
   
    <br>
    <br>
   
  </div>
  <div class="col-md-12" style="color: #000">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create(null,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
            <fieldset>                 
                <?php
                    echo "
                    <div class='form-group'>
                        <label for='account_type_id' class='col-sm-2 control-label'>" . __('Account Type') . "</label>
                        <div class='col-sm-6'>";
                         echo $this->Form->input('account_type_id', ['class' => 'form-control', 'required' => 'required', 'id' => 'account_type_id', 'label' => false, 'options' => $accountTypes]);                 
                    echo " </div></div>";    
                    echo "
                    <div class='form-group'>
                        <label for='member_type_id' class='col-sm-2 control-label'>" . __('Member Type') . "</label>
                        <div class='col-sm-6'>";
                         echo $this->Form->input('member_type_id', ['class' => 'form-control', 'required' => 'required', 'id' => 'member_type_id', 'label' => false, 'options' => $memberTypes]);                 
                    echo " </div></div>";    
                    echo "
                    <div class='form-group'>
                        <label for='name' class='col-sm-2 control-label'>" . __('Name') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('name', ['class' => 'form-control', 'required' => 'required', 'id' => 'name', 'label' => false]);                
                    echo " </div></div>";    
                    
                    echo "
                    <div class='form-group'>
                        <label for='emt_number' class='col-sm-2 control-label'>" . __('Emt Number') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('emt_number', ['class' => 'form-control', 'required' => 'required',  'id' => 'emt_number', 'label' => false]);                
                    echo " </div></div>";    
                    
                    echo "
                    <div class='form-group'>
                        <label for='status' class='col-sm-2 control-label'>" . __('Status') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('status', ['class' => 'form-control', 'id' => 'status', 'label' => false]);                
                    echo " </div></div>";    
                    
                    echo "
                    <div class='form-group'>
                        <label for='start_date' class='col-sm-2 control-label'>" . __('Start Date') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('start_date', ['class' => 'form-control default-datepicker', 'id' => 'start_date', 'label' => false]);                
                    echo " </div></div>"; 

                    echo "
                    <div class='form-group'>
                        <label for='logo' class='col-sm-2 control-label'>" . __('Logo') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('logo', ['class' => 'form-control has-ck-finder', 'id' => 'logo', 'label' => false]);                
                    echo " </div></div>";  

                    echo "
                    <div class='form-group'>
                        <label for='address_street1' class='col-sm-2 control-label'>" . __('Address (Street 1)') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('address_street1', ['class' => 'form-control', 'id' => 'address_street1', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='address_street2' class='col-sm-2 control-label'>" . __('Address (Street 2)') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('address_street2', ['class' => 'form-control', 'id' => 'address_street2', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='city1' class='col-sm-2 control-label'>" . __('City') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('city1', ['class' => 'form-control', 'id' => 'city1', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='state1' class='col-sm-2 control-label'>" . __('State') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('state1', ['class' => 'form-control', 'id' => 'state1', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='zip1' class='col-sm-2 control-label'>" . __('Zip') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('zip1', ['class' => 'form-control', 'id' => 'zip1', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='mailing_address_street1' class='col-sm-2 control-label'>" . __('Mailing Address (Street 1)') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('mailing_address_street1', ['class' => 'form-control', 'id' => 'mailing_address_street1', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='mailing_address_street2' class='col-sm-2 control-label'>" . __('Mailing Address (Street 2)') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('mailing_address_street2', ['class' => 'form-control', 'id' => 'mailing_address_street2', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='city2' class='col-sm-2 control-label'>" . __('City') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('city2', ['class' => 'form-control', 'id' => 'city2', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='state2' class='col-sm-2 control-label'>" . __('State') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('state2', ['class' => 'form-control', 'id' => 'state2', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='zip2' class='col-sm-2 control-label'>" . __('Zip') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('zip2', ['class' => 'form-control', 'id' => 'zip2', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='state_certification' class='col-sm-2 control-label'>" . __('State Certification') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('state_certification', ['class' => 'form-control', 'id' => 'state_certification', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='state_certificate_number' class='col-sm-2 control-label'>" . __('State Certificate Number') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('state_certificate_number', ['class' => 'form-control', 'id' => 'state_certificate_number', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='state_certificate_file' class='col-sm-2 control-label'>" . __('State Certificate File') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('state_certificate_file', ['class' => 'form-control', 'id' => 'state_certificate_file', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='regional_authority' class='col-sm-2 control-label'>" . __('Regional/Hospital Authority') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('regional_authority', ['class' => 'form-control', 'id' => 'regional_authority', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='regional_certificate_number' class='col-sm-2 control-label'>" . __('Regional Certificate Number') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('regional_certificate_number', ['class' => 'form-control', 'id' => 'regional_certificate_number', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='regional_certificate_file' class='col-sm-2 control-label'>" . __('Regional Certificate File') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('regional_certificate_file', ['class' => 'form-control', 'id' => 'regional_certificate_file', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='tax_id_number' class='col-sm-2 control-label'>" . __('Tax ID') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('tax_id_number', ['class' => 'form-control', 'id' => 'tax_id_number', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='tax_exemption' class='col-sm-2 control-label'>" . __('Tax Exemption') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('tax_exemption', ['class' => 'form-control', 'id' => 'tax_exemption', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='tax_certificate_file' class='col-sm-2 control-label'>" . __('Tax Certificate') . "</label>
                        <div class='col-sm-6'>";
                        echo $this->Form->input('tax_certificate_file', ['class' => 'form-control', 'id' => 'tax_certificate_file', 'label' => false]);                
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='allow_creating_stations' class='col-sm-2 control-label'>" . __('Allow Creating Stations/Sub-locations') . "</label>
                        <div class='col-sm-6'>";
                        echo "<select class='form-control' id='allow_creating_stations' name='allow_creating_stations'>";
                            echo "<option value='1'>Yes</option>";
                            echo "<option value='0'>No</option>";
                        echo "</select>";  
                                   
                    echo " </div></div>";

                    echo "
                    <div class='form-group'>
                        <label for='allow_creating_stockrooms' class='col-sm-2 control-label'>" . __('Allow Creating Stockrooms') . "</label>
                        <div class='col-sm-6'>";
                        echo "<select class='form-control' id='allow_creating_stockrooms' name='allow_creating_stockrooms'>";
                            echo "<option value='1'>Yes</option>";
                            echo "<option value='0'>No</option>";
                        echo "</select>";              
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
