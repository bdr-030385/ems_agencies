
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
                            <label>Account Type</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                </span>
                                <select name="account_type_id" id="account_type_id" required="required" class="form-control input-circle-right">
                                   <option value=""> Account Type</option>
                                   <?php foreach($accountType as $id => $value) { ?>
                                        <option value="<?= $id; ?>"><?= $value; ?></option>
                                   <?php } ?>
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Member Type</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                </span>
                                <select class="form-control input-circle-right">
                                   <option value=""> Member Type</option>
                                   <?php foreach($memberType as $id => $value) { ?>
                                        <option value="<?= $id; ?>"><?= $value; ?></option>
                                   <?php } ?>
                               </select>
                            </div>
                        </div>
                    </div>
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

        <!-- END FORM-->
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>

</div>
