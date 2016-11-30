
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
            <input type="hidden" name="user_entity_id" value="<?= $hdr_user_data->id; ?>">
            <div class="form-body">
                <div class="col-md-12">
                            <div class="well"> <i class="fa fa-user-plus"></i> Add Fuel Log Information </div>
                          </div>
                                                   <div class="col-md-12">
                           <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label>Agency Vehicles</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-truck" aria-hidden="true"></i> 
                                                            </span>
                                                            <select class="form-control input-circle-right">
                                                              <option> Agency Vehicle 1</option>
                                                              <option> Agency Vehicle 2</option>
                                                              <option> Agency Vehicle 3</option>
                                                              <option> Agency Vehicle 4</option>
                                                            </select>
                                                    </div>
                                            </div>
                          </div>
                          <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label>Mileage</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-street-view" aria-hidden="true"></i> 
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Enter Odometer Reading"> </div>
                                                    </div>
                          </div>
                          
                      
                          
                            <div class="col-md-6">
                          <div class="form-group">
                                                     <label>Card Number</label>   
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-credit-card" aria-hidden="true"></i> 
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Enter Card Number or Leave Blank For None"> </div>
                                                    </div>
                          </div>
                          
                            <div class="col-md-6">
                          <div class="form-group">
                                                   <label>Total Gallons Pumped</label>     
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-beer" aria-hidden="true"></i> 
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Total Gallons Pumped"> </div>
                                                    </div>
                          </div>
                          
                                                
                       
                            <div class="col-md-6">
                          <div class="form-group">
                                                    <label>Price Appeared at Pump</label>    
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-dollar  " aria-hidden="true"></i> 
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Leave Blank for None"> </div>
                                                    </div>
                          </div>
                          
                       
                         
                            <div class="col-md-6">
                          <div class="form-group">
                                                    <label>Note</label>    
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-sticky-note-o" aria-hidden="true"></i> 
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Enter Notes if any "> </div>
                                                    </div>
                          </div>
                          
                        
                          <div class="col-md-6">
                         <div class="form-group">
                         <label>Date and Timestamp</label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-calendar" aria-hidden="true"></i> 
                                                            </span></label>
                                                            <div class="input-group date form_datetime" style="color: #000; width:458px;">
                                                                <input type="text" size="16" readonly class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default date-set" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                          </div>
                       
                         


                             <div class="col-md-6">
                          <div class="form-group">
                                                      
                                                        <div class="mt-checkbox-inline">
                                                            <label class="mt-checkbox">
                                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Paid by Operator
                                                                <span></span>
                                                            </label>
                                                           
                                                           
                                                        </div>
                                                    </div>
                          </div></div>

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
    <center >
        Submitted by Rubin Breuer, Unit S-6
    </center>
  </div>
  <!-- second partition ==-->
  </div>

</div>

