<div class="cd-tabs">
  <style type="text/css">
    label
    {
      padding: 10px;
      padding-left: 0px;
      padding-top: 0px;
      }
      .callout-info{
        padding:10px;
        background-color: #444D58;
        color:#ffffff;
        margin-bottom: 10px;
      }
  </style>
<ul class="cd-tabs-content" style="width: 100%;float: left;">
    <li data-content="tab1" class="selected">
  <!-- second partition -->
  <div class="page-title" align="center">
    <h1 style="font-size: 30px; color: #000"> Add User </h1>
   
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
                        <div class="callout callout-info">
                            <h4 style="margin-left:20px;">Account Details</h4>       
                        </div>
                        <?php                           
                            echo "
                                <div class='form-group'>
                                    <label for='start_date' class='col-sm-2 control-label'>" . __('Group') . "</label>
                                    <div class='col-sm-6'>";
                                    echo $this->Form->input('group_id', ['class' => 'form-control', 'id' => 'agency_name', 'options' => $groups, 'label' => false]);                
                                echo " </div></div>";

                            echo "
                                <div class='form-group'>
                                    <label for='start_date' class='col-sm-2 control-label'>" . __('Email Address') . "</label>
                                    <div class='col-sm-6'>";
                                    echo $this->Form->input('email_address', ['class' => 'form-control', 'id' => 'email_address', 'required' => 'required', 'type' => 'email', 'label' => false]);                
                                echo " </div></div>"; 

                            echo "
                                <div class='form-group'>
                                    <label for='start_date' class='col-sm-2 control-label'>" . __('Password') . "</label>
                                    <div class='col-sm-6'>";
                                    echo $this->Form->input('password', ['class' => 'form-control', 'id' => 'password', 'required' => 'required', 'type' => 'password', 'label' => false]);                
                                echo " </div></div>";                                 
                        ?>
                        <div class="callout callout-info">
                            <h4 style="margin-left:20px;">User Information</h4> 
                        </div>
                        <?php
                                                           
                                                            echo "
                                    <div class='form-group'>
                                        <label for='firstname' class='col-sm-2 control-label'>" . __('Firstname') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('firstname', ['class' => 'form-control', 'id' => 'firstname', 'required' => 'required', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='lastname' class='col-sm-2 control-label'>" . __('Lastname') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('lastname', ['class' => 'form-control', 'id' => 'lastname', 'required' => 'required', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='mi' class='col-sm-2 control-label'>" . __('Middle Initial') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('mi', ['class' => 'form-control', 'id' => 'mi', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='mid' class='col-sm-2 control-label'>" . __('Member ID') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('mid', ['class' => 'form-control', 'id' => 'mid', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='gender' class='col-sm-2 control-label'>" . __('Gender') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('gender', ['options' => $gender, 'class' => 'form-control', 'id' => 'gender', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='birthdate' class='col-sm-2 control-label'>" . __('Birthdate') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('birthdate', ['class' => 'form-control default-datepicker', 'id' => 'birthdate', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='ssn' class='col-sm-2 control-label'>" . __('SSN') . "</label>
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

                        ?>
                                <div class="callout callout-info">
                                    <h4 style="margin-left:20px;">Contact Information</h4> 
                                </div>
                        <?php 
                                    
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
                        <div class="callout callout-info">
                            <h4 style="margin-left:20px;">Other Information</h4> 
                        </div>
                        <?php 
                            for( $x = 1; $x <= 5; $x++ ){ 
                                echo "
                                <div class='form-group'>
                                    <label for='custom-field" . $x . "' class='col-sm-2 control-label'></label>
                                    <div class='col-sm-3'>";                 
                                        echo "<input name='custom_field[" . $x . "][name]' placeholder='Field Name' class='form-control' />";                                                           
                                    echo "</div>";
                                echo "<div class='col-sm-3'>";                                    
                                        echo "<input name='custom_field[" . $x . "][value]' placeholder='Value' class='form-control' />";                                                                                                   
                                    echo "</div>";
                                echo "</div>";
                            }
                        ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="action-fixed-bottom">
                                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue adding'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back To list'), ['action' => 'agency_users'],['class' => 'btn btn-warning', 'escape' => false]) ?>
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
