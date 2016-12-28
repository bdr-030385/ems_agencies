
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
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-user" aria-hidden="true"></i>  </span>
                                                            <input name="firstname" type="text" class="form-control input-circle-right" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-user" aria-hidden="true"></i>  </span>
                                                            <input name="lastname" type="text" class="form-control input-circle-right" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Carrier</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-gear"></i>  </span>
                                                            <input name="carrier" type="text" class="form-control input-circle-right" placeholder="carrier  ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Street</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-street-view" aria-hidden="true"></i>  </span>
                                                            <input name="street" type="text" class="form-control input-circle-right" placeholder="Street">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-street-view" aria-hidden="true"></i>  </span>
                                                            <input name="city" type="text" class="form-control input-circle-right" placeholder="City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-street-view" aria-hidden="true"></i>  </span>
                                                            <input name="state" type="text" class="form-control input-circle-right" placeholder="State">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Zip</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-file-archive-o" aria-hidden="true"></i>  </span>
                                                            <input name="zip" type="text" class="form-control input-circle-right" placeholder="Zip">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone-H</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-phone"></i>  </span>
                                                            <input name="phone_h" type="text" class="form-control input-circle-right" placeholder="Phone-H">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone-C</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-phone"></i>  </span>
                                                            <input name="phone_c" type="text" class="form-control input-circle-right" placeholder="Phone-C ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-envelope" aria-hidden="true"></i>  </span>
                                                            <input name="email_address" type="email" class="form-control input-circle-right" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                                                <input name="emergency_notification_text" value="1" type="checkbox">
                                                                Emergency notification via text <span></span> </label>
                                                        </div>
                                                    </div>
                                                </div>  
                                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">           
                                                            <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                                                <input name="emergency_notification_Email" value="1" type="checkbox">
                                                                Emergency notification via email <span></span> </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                            
                                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">           
                                                            <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                                                <input name="information_text" value="1" type="checkbox">
                                                                Information text <span></span> </label>
                                                        </div>
                                                    </div>
                                                </div>  
                                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">           
                                                            <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                                                <input name="information_email" value="1" type="checkbox">
                                                                Informational emails <span></span> </label>
                                                        </div>
                                                    </div>
                                                </div>  
                                                        
                                                
                                            </div>
                                            <div class="col-md-12" align="center">
                                                <div class="form-actions">
                                                    <button type="button" class="btn default">Cancel</button>
                                                    <button type="submit" class="btn blue">Save</button>
                                                    <button type="submit" class="btn default">Save And New</button>
                                                    <!--<a class="btn btn-success" href="contact_list.html"> View Contact List</a> --> </div>
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

