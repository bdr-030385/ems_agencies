
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
        <?= $this->Form->create($vendor,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => '']) ?>
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
                                <?php echo $this->Form->input('vendor_name', [ 'placeholder' => 'Name', 'class' => 'form-control input-circle-right', 'id' => 'vendor_name', 'label' => false, 'required' => 'required']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-map" aria-hidden="true"></i>  </span>
                                <?php echo $this->Form->input('address', ["placeholder" => "Address", 'class' => 'form-control input-circle-right', 'id' => 'address', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-globe" aria-hidden="true"></i>  </span>
                                <?php echo $this->Form->input('city', ["type" => "text", "placeholder" => "City", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-globe"></i>  </span>
                                <?php echo $this->Form->input('state', ["placeholder" => "State", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Zip</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-file-archive-o"></i>  </span>
                                <?php echo $this->Form->input('zip', ["placeholder" => "Zip", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-phone"></i>  </span>
                                <?php echo $this->Form->input('phone_number', ["placeholder" => "Phone", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
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
                                <?php echo $this->Form->input('contact_person_email', ["placeholder" => "Email", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Person</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-users"></i>  </span>
                                <?php echo $this->Form->input('contact_person', ["placeholder" => "Contact Person", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-map"></i>  </span>
                                <?php echo $this->Form->input('website', ["type" => "text", "placeholder" => "Vendor's website", 'class' => 'form-control input-circle-right', 'id' => '', 'label' => false]); ?>
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
