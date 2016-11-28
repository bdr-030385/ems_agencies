<div class="page-content-inner">
  
 <div class="row">
  
  <div class="col-md-8 col-md-offset-4">
   <div class="form-group col-md-6">		
    <select class="form-control" name="rigid" id="rigid">
     <option value="rigs">Rigs</option>
     <option value="stockrooms">Stockrooms</option>
     <option value="EASV's">EASV's</option>
   </select>
 </div>

</div>
<div  align="center">       
  
 <a href="http://fomexpetpack.com/new_1/dynamic_dependent_select/" class="btn btn-primary"> Link for dependent Dropdown Menu</a>
</div>
</div>

<br>
<div class="row">
  
  <div class="col-md-12">
    <style>
      .boxes
      {
       background-color: #fff; border: 2px solid #d4d4d4; cursor:pointer; border-radius: 10px !important; padding-bottom: 14px;
     }
     .boxes:focus
     {
       background-color: #333; border: 2px solid #d4d4d4; cursor:pointer; 
     }
   </style>
								<!--<script type="text/javascript">
									function abc()
									{
										document.getElementById("box").style.backgroundColor = 'black';
									}
								</script>-->
               <div class="col-md-3 boxes box-1"  id="box"  href="#collapseExample" >
                <div class="col-md-9">
                  <h3>Main 01 Tank</h3>
                  <div>

                   <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>

                   <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="first_box_edit" value="EDIT">

                   <div id="chiky" style="display: none;" class="pull-right">
                    <i class="fa fa-check pull-right"></i>
                  </div>
                </div></div>

                <div class="col-md-3"  data-toggle="modal" data-target="#addexpbox"  style="margin-top: 30px; color: #32C5D2; cursor:pointer; margin-left: -25px;">
                 <i class="fa fa-unlock fa-5x"></i>
                 <div style="width: 100px;"><h5><b>SET SEAL</b></h5></div>

               </div>
               
             </div>
             <div class="modal fade" id="addexpbox" role="dialog">
              <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Seal Expiration Date</h4>
                  </div>
                  <div class="modal-body">
                    <p>
                      <label> Enter Seal Number </label>
                      <input type="text" name="addexp" placeholder="Seal Number" class="form-control">

                      <div class="date-picker" align="center" data-date-format="mm/dd/yyyy"></div>
                      
                    </p>
                  </div>
                  <div class="modal-footer" style="border-top:0px;">
                    <div class="col-md-9 col-md-offset-3">
                      <input type="button" name="save" data-dismiss="modal" class="btn btn-default col-md-3" style="background-color: #32c5d2; border:1px solid #fff; margin-top:20px; color: #fff;" id="save" value="OK">
                      <input type="button" name="close" class="btn btn-default col-md-3" data-dismiss="modal" style="background-color: #32c5d2;border:1px solid #fff; margin-top:20px; color: #fff;" id="close" value="Cancel">
                      <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                  </div>
                </div>
                
              </div>
            </div>


            
            <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
              <div class="col-md-9">
                <h3>Main 02 Tank</h3>
                <div>
                  <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                  <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                </div>
              </div>
              <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
               <i class="fa fa-lock fa-5x"></i>
               <div><h5><b>SEALED</b></h5></div>
               <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

             </div>

           </div>

           <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
            <div class="col-md-9">
              <h3>Main 03 Tank</h3>
              <div>
                <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
              </div>
            </div>
            <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
             <i class="fa fa-lock fa-5x"></i>
             <div><h5><b>SEALED</b></h5></div>
             <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

           </div>

         </div>
       </div>
       
     </div>
     
     
     <div class="collapse box-1-data" id="collapseExample" style="margin-top:10px; background-color: #DBDBFD; border: 1px solid #e7ecf1; padding:14px; width:93%;  ">
       <div class="card card-block">
         
         <div class="row" style="margin-top:10px; ">
          <div class="col-md-12">
           <div class="col-md-3" style="background-color: #fff; width:27%; margin-left:12px; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
            <h3>1" Roller Gauze</h3>
            <div>
             <p style="text-align: justify; font-size: 13px; color: #666;">Quantity Required : 10</p>
           </div>
           <div>

            <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal">Edit</button> 
            <a href="#" class="pull-right" style="width: 32px; height: 10px;">
              <svg id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <style type="text/css">
                  .st0{fill:#41AD49;}
                </style>
                <g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z    M501.7,296.3l-241,241l0,0l-17.2,17.2L110.3,421.3l58.8-58.8l74.5,74.5l199.4-199.4L501.7,296.3L501.7,296.3z"/></g></svg></a> 

                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">EDIT 1" Roller Gauze</h4>
                      </div>
                      <div class="modal-body">
                        <p>
                          <div class="col-md-12">
                            <div class="col-md-8 col-md-offset-2">
                              <div class="col-md-1" style="margin-left: -4%;">
                                <input type="button" onclick="decrementValue()" value="-" style="background-color: #333; border:0px; color: #fff;  height: 32px;
                                width: 30px;" /></div>
                                <div class="col-md-9" style="margin-left:6%">
                                  <input type="text" class="form-control" name="quantity" value="0" maxlength="2" max="10" size="1" id="number" /></div>
                                  <div class="col-md-1">
                                    <input type="button" onclick="incrementValue()" value="+" style="background-color: #5bc0de; color: #fff;  border:0px; height: 32px;
                                    width: 30px;" /></div>
                                  </div>

                                  <div class="col-md-8 col-md-offset-2" style="margin-top: 5%">

                                    <a  id="add_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Add Expiration dates </a>


                                    <table id="add_exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                      <tr>
                                        <th align="center" colspan="3">Add Expiration Dates</th>
                                      </tr>
                                      <tr>
                                        <td align="center" colspan="3">
                                          <!-- quantity boxes -->
                                          <input type="number" width="150px;" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                          <!-- quantity boxes -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="center" colspan="3">
                                          <!-- quantity boxes -->
                                          <div class="date-picker" align="center" data-date-format="mm/dd/yyyy"></div>    
                                          <!-- quantity boxes -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="center" colspan="3">
                                          <!-- quantity boxes -->
                                          <input type="submit" class="form-control btn btn-primary" align="center" >    
                                          <!-- quantity boxes -->
                                        </td>
                                      </tr>
                                    </table>



                                    <a  id="edit_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Edit Expiration dates </a>

                                    <table id="exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                      <tr>
                                        <th align="center" colspan="3">Edit Expiration Dates</th>
                                      </tr>
                                      <tr>
                                        <td width="50px;">
                                          <!-- quantity boxes -->
                                          <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                          <!-- quantity boxes -->
                                        </td>
                                        <td width="70%">01/12/2016</td>
                                        <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                      </tr>
                                      <tr>
                                       <td width="50px;">
                                        <!-- quantity boxes -->
                                        <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                        <!-- quantity boxes -->
                                      </td>
                                      <td width="70%">10/12/2016</td>
                                      <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                    </tr>
                                    <tr>
                                     <td width="50px;">
                                      <!-- quantity boxes -->
                                      <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                      <!-- quantity boxes -->
                                    </td>
                                    <td width="70%">15/12/2016</td>
                                    <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                  </tr>
                                  <tr>
                                    <td width="50px;">
                                      <!-- quantity boxes -->
                                      <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                      <!-- quantity boxes -->
                                    </td>
                                    <td width="70%">20/12/2016</td>
                                    <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                  </tr>

                                </table>


                                <div>
                                  <textarea class="form-control" placeholder="Notes" style="resize: none;"></textarea>
                                </div>
                              </div>
                            </div>

                            <script type="text/javascript">
                              function incrementValue()
                              {
                                var value = parseInt(document.getElementById('number').value, 10);
                                value = isNaN(value) ? 0 : value;
                                if(value<10){
                                  value++;
                                  document.getElementById('number').value = value;
                                }
                              }
                              function decrementValue()
                              {
                                var value = parseInt(document.getElementById('number').value, 10);
                                value = isNaN(value) ? 0 : value;
                                if(value>1){
                                  value--;
                                  document.getElementById('number').value = value;
                                }

                              }
                              

                            </script>
                          </p>
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
              </div>
              <div class="col-md-3 col-md-offset-1" style="background-color: #fff; width:27%;  border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                <h3>2" Roller Gauze</h3>
                <div>
                  <p style="text-align: justify; font-size: 13px; color: #666;">Quantity Required : 12</p>
                </div>
                <div>

                  <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal2">Edit</button> 
                  <a href="#" class="pull-right" style="width: 32px; height: 10px;">
                    <svg id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <style type="text/css">
                        .st0{fill:#41AD49;}
                      </style>
                      <g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z    M501.7,296.3l-241,241l0,0l-17.2,17.2L110.3,421.3l58.8-58.8l74.5,74.5l199.4-199.4L501.7,296.3L501.7,296.3z"/></g></svg></a> 

                      <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                          
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">EDIT 2" Roller Gauze</h4>
                            </div>
                            <div class="modal-body">
                              <p>
                                <div class="col-md-12">
                                  <div class="col-md-8 col-md-offset-2">
                                    <div class="col-md-1" style="margin-left: -4%;">
                                      <input type="button" onclick="decrementValue()" value="-" style="background-color: #333; border:0px; color: #fff;  height: 32px;
                                      width: 30px;" /></div>
                                      <div class="col-md-9" style="margin-left:6%">
                                        <input type="text" class="form-control" name="quantity" value="0" maxlength="2" max="10" size="1" id="number" /></div>
                                        <div class="col-md-1">
                                          <input type="button" onclick="incrementValue()" value="+" style="background-color: #5bc0de; color: #fff;  border:0px; height: 32px;
                                          width: 30px;" /></div>
                                        </div>

                                        <div class="col-md-8 col-md-offset-2" style="margin-top: 5%">
                                          <a  id="edit_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Edit Expiration dates </a>

                                          <table id="exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                            <tr>
                                              <th align="center" colspan="3">Edit Expiration Dates</th>
                                            </tr>
                                            <tr>
                                              <td width="50px;">
                                                <!-- quantity boxes -->
                                                <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                <!-- quantity boxes -->
                                              </td>
                                              <td width="70%">01/12/2016</td>
                                              <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                             <td width="50px;">
                                              <!-- quantity boxes -->
                                              <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                              <!-- quantity boxes -->
                                            </td>
                                            <td width="70%">10/12/2016</td>
                                            <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                          </tr>
                                          <tr>
                                           <td width="50px;">
                                            <!-- quantity boxes -->
                                            <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                            <!-- quantity boxes -->
                                          </td>
                                          <td width="70%">15/12/2016</td>
                                          <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                        </tr>
                                        <tr>
                                          <td width="50px;">
                                            <!-- quantity boxes -->
                                            <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                            <!-- quantity boxes -->
                                          </td>
                                          <td width="70%">20/12/2016</td>
                                          <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                        </tr>

                                      </table>


                                      <div>
                                        <textarea class="form-control" placeholder="Notes" style="resize: none;"></textarea>
                                      </div>
                                    </div>
                                  </div>

                                  <script type="text/javascript">
                                    function incrementValue()
                                    {
                                      var value = parseInt(document.getElementById('number').value, 10);
                                      value = isNaN(value) ? 0 : value;
                                      if(value<10){
                                        value++;
                                        document.getElementById('number').value = value;
                                      }
                                    }
                                    function decrementValue()
                                    {
                                      var value = parseInt(document.getElementById('number').value, 10);
                                      value = isNaN(value) ? 0 : value;
                                      if(value>1){
                                        value--;
                                        document.getElementById('number').value = value;
                                      }

                                    }
                                    

                                  </script>
                                </p>
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
                    </div>
                    <div class="col-md-3 col-md-offset-1" style="background-color: #fff; width:27%; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                      <h3>3" Roller Gauze</h3>
                      <div>
                        <p style="text-align: justify; font-size: 13px; color: #666;">Quantity Required : 11</p>
                      </div>
                      <div>

                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal3">Edit</button> 
                        <a href="#" class="pull-right" style="width: 32px; height: 10px;">
                          <svg id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <style type="text/css">
                              .st0{fill:#41AD49;}
                            </style>
                            <g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z    M501.7,296.3l-241,241l0,0l-17.2,17.2L110.3,421.3l58.8-58.8l74.5,74.5l199.4-199.4L501.7,296.3L501.7,296.3z"/></g></svg></a> 

                            <div class="modal fade" id="myModal3" role="dialog">
                              <div class="modal-dialog">
                                
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">EDIT 3" Roller Gauze</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                      <div class="col-md-12">
                                        <div class="col-md-8 col-md-offset-2">
                                          <div class="col-md-1" style="margin-left: -4%;">
                                            <input type="button" onclick="decrementValue()" value="-" style="background-color: #333; border:0px; color: #fff;  height: 32px;
                                            width: 30px;" /></div>
                                            <div class="col-md-9" style="margin-left:6%">
                                              <input type="text" class="form-control" name="quantity" value="0" maxlength="2" max="10" size="1" id="number" /></div>
                                              <div class="col-md-1">
                                                <input type="button" onclick="incrementValue()" value="+" style="background-color: #5bc0de; color: #fff;  border:0px; height: 32px;
                                                width: 30px;" /></div>
                                              </div>

                                              <div class="col-md-8 col-md-offset-2" style="margin-top: 5%">
                                                <a  id="edit_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Edit Expiration dates </a>

                                                <table id="exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                                  <tr>
                                                    <th align="center" colspan="3">Edit Expiration Dates</th>
                                                  </tr>
                                                  <tr>
                                                    <td width="50px;">
                                                      <!-- quantity boxes -->
                                                      <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                      <!-- quantity boxes -->
                                                    </td>
                                                    <td width="70%">01/12/2016</td>
                                                    <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                   <td width="50px;">
                                                    <!-- quantity boxes -->
                                                    <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                    <!-- quantity boxes -->
                                                  </td>
                                                  <td width="70%">10/12/2016</td>
                                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                </tr>
                                                <tr>
                                                 <td width="50px;">
                                                  <!-- quantity boxes -->
                                                  <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                  <!-- quantity boxes -->
                                                </td>
                                                <td width="70%">15/12/2016</td>
                                                <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                              </tr>
                                              <tr>
                                                <td width="50px;">
                                                  <!-- quantity boxes -->
                                                  <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                  <!-- quantity boxes -->
                                                </td>
                                                <td width="70%">20/12/2016</td>
                                                <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                              </tr>

                                            </table>


                                            <div>
                                              <textarea class="form-control" placeholder="Notes" style="resize: none;"></textarea>
                                            </div>
                                          </div>
                                        </div>

                                        <script type="text/javascript">
                                          function incrementValue()
                                          {
                                            var value = parseInt(document.getElementById('number').value, 10);
                                            value = isNaN(value) ? 0 : value;
                                            if(value<10){
                                              value++;
                                              document.getElementById('number').value = value;
                                            }
                                          }
                                          function decrementValue()
                                          {
                                            var value = parseInt(document.getElementById('number').value, 10);
                                            value = isNaN(value) ? 0 : value;
                                            if(value>1){
                                              value--;
                                              document.getElementById('number').value = value;
                                            }

                                          }
                                          

                                        </script>
                                      </p>
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
                          </div>
                        </div>
                        
                      </div>
                      <br>
                      <div class="row" >
                        <div class="col-md-12">
                         <div class="col-md-3 " style="background-color: #fff;  width:27%;   margin-left:12px; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                          <h3>4" Roller Gauze</h3>
                          <div>
                            <p style="text-align: justify; font-size: 13px; color: #666;">Quantity Required : 18</p>
                          </div>

                          <div>

                            <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal4">Edit</button> 
                            <a href="#" class="pull-right" style="width: 32px; height: 10px;">
                              <svg id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                  .st0{fill:#41AD49;}
                                </style>
                                <g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z    M501.7,296.3l-241,241l0,0l-17.2,17.2L110.3,421.3l58.8-58.8l74.5,74.5l199.4-199.4L501.7,296.3L501.7,296.3z"/></g></svg></a> 

                                <div class="modal fade" id="myModal4" role="dialog">
                                  <div class="modal-dialog">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">EDIT 4" Roller Gauze</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>
                                          <div class="col-md-12">
                                            <div class="col-md-8 col-md-offset-2">
                                              <div class="col-md-1" style="margin-left: -4%;">
                                                <input type="button" onclick="decrementValue()" value="-" style="background-color: #333; border:0px; color: #fff;  height: 32px;
                                                width: 30px;" /></div>
                                                <div class="col-md-9" style="margin-left:6%">
                                                  <input type="text" class="form-control" name="quantity" value="0" maxlength="2" max="10" size="1" id="number" /></div>
                                                  <div class="col-md-1">
                                                    <input type="button" onclick="incrementValue()" value="+" style="background-color: #5bc0de; color: #fff;  border:0px; height: 32px;
                                                    width: 30px;" /></div>
                                                  </div>

                                                  <div class="col-md-8 col-md-offset-2" style="margin-top: 5%">
                                                    <a  id="edit_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Edit Expiration dates </a>

                                                    <table id="exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                                      <tr>
                                                        <th align="center" colspan="3">Edit Expiration Dates</th>
                                                      </tr>
                                                      <tr>
                                                        <td width="50px;">
                                                          <!-- quantity boxes -->
                                                          <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                          <!-- quantity boxes -->
                                                        </td>
                                                        <td width="70%">01/12/2016</td>
                                                        <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                      </tr>
                                                      <tr>
                                                       <td width="50px;">
                                                        <!-- quantity boxes -->
                                                        <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                        <!-- quantity boxes -->
                                                      </td>
                                                      <td width="70%">10/12/2016</td>
                                                      <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                     <td width="50px;">
                                                      <!-- quantity boxes -->
                                                      <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                      <!-- quantity boxes -->
                                                    </td>
                                                    <td width="70%">15/12/2016</td>
                                                    <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="50px;">
                                                      <!-- quantity boxes -->
                                                      <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                      <!-- quantity boxes -->
                                                    </td>
                                                    <td width="70%">20/12/2016</td>
                                                    <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                  </tr>

                                                </table>


                                                <div>
                                                  <textarea class="form-control" placeholder="Notes" style="resize: none;"></textarea>
                                                </div>
                                              </div>
                                            </div>

                                            <script type="text/javascript">
                                              function incrementValue()
                                              {
                                                var value = parseInt(document.getElementById('number').value, 10);
                                                value = isNaN(value) ? 0 : value;
                                                if(value<10){
                                                  value++;
                                                  document.getElementById('number').value = value;
                                                }
                                              }
                                              function decrementValue()
                                              {
                                                var value = parseInt(document.getElementById('number').value, 10);
                                                value = isNaN(value) ? 0 : value;
                                                if(value>1){
                                                  value--;
                                                  document.getElementById('number').value = value;
                                                }

                                              }
                                              

                                            </script>
                                          </p>
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
                              </div>
                              <div class="col-md-3 col-md-offset-1" style="background-color: #fff;  width:27%; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                                <h3>5" Roller Gauze</h3>
                                <div>
                                  <p style="text-align: justify; font-size: 13px; color: #666;">Quantity Required : 8</p>
                                </div>
                                <div>

                                  <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal5">Edit</button> 
                                  <a href="#" class="pull-right" style="width: 32px; height: 10px;">
                                    <svg id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <style type="text/css">
                                        .st0{fill:#41AD49;}
                                      </style>
                                      <g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z    M501.7,296.3l-241,241l0,0l-17.2,17.2L110.3,421.3l58.8-58.8l74.5,74.5l199.4-199.4L501.7,296.3L501.7,296.3z"/></g></svg></a> 

                                      <div class="modal fade" id="myModal5" role="dialog">
                                        <div class="modal-dialog">
                                          
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">EDIT 5" Roller Gauze</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>
                                                <div class="col-md-12">
                                                  <div class="col-md-8 col-md-offset-2">
                                                    <div class="col-md-1" style="margin-left: -4%;">
                                                      <input type="button" onclick="decrementValue()" value="-" style="background-color: #333; border:0px; color: #fff;  height: 32px;
                                                      width: 30px;" /></div>
                                                      <div class="col-md-9" style="margin-left:6%">
                                                        <input type="text" class="form-control" name="quantity" value="0" maxlength="2" max="10" size="1" id="number" /></div>
                                                        <div class="col-md-1">
                                                          <input type="button" onclick="incrementValue()" value="+" style="background-color: #5bc0de; color: #fff;  border:0px; height: 32px;
                                                          width: 30px;" /></div>
                                                        </div>

                                                        <div class="col-md-8 col-md-offset-2" style="margin-top: 5%">
                                                          <a  id="edit_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Edit Expiration dates </a>

                                                          <table id="exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                                            <tr>
                                                              <th align="center" colspan="3">Edit Expiration Dates</th>
                                                            </tr>
                                                            <tr>
                                                              <td width="50px;">
                                                                <!-- quantity boxes -->
                                                                <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                                <!-- quantity boxes -->
                                                              </td>
                                                              <td width="70%">01/12/2016</td>
                                                              <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                             <td width="50px;">
                                                              <!-- quantity boxes -->
                                                              <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                              <!-- quantity boxes -->
                                                            </td>
                                                            <td width="70%">10/12/2016</td>
                                                            <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                          </tr>
                                                          <tr>
                                                           <td width="50px;">
                                                            <!-- quantity boxes -->
                                                            <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                            <!-- quantity boxes -->
                                                          </td>
                                                          <td width="70%">15/12/2016</td>
                                                          <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="50px;">
                                                            <!-- quantity boxes -->
                                                            <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                            <!-- quantity boxes -->
                                                          </td>
                                                          <td width="70%">20/12/2016</td>
                                                          <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                        </tr>

                                                      </table>


                                                      <div>
                                                        <textarea class="form-control" placeholder="Notes" style="resize: none;"></textarea>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <script type="text/javascript">
                                                    function incrementValue()
                                                    {
                                                      var value = parseInt(document.getElementById('number').value, 10);
                                                      value = isNaN(value) ? 0 : value;
                                                      if(value<10){
                                                        value++;
                                                        document.getElementById('number').value = value;
                                                      }
                                                    }
                                                    function decrementValue()
                                                    {
                                                      var value = parseInt(document.getElementById('number').value, 10);
                                                      value = isNaN(value) ? 0 : value;
                                                      if(value>1){
                                                        value--;
                                                        document.getElementById('number').value = value;
                                                      }

                                                    }
                                                    

                                                  </script>
                                                </p>
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
                                    </div>
                                    <div class="col-md-3 col-md-offset-1" style="background-color: #fff; width:27%;  border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                                      <h3>6" Roller Gauze</h3>
                                      <div>
                                        <p style="text-align: justify; font-size: 13px; color: #666;">Quantity Required : 5</p>
                                      </div>
                                      <div>

                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal6">Edit</button> 
                                        <a href="#" class="pull-right" style="width: 32px; height: 10px;">
                                          <svg id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <style type="text/css">
                                              .st0{fill:#41AD49;}
                                            </style>
                                            <g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z    M501.7,296.3l-241,241l0,0l-17.2,17.2L110.3,421.3l58.8-58.8l74.5,74.5l199.4-199.4L501.7,296.3L501.7,296.3z"/></g></svg></a> 

                                            <div class="modal fade" id="myModal6" role="dialog">
                                              <div class="modal-dialog">
                                                
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">EDIT 6" Roller Gauze</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p>
                                                      <div class="col-md-12">
                                                        <div class="col-md-8 col-md-offset-2">
                                                          <div class="col-md-1" style="margin-left: -4%;">
                                                            <input type="button" onclick="decrementValue()" value="-" style="background-color: #333; border:0px; color: #fff;  height: 32px;
                                                            width: 30px;" /></div>
                                                            <div class="col-md-9" style="margin-left:6%">
                                                              <input type="text" class="form-control" name="quantity" value="0" maxlength="2" max="10" size="1" id="number" /></div>
                                                              <div class="col-md-1">
                                                                <input type="button" onclick="incrementValue()" value="+" style="background-color: #5bc0de; color: #fff;  border:0px; height: 32px;
                                                                width: 30px;" /></div>
                                                              </div>

                                                              <div class="col-md-8 col-md-offset-2" style="margin-top: 5%">
                                                                <a  id="edit_exp"  class=" col-md-12 btn btn-primary" style="margin-bottom:5%;"> Edit Expiration dates </a>

                                                                <table id="exp_table" style="display: none;"  class="table exp_table table-responsive table-bordered">
                                                                  <tr>
                                                                    <th align="center" colspan="3">Edit Expiration Dates</th>
                                                                  </tr>
                                                                  <tr>
                                                                    <td width="50px;">
                                                                      <!-- quantity boxes -->
                                                                      <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                                      <!-- quantity boxes -->
                                                                    </td>
                                                                    <td width="70%">01/12/2016</td>
                                                                    <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                                  </tr>
                                                                  <tr>
                                                                   <td width="50px;">
                                                                    <!-- quantity boxes -->
                                                                    <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                                    <!-- quantity boxes -->
                                                                  </td>
                                                                  <td width="70%">10/12/2016</td>
                                                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                 <td width="50px;">
                                                                  <!-- quantity boxes -->
                                                                  <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                                  <!-- quantity boxes -->
                                                                </td>
                                                                <td width="70%">15/12/2016</td>
                                                                <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                              </tr>
                                                              <tr>
                                                                <td width="50px;">
                                                                  <!-- quantity boxes -->
                                                                  <input type="number" name="quantity" value="1" maxlength="2" max="50" min="0" size="1"  />      
                                                                  <!-- quantity boxes -->
                                                                </td>
                                                                <td width="70%">20/12/2016</td>
                                                                <td><a href="#" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
                                                              </tr>

                                                            </table>


                                                            <div>
                                                              <textarea class="form-control" placeholder="Notes" style="resize: none;"></textarea>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <script type="text/javascript">
                                                          function incrementValue()
                                                          {
                                                            var value = parseInt(document.getElementById('number').value, 10);
                                                            value = isNaN(value) ? 0 : value;
                                                            if(value<10){
                                                              value++;
                                                              document.getElementById('number').value = value;
                                                            }
                                                          }
                                                          function decrementValue()
                                                          {
                                                            var value = parseInt(document.getElementById('number').value, 10);
                                                            value = isNaN(value) ? 0 : value;
                                                            if(value>1){
                                                              value--;
                                                              document.getElementById('number').value = value;
                                                            }

                                                          }
                                                          

                                                        </script>
                                                      </p>
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
                                          </div>
                                        </div>
                                        
                                        
                                        
                                      </div>
                                      
                                    </div>
                                  </div>
                                  
                                  
                                  <br>
                                  
                                  
                                  
                                  <br>
                                  <div class="row">
                                    
                                    <div class="col-md-12">
                                     <div class="col-md-3 " style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                                      <div class="col-md-9">
                                        <h3>Main 04 Tank</h3>
                                        <div>
                                          <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>
                                          <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                                        </div>
                                      </div>
                                      <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
                                       <i class="fa fa-lock fa-5x"></i>
                                       <div><h5><b>SEALED</b></h5></div>
                                       <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

                                     </div>

                                     <div class="modal fade" id="showexpbox" role="dialog">
                                      <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Seal Expiration Date</h4>
                                          </div>
                                          <div class="modal-body">
                                            <p>
                                              <div class="well">
                                                <div> SEAL NUMBER : 589788 </div>
                                                <div> Expiry on : 01/26/2021 </div>
                                                
                                              </div>
                                              <div>
                                                <label>Set New Seal Number </label>
                                                <input type="text" class="form-control" placeholder="Enter New Seal Number" name="sealno">
                                                <div class="date-picker" align="center" data-date-format="mm/dd/yyyy"></div>
                                              </div>
                                            </p>
                                          </div>
                                          <div class="modal-footer" style="border-top:0px;">
                                            <div class="col-md-9 col-md-offset-3">
                                              <input type="button" name="save" data-dismiss="modal" class="btn btn-default col-md-3" style="background-color: #32c5d2; border:1px solid #fff; margin-top:20px; color: #fff;" id="save" value="OK">
                                              <input type="button" name="close" class="btn btn-default col-md-3" data-dismiss="modal" style="background-color: #32c5d2;border:1px solid #fff; margin-top:20px; color: #fff;" id="close" value="Cancel">
                                              <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                            </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>


                                  </div>
                                  <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                                    <div class="col-md-9">
                                      <h3>Main 05 Tank</h3>
                                      <div>
                                        <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                                        <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                                      </div>
                                    </div>
                                    <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
                                     <i class="fa fa-lock fa-5x"></i>
                                     <div><h5><b>SEALED</b></h5></div>
                                     <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

                                   </div>

                                 </div>
                                 <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                                  <div class="col-md-9">
                                    <h3>Main 06 Tank</h3>
                                    <div>
                                      <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                                      <input type="button" name="sealeds" class="btn btn-default" style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                                    </div>
                                  </div>
                                  <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
                                   <i class="fa fa-lock fa-5x"></i>
                                   <div><h5><b>SEALED</b></h5></div>
                                   <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

                                 </div>
                               </div>
                             </div>
                             
                           </div>
                           <br>
                           
                           
                           <div class="row">
                            
                            <div class="col-md-12">
                             <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; margin-left: 0px; padding-bottom: 14px;">
                              <div class="col-md-9">
                                <h3>Main 07 Tank</h3>
                                <div>
                                  <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                                  <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                                </div>
                              </div>
                              <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
                               <i class="fa fa-lock fa-5x"></i>
                               <div><h5><b>SEALED</b></h5></div>
                               <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

                             </div>

                           </div>
                           <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                            <div class="col-md-9">
                              <h3>Main 08 Tank</h3>
                              <div>
                                <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                                <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                              </div>
                            </div>
                            <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
                             <i class="fa fa-lock fa-5x"></i>
                             <div><h5><b>SEALED</b></h5></div>
                             <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

                           </div>

                         </div>
                         <div class="col-md-3 col-md-offset-1" style="background-color: #fff; border: 2px solid #d4d4d4; border-radius: 10px !important; padding-bottom: 14px;">
                          <div class="col-md-9">
                            <h3>Main 09 Tank</h3>
                            <div>
                              <p style="text-align: justify; font-size: 13px; color: #666;">Drive-front compartment.</p>  
                              <input type="button"  name="sealeds" class="btn btn-default " style="background-color: #32c5d2; color: #fff;" id="sealeds2" value="Remove Seal">
                            </div>
                          </div>
                          <div class="col-md-3"  data-toggle="modal" data-target="#showexpbox"  style="margin-top: 30px; color: green; cursor:pointer; margin-left: -25px;">
                           <i class="fa fa-lock fa-5x"></i>
                           <div><h5><b>SEALED</b></h5></div>
                           <p style=" width: 100px; font-size: 10px">Seal 589788<br>Exp 01/26/2021</p>

                         </div>

                       </div>
                     </div>
                     
                   </div>
                   <br>
                   
                   
                   <div class="row">
                    
                   </div>
                 </div>
                 <!-- END PAGE CONTENT INNER -->
               </div>