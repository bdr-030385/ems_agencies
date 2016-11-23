
<div class="cd-tabs">
<style>
.fixed-header {
  position: fixed;
  top:0; left:0;
  width: 100%; 
}
nav { 
  background: #444d58;
  postion:fixed;
  z-index:10;
}

    </style>

  <!-- second partition -->

  <div class="col-md-12" style="color: #000">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create(null,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => '']) ?>
            <div class="form-body">
                <div class="col-md-12">
                    <div class="well"> <i class="fa fa-user-plus"></i> Basic Information </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Agency Name</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input name="name" id="name" type="text" class="form-control input-circle-right" placeholder="Agency Name" required="required"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="address_street1" id="address_street1"  type="text" class="form-control input-circle-right" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Highest Level Officer Contact Info</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </span>
                            <input type="text" class="form-control input-circle-right" placeholder=" Highest Level Officer Contact Info"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Highest Level IT Employee</label>  
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-group" aria-hidden="true"></i>
                                </span>
                                <select class="form-control input-circle-right">
                                   <option>Highest Level IT Employee</option>
                                   <option>Employee 1</option>
                                   <option>Employee 2</option>
                                   <option>Employee 3</option>
                                   <option>Employee 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Billing Contact</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                </span>
                                <select class="form-control input-circle-right">
                                   <option> Billing Contact</option>
                                   <option>List 1</option>
                                   <option>List 2</option>
                                   <option>List 3</option>
                                   <option>List 4</option>
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State Issueing Certificate</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input id="state_certification" name="state_certification" type="text" class="form-control input-circle-right" placeholder="State Issueing Certificate"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State Certificate Number</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </span>
                                <input id="state_certificate_number" name="state_certificate_number" type="text" class="form-control input-circle-right" placeholder="State Certificate Number"> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>County Name</label>  
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                </span>
                                <input name="state" id="state" type="text" class="form-control input-circle-right" placeholder="County Name"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Region Name</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control input-circle-right" placeholder="Region Name"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="well"> <i class="fa fa-plus-square"></i> Import Data </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Import Employee List</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </span>
                                <input type="file" class="form-control input-circle-right" placeholder="Zip"> </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Import Vehicles</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left" >
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                </span>
                                <input type="file" class="form-control input-circle-right" placeholder="Emergency Contact Name"> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Import Vendors</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                </span>
                                <input type="file" class="form-control input-circle-right" placeholder="Emergency Contact Phone"> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Import Agency Logo</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-photo" aria-hidden="true"></i>
                                </span>
                                <input type="file" class="form-control input-circle-right" placeholder="Emergency Contact Email"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="well"> <i class="fa fa-gg-circle"></i> Product Activation  </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price Per Module</label>  
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-dollar"></i>
                                </span>
                                <input type="email" class="form-control input-circle-right" placeholder="Price Per Module"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Annual discount</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-money"></i>
                                </span>
                                <input type="email" class="form-control input-circle-right" placeholder="Annual discount "> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" align="center">
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <a href="<?= $base_url; ?>agencies" type="button" class="btn default">Cancel</a>
                    </div>
                </div>
            </div>
        <?= $this->Form->end() ?>            
                <!--<?php
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
                ?>-->
            <!--</fieldset>
            <div class="form-group" style="margin-top: 80px;">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="action-fixed-bottom">
                        <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                        <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue adding'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
                    </div>
                </div>
            </div>-->

        <!-- END FORM-->
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>

</div>
