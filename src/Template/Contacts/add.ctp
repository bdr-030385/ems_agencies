
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
                    <div class="well"> <i class="fa fa-user-plus"></i> New Contact Information </div>
                </div>
                <div class="col-md-12">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input name="firstname" id="firstname" type="text" class="form-control input-circle-right" placeholder="First Name" required="required"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input name="lastname" id="lastname" type="text" class="form-control input-circle-right" placeholder="Last Name" required="required"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                <input name="email_address" id="email_address" required="required"  type="email" class="form-control input-circle-right" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Street</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                </span>
                            <input name="street" id="street" type="text" class="form-control input-circle-right" placeholder="Street"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                </span>
                                <input name="city" id="city"  type="text" class="form-control input-circle-right" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                </span>
                            <input name="state" id="state" type="text" class="form-control input-circle-right" placeholder="State"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Zip</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                </span>
                                <input name="zip" id="zip"  type="text" class="form-control input-circle-right" placeholder="Zip">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone-H</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            <input name="phone_h" id="phone_h" type="text" class="form-control input-circle-right" placeholder="Phone-H"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone-C</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                                <input name="phone_c" id="phone_c"  type="text" class="form-control input-circle-right" placeholder="Phone-C">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Carrier</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa fa-gear" aria-hidden="true"></i>
                                </span>
                            <input name="carrier" id="carrier" type="text" class="form-control input-circle-right" placeholder="Carrier"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                </span>
                                <input name="country" id="country"  type="text" class="form-control input-circle-right" placeholder="Country">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                    <input type="checkbox" name="emergency_notification_text" value="1">
                                    Emergency notification via text <span></span> </label>
                                <br>
                                <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                    <input type="checkbox" name="emergency_notification_email" value="1">
                                    Emergency notification via email <span></span> </label>
                                <br>
                                <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                    <input type="checkbox" name="information_text" value="1">
                                    Information text <span></span> </label>
                                <br>
                                <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                    <input type="checkbox" name="information-email" value="1">
                                    Informational emails <span></span> </label>
                                <br>
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

