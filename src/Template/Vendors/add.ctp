
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
            <input type="hidden" name="agency_id" value="<?= $hdr_user_data->agency_id; ?>">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Account Number</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-user" aria-hidden="true"></i>  </span>
                                <input type="text" class="form-control input-circle-right" placeholder="Account Number with Vendor">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-user" aria-hidden="true"></i>  </span>
                                <input name="vendor_name" type="text" class="form-control input-circle-right" placeholder="Name" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-map" aria-hidden="true"></i>  </span>
                                <input name="address" type="text" class="form-control input-circle-right" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-globe" aria-hidden="true"></i>  </span>
                                <input name="city" type="text" class="form-control input-circle-right" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-globe"></i>  </span>
                                <input name="state" type="text" class="form-control input-circle-right" placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Zip</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-file-archive-o"></i>  </span>
                                <input name="zip" type="text" class="form-control input-circle-right" placeholder="Zip">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-phone"></i>  </span>
                                <input name="phone_number" type="text" class="form-control input-circle-right" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fax</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-fax"></i>  </span>
                                <input type="text" class="form-control input-circle-right" placeholder="Fax">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-envelope"></i>  </span>
                                <input name="contact_person_email" type="email" class="form-control input-circle-right" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Person</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-users"></i>  </span>
                                <input name="contact_person" type="text" class="form-control input-circle-right" placeholder="Contact Person">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-map"></i>  </span>
                                <input name="website" type="text" class="form-control input-circle-right" placeholder="Vendor's website">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Prefered Method of Ordering</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-fax" aria-hidden="true"></i> </span>
                                <select class="form-control input-circle-right">
                                    <option>Email</option>
                                    <option>Fax</option>
                                    <option>Notes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" align="center">
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
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

