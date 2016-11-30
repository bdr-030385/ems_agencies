
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
                                                        <label>Year</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-user" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Year">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Make</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-map" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Make">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Model</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-info" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Model">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>VIN</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-vimeo" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="VIN">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Vehicle ID</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-phone" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Vehicle ID">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date Purchased</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar" aria-hidden="true"></i>  </span>
                                                            <input type="date" class="form-control date-picker input-circle-right" placeholder="Date Purchased">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-paypal" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Purchase Price">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Vendor</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-mobile" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Vendor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-group" aria-hidden="true"></i> </span>
                                                            <select class="form-control input-circle-right">
                                                                <option>Gas</option>
                                                                <option>Diesel</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <div class="input-group">
                                                            <label class="mt-checkbox mt-checkbox-outline" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                                                                <input type="checkbox">
                                                                DEF <span></span> </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="col-md-12">
                            <div class="well"> <i class="fa fa-plus-square"></i> Import Data </div>
                          </div>

                          <div class="col-md-6">
                                                  <div class="form-group">
                                                       
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left" style="width: 200px; text-align: left">
                                                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                                Import Employee List
                                                            </span>
                                                            <input type="file" class="form-control input-circle-right" placeholder="Zip"> </div>
                                                    </div>
                                               </div>
                                              
                                               <div class="col-md-6">
                                                  <div class="form-group">
                                                       
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left" style="width: 200px; text-align: left">
                                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                                 Import Vehicles
                                                            </span>
                                                            <input type="file" class="form-control input-circle-right" placeholder="Emergency Contact Name"> </div>
                                                    </div>
                                               </div>
                                               
                                               <div class="col-md-6">
                                                  <div class="form-group">
                                                       
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left" style="width: 200px; text-align: left">
                                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                                 Import Vendors
                                                            </span>
                                                            <input type="file" class="form-control input-circle-right" placeholder="Emergency Contact Phone"> </div>
                                                    </div>
                                               </div>
                                               
                                               <div class="col-md-6">
                                                  <div class="form-group">
                                                       
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left" style="width: 200px; text-align: left">
                                                                <i class="fa fa-photo" aria-hidden="true"></i>
                                                                Import Agency Logo
                                                            </span>
                                                            <input type="file" class="form-control input-circle-right" placeholder="Emergency Contact Email"> </div>
                                                    </div>
                                               </div>-->
                                                <div class="col-md-12">
                                                    <div class="well"> <i class="fa fa-gg-circle"></i> Vehicles </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Registration</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-registered" aria-hidden="true"></i>  </span>
                                                            <input type="text" class="form-control date-picker input-circle-right" placeholder="Registration">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Insurance</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-money"></i>  </span>
                                                            <input type="text" class="form-control date-picker input-circle-right" placeholder="Insurance ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Inspection</label>
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-money"></i>  </span>
                                                            <input type="text" class="form-control date-picker input-circle-right" placeholder="Inspection.
 ">
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

