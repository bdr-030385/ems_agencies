
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
                            <div class="well"> <i class="fa fa-user-plus"></i> Add Vehicle Maintenance Information </div>
                          </div>
                                                   <div class="col-md-12">

                                                   <div class="col-md-6">
                          <div class="form-group">
                                                     <label>Vendor Name</label>   
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-group" aria-hidden="true"></i>
                                                            </span>
                                                           <select class="form-control input-circle-right">
                                                             <option>Vendor Name</option>
                                                             <option>Vendor 1</option>
                                                               <option>Vendor 2</option>
                                                                 <option>Vendor 3</option>
                                                                   <option>Vendor 4</option>
                                                           </select>
                                                          </div>
                                                    </div>
                          </div>
                          
                          
                          <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date Performed</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>
                                                            
                                                            <div class="input-group input-medium date date-picker" data-date-format="mm-dd-yyyy" data-date-start-date="-120y" style="width:450px !important;">
                                                                <input type="text" class="form-control input-circle-right" placeholder="Date Performed" readonly="">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div> 
                                                            </div>
                                                            
                                                    </div>
                                                    </div>
                          
                          <div class="col-md-6">
                          <div class="form-group">
                                                        <label>Invoice Number</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Invoice Number"> </div>
                                                    </div>
                          </div>
<div class="col-md-6">
                          <div class="form-group">
                                                       <label>Agency Vehicle</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                            </span>
                                                           <select class="form-control input-circle-right">
                                                             <option>Agency Vehicle </option>
                                                             <option>Agency Vehicle 1</option>
                                                               <option>Agency Vehicle 2</option>
                                                                 <option>Agency Vehicle 3</option>
                                                                   <option>Agency Vehicle 4</option>
                                                           </select>
                                                          </div>
                                                    </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                                    <label>Mileage</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                            </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder=" Mileage "> </div>
                                                    </div>
                          </div>
                          
                                                
                         <div class="col-md-6">
                          <div class="form-group">
                                                        <label>Submited By</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon input-circle-left">
                                                                <i class="fa fa-fax" aria-hidden="true"></i>
                                                            </span>
                                                           <select class="form-control input-circle-right">
                                                             <option> Submited By</option>
                                                             <option> Rubin Breuer (Unit S-6) </option>
                                                               <option> Rubin Doc (Unit S-2)</option>
                                                                 <option> Rubin One (Unit S-4)</option>
                                                                   <option> Rubin stay (Unit S-1)</option>
                                                           </select>
                                                          </div>
                                                    </div>
                          </div>
                          
                          <div class="col-md-12">
                            <div class="well"> <i class="fa fa-plus-square"></i> Item Information <a href="#" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#myModal" >Add Item</a> </div>
                              <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Item</h4>
        </div>
        <div class="modal-body">
                  <div class="col-md-12">
                     <div class="form-group">
                     <label>Item Code</label>
                          <div class="input-group">
                               <span class="input-group-addon input-circle-left">
                                <i class="fa fa-cc" aria-hidden="true"></i>
                                </span>
                               <input type="text" class="form-control input-circle-right" placeholder="Item Code">
                          </div>
                      </div>
                  </div>
                   <div class="col-md-12">
                     <div class="form-group">
                     <label>Description</label>
                          <div class="input-group">
                               <span class="input-group-addon input-circle-left">
                                <i class="fa fa-commenting" aria-hidden="true"></i>
                                </span>
                               <input type="text" class="form-control input-circle-right" placeholder="Description ">
                          </div>
                      </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                     <label>QTY</label>
                          <div class="input-group">
                               <span class="input-group-addon input-circle-left">
                                <i class="fa fa-database" aria-hidden="true"></i>
                                </span>
                               <input type="text" class="form-control input-circle-right" placeholder="QTY ">
                          </div>
                      </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                     <label>Price</label>
                          <div class="input-group">
                               <span class="input-group-addon input-circle-left">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                                </span>
                               <input type="text" class="form-control input-circle-right" placeholder="Price ">
                          </div>
                      </div>
                  </div>  
        </div>
        <div class="modal-footer" style="border-top:0px;">
    <div class="col-md-9 col-md-offset-3">
    <input type="button" name="save" data-dismiss="modal" class="btn btn-default col-md-3" style="background-color: #32c5d2; border:1px solid #fff; margin-top:20px; color: #fff;" id="save" value="save">
    <input type="button" name="close" class="btn btn-default col-md-3" data-dismiss="modal" style="background-color: #32c5d2;border:1px solid #fff; margin-top:20px; color: #fff;" id="close" value="close">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
    </div>
      </div>
      
    </div>
  </div>
                          </div>
                          <div class="col-md-12">
                            <table class="table table-bordered">
                              <tr>
                              <td>Item Code</td>
                              <td>Description</td>
                              <td>QTY </td>
                              <td>Price </td>
                              <td>Amount</td>
                              <td>Action</td>
                              </tr>
                              <tr>
                              <td>ITEMC1</td>
                              <td>Some Description</td>
                              <td>23</td>
                              <td>10</td>
                              <td>230</td>  <td><a href="#" class="btn btn-primary"> Edit</a> | <a href="#" class="btn btn-danger"> delete</a></td>
                              
                              </tr>
                              <tr>
                              <td>ITEMC2</td>
                              <td>Some Description</td>
                              <td>23</td>
                              <td>10</td>
                              <td>230</td>  <td><a href="#" class="btn btn-primary"> Edit</a> | <a href="#" class="btn btn-danger"> delete</a></td>
                              
                              </tr>
                              <tr>
                              <td>ITEMC3</td>
                              <td>Some Description</td>
                              <td>23</td>
                              <td>10</td>
                              <td>230</td>  <td><a href="#" class="btn btn-primary"> Edit</a> | <a href="#" class="btn btn-danger"> delete</a></td>
                              
                              </tr>

                              <tr>
                              <td colspan="6" align="right"> Total Amount : 690</td>
                              </tr>
                            </table>
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

