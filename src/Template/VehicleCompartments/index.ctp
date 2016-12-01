<div class="cd-tabs"> 
                    
                    <!-- second partition -->
                    <div class="col-md-12" style="color: #000"> 
                        <!-- form here -->
                        <div class="portlet light " style="width:100%; float:left;">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <center>
                                        <select>
                                            <option>vehicle</option>
                                            <option>stockroom</option>
                                        </select>
                                    </center>
                                </div>
                                <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">New Compartment</a>
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
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-cc" aria-hidden="true"></i> Name </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Name New Compartment">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-commenting" aria-hidden="true"></i> Description </span>
                                                            <input type="text" class="form-control input-circle-right" placeholder="Description ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-database" aria-hidden="true"></i> Add After </span>
                                                            <select class="form-control input-circle-right ">
                                                                <option> Drive Outside Comp1</option>
                                                                <option> Drive Outside Comp</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 col-md-offset-8">
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <div class="mt-checkbox-inline">
                                                                <label class="mt-checkbox">
                                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">
                                                                    Allow Seal <span></span> </label>
                                                            </div>
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
                            <div class="portlet-title" style="margin-top:70px; margin-bottom:15px;">
                                <div class="portlet-body form"> 
                                    <!-- BEGIN FORM-->
                                    <form role="form">
                                    <div class="form-body">
                                    <div class="col-md-12">
                                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="all"> Compartment Name</th>
                                                <th class="min-phone-l">Compartment Detail</th>
                                                <th class="min-phone-l">Sealed</th>
                                                <th class="desktop">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#" class="disabled-link btnMdl lnk1" data-toggle="modal" data-target="#compBox"><i class="fa fa-plus-circle"></i></a> Driver Outside Comp.</td>
                                                <td>4 oxford waves compartment</td>
                                                <td>
                                                    <div class="mt-checkbox-list">
                                                        <label class="mt-checkbox mt-checkbox-outline">
                                                            <input type="checkbox" class="sealedCheck" data-vc="1" checked>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><a class="btn blue disabled-link btnMdl lnk1" data-toggle="modal" data-target="#editBox">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="btnMdl lnk2" data-toggle="modal" data-target="#compBox"><i class="fa fa-plus-circle"></i></a> Driver Outside Comp 1</td>
                                                <td>4 oxford waves compartment</td>
                                                <td>
                                                    <div class="mt-checkbox-list">
                                                        <label class="mt-checkbox mt-checkbox-outline">
                                                            <input type="checkbox" class="sealedCheck" data-vc="2">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><a class="btn blue btnMdl lnk2" data-toggle="modal" data-target="#editBox">Edit</a></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="modal fade" id="compBox" role="dialog">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">&nbsp;</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-md-12">
                                                        <div class="portlet light " style="width:100%; float:left;">
                                                            <div class="portlet-title">
                                                                <div class="portlet-body form">
                                                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="all">Item</th>
                                                                            <th class="min-phone-l">QTY</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Eye Wash</td>
                                                                            <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sterile Water</td>
                                                                            <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>OB Kit</td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="portlet-body form">
                                                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><a href="#"><i class="fa fa-plus-circle"></i></a> Sub Compartment 1</td>
                                                                            <td>Collar Bag</td>
                                                                            <td>
                                                                                <div class="mt-checkbox-list">
                                                                                    <label class="mt-checkbox mt-checkbox-outline">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#"><i class="fa fa-plus-circle"></i></a> Sub Compartment 2</td>
                                                                            <td>Collar Bag</td>
                                                                            <td>
                                                                                <div class="mt-checkbox-list">
                                                                                    <label class="mt-checkbox mt-checkbox-outline">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:0px;">
                                                    <div class="text-center">
                                                        <input type="button" name="close" class="btn green" data-dismiss="modal" id="close" value="close">
                                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editBox" role="dialog">
                                        <div class="modal-dialog modal-lg" style="width:80% !important;"> 
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h2 class="modal-title">Edit Compartment</h2>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="portlet light">
                                                                <div class="portlet-body form">
                                                                    <div class="col-md-12">
                                                                        <div class="page-title" align="center">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-body">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control input-lg input-medium text-center" placeholder="input-lg" type="text" value="Taruma Cabinate">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <input class="form-control input-sm input-medium text-center" placeholder="input-sm" type="text" value="BLS Truma Supply">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--<h1 style="font-size: 30px; color: #000; margin-top:20px;">Taruma Cabinate</h1>-->
                                                                            <!--<p>BLS Truma Supply</p>-->
                                                                            <br>
                                                                            <div class="row text-center">
                                                                                <div class="col-md-8 col-md-offset-2">
                                                                                    <div class="portlet box blue">
                                                                                        <div class="portlet-title">
                                                                                            <div class="caption text-center" style="float:none;">
                                                                                                Copy Existing Compartment
                                                                                            </div>  
                                                                                        </div>
                                                                                        <div class="portlet-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-12">
                                                                                                    <div class="input-group">
                                                                                                    <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                                                                                                    <select class="form-control input-circle-right">
                                                                                                        <option>Select Vehicle</option>
                                                                                                        <option>Vehicle 1</option>
                                                                                                        <option>Vehicle 2</option>
                                                                                                    </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-12">
                                                                                                    <div class="input-group">
                                                                                                    <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                                                                                                    <select class="form-control input-circle-right">
                                                                                                        <option>Select Compartment</option>
                                                                                                        <option>Compartment 1</option>
                                                                                                        <option>Compartment 2</option>
                                                                                                    </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-12">
                                                                                                    <div class="input-group">
                                                                                                    <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                                                                                                    <select class="form-control input-circle-right">
                                                                                                        <option>Select Sub Compartment</option>
                                                                                                        <option>Sub Compartment 1</option>
                                                                                                        <option>Sub Compartment 2</option>
                                                                                                    </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row"><div class="col-lg-12 col-md-12">&nbsp;</div></div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-xs-12 text-center">
                                                                                                    <button type="button" class="btn btn-primary">Insert Compartment</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        <!--<div class="col-md-6" style="margin-top:20px;">
                                                                            <div class="form-group">
                                                                                <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                                                                                    <select class="form-control input-circle-right">
                                                                                        <option>8TYH8</option>
                                                                                        <option>76JHJ</option>
                                                                                        <option>8KH23</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" style="margin-top:20px;"> </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                                                                                    <select class="form-control input-circle-right">
                                                                                        <option>Trauma Cabinate</option>
                                                                                        <option>Rauna</option>
                                                                                        <option>Demo</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                                                        
                                                                        <div class="col-lg-5 col-md-5">
                                                                            <div class="form-group">
                                                                                <div class="input-group"> 
                                                                                    <span class="input-group-addon input-circle-left"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                                                                                    <select class="form-control input-circle-right">
                                                                                        <option>Select category</option>
                                                                                        <option>Trauma</option>
                                                                                        <option>Trauma 1</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-7"> 
                                                                            <a href="javascript:void(0);" class="btn btn-primary pull-right addSubCompartment"> Add Sub Compartment </a>
                                                                            <div class="modal fade" id="myModal1" role="dialog">
                                                                                <div class="modal-dialog"> 
                                                                                    
                                                                                    <!-- Modal content-->
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                            <h4 class="modal-title">Add New Sub Compartment/Bag</h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-cc" aria-hidden="true"></i> Name </span>
                                                                                                        <input type="text" class="form-control input-circle-right" placeholder="Name New Compartment/Bag">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-database" aria-hidden="true"></i> </span>
                                                                                                        <input type="text" class="form-control input-circle-right" placeholder="New Compartment Will be added within">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-10 col-md-offset-8">
                                                                                                <div class="form-group">
                                                                                                    <div class="col-md-7">
                                                                                                        <div class="mt-checkbox-inline">
                                                                                                            <label class="mt-checkbox">
                                                                                                                <input type="checkbox" id="inlineCheckbox3" value="option3">
                                                                                                                Allow Seal <span></span> </label>
                                                                                                        </div>
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
                                                                            <div class="row">
                                                                                <div class="col-lg-5">
                                                                                    <div class="portlet box blue">
                                                                                        <div class="portlet-title">
                                                                                            <div class="caption text-center" style="float:none;display:block;">
                                                                                                Item list
                                                                                            </div>  
                                                                                        </div>
                                                                                        <div class="portlet-body">
                                                                                            <div class="row" style="height:400px; overflow-y:scroll;">
                                                                                                <div class="col-md-12 col-xs-12">
                                                                                                    <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-database" aria-hidden="true"></i> </span>
                                                                                                        <input type="text" class="form-control input-circle-right" placeholder="Search Item list">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-12 col-xs-12 unSelectedItem">
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                    <div class="mt-checkbox-inline">
                                                                                                        <label class="mt-checkbox">
                                                                                                            <input type="checkbox" class="itemCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                            Allow Seal <span></span> </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 text-center" style="line-height:200px;">
                                                                                            <a href="javascript:void(0);" class="btn addSubCompartment" style="color:#000000;"><i class="fa fa-arrow-right" style="font-size:36px;"></i></a>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 text-center" style="line-height:200px;">
                                                                                            <a href="javascript:void(0);" class="btn removeSubCompartment" style="color:#000000;"><i class="fa fa-arrow-left" style="font-size:36px;"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <div class="portlet box blue">
                                                                                        <div class="portlet-title">
                                                                                            <div class="caption text-center" style="float:none;display:block;">
                                                                                                Selected Items
                                                                                            </div>  
                                                                                        </div>
                                                                                        <div class="portlet-body">
                                                                                            <div class="row" style="height:400px; overflow-y:scroll;">
                                                                                                <div class="col-md-12 col-xs-12">
                                                                                                    <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-database" aria-hidden="true"></i> </span>
                                                                                                        <input type="text" class="form-control input-circle-right" placeholder="Search Item list">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-12 col-xs-12">
                                                                                                    <div class="form-horizontal" role="form">
                                                                                                        <div class="form-body selectedItem">
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="mt-checkbox-inline">
                                                                                                                        <label class="mt-checkbox">
                                                                                                                            <input type="checkbox" class="itemSelectedCheckbox" id="inlineCheckbox3" value="option3">
                                                                                                                            Allow Seal <span></span> </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-2 col-md-offset-5">
                                                                                                                        <input class="form-control input-xsmall" type="text" value="2">
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-12 text-center">
                                                        <!--<input type="button" name="save" data-dismiss="modal" class="btn btn-default col-md-3" style="background-color: #32c5d2; border:1px solid #fff; margin-top:20px; color: #fff;" id="save" value="save">
                                                        <input type="button" name="close" class="btn btn-default col-md-3" data-dismiss="modal" style="background-color: #32c5d2;border:1px solid #fff; margin-top:20px; color: #fff;" id="close" value="close">-->
                                                        <button type="button" data-dismiss="modal" class="btn blue">Cancel</button>
                                                        <button type="button" class="btn default">Save</button>
                                                        <button type="button" class="btn default">Save And Close</button>
                                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--> 
                                                    </div>
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
                            </form>
            
            <!-- END FORM--> 
        </div>
    </div>
    <!-- Form Here --> 
</div>