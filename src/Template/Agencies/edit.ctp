
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
                                        <option <?php echo( $agency->account_type_id == $id ? 'selected="selected"' : '' ); ?>  value="<?= $id; ?>"><?= $value; ?></option>
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
                                        <option <?php echo( $agency->member_type_id == $id ? 'selected="selected"' : '' ); ?> value="<?= $id; ?>"><?= $value; ?></option>
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
                                <input name="name" id="name" value="<?php echo $agency->name; ?>" type="text" class="form-control input-circle-right" placeholder="Agency Name" required="required"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>EMT Number</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input name="name" id="name" value="<?php echo $agency->emt_number; ?>" type="text" class="form-control input-circle-right" placeholder="Agency Name" required="required"> 
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
                                <input name="name" id="name" value="<?php echo $agency->name; ?>" type="text" class="form-control input-circle-right" placeholder="Agency Name" required="required"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address (Street 1)</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="address_street1" value="<?php echo $agency->address_street1; ?>" id="address_street1"  type="text" class="form-control input-circle-right" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address (Street 2)</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="address_street2" value="<?php echo $agency->address_street2; ?>" id="address_street2"  type="text" class="form-control input-circle-right" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="city1" value="<?php echo $agency->city1; ?>" id="city1"  type="text" class="form-control input-circle-right" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="state1" value="<?php echo $agency->state1; ?>" id="state1"  type="text" class="form-control input-circle-right" placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Zip Code</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="zip1" value="<?php echo $agency->zip1; ?>" id="state1"  type="text" class="form-control input-circle-right" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State Certificate Number</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="state_certificate_number" value="<?php echo $agency->state_certificate_number; ?>" id="state_certificate_number"  type="text" class="form-control input-circle-right" placeholder="State Certificate Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State Certification</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="state_certification" value="<?php echo $agency->state_certification; ?>" id="state_certification"  type="text" class="form-control input-circle-right" placeholder="State Certification">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State Certification File</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input type="file" name="state_certificate_file" value="" id="state_certificate_file"  type="text" class="form-control input-circle-right" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Regional/Hospital Authority</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="regional_authority" value="<?php echo $agency->regional_authority; ?>" id="regional_authority"  type="text" class="form-control input-circle-right" placeholder="Regional/Hospital Authority">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Regional Certificate Number</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="regional_certificate_number" value="<?php echo $agency->regional_certificate_number; ?>" id="regional_certificate_number"  type="text" class="form-control input-circle-right" placeholder="Regional Certificate Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Regional Certificate File</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="regional_certificate_file" value="" id="regional_certificate_file"  type="text" class="form-control input-circle-right" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tax ID</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="tax_id_number" value="<?php echo $agency->tax_id_number; ?>" id="tax_id_number"  type="text" class="form-control input-circle-right" placeholder="Tax ID">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tax Exemption</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="tax_exemption" value="<?php echo $agency->tax_exemption; ?>" id="tax_exemption"  type="text" class="form-control input-circle-right" placeholder="Tax Exemption">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tax Certificate</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input type="file" name="tax_certificate_file" value="" id="tax_certificate_file"  type="text" class="form-control input-circle-right" placeholder="Tax Certificate">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Allow Creating Stations/Sub-locations</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                </span>
                                <select class="form-control input-circle-right" name="allow_creating_stations">
                                   <option value=""> --- </option>
                                   <option <?php echo( $agency->allow_creating_stations == 1 ? 'selected="selected"' : '' ); ?>  value="1">Yes</option>
                                   <option <?php echo( $agency->allow_creating_stations == 0 ? 'selected="selected"' : '' ); ?> value="0">No</option>
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Allow Creating Stockrooms</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                </span>
                                <select class="form-control input-circle-right" name="allow_creating_stockrooms">
                                   <option value=""> --- </option>
                                   <option <?php echo( $agency->allow_creating_stockrooms == 1 ? 'selected="selected"' : '' ); ?> value="1">Yes</option>
                                   <option <?php echo( $agency->allow_creating_stockrooms == 1 ? 'selected="selected"' : '' ); ?> value="0">No</option>
                               </select>
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
