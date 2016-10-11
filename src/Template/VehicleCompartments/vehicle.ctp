
<section class="content-header">
    <h1><?= __('Vehicle Compartments') . ": " . $vehicle->number_vehicle ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Vehicle Compartments') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Vehicle Compartment'), ['action' => 'vehicle_add', $vehicle->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="">
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="fa fa-clipboard"></i>

                            <h3 class="box-title">Compartment List</h3>

                            <div class="box-tools pull-right">
                                <!-- <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="">
                            <section class="sidebar">
                            <ul class="sidebar-menu" style="margin:10px;">                                    
                                <?= recursiveVehicleCompartments($vehicleCompartments) ?>                                
                            </ul>
                            <div id="modal-delete-compartment" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><?= __('Are you sure you want to delete selected entry?') ?></p>
                                    </div>
                                    <div class="modal-footer">                                        
                                         <?php 
                                            echo $this->Form->create(null,['url' => ['action' => 'delete_compartment']],['id' => 'frm-delete-vehicle-compartment']);
                                            echo $this->Form->hidden('vehile_compartment_id',['id' => 'vehile_compartment_id', 'value' => ""]);
                                            echo $this->Form->button(__('No'),['name' => 'cancel', 'value' => 'cancel', 'class' => 'btn btn-default', 'data-dismiss' => 'modal', 'escape' => false]);
                                            echo $this->Form->button(__('Yes'),['name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'escape' => false]);
                                            echo $this->Form->end();
                                        ?>                                                                                
                                    </div>
                                  </div>
                                </div>                              
                            </div>
                            </section>
                        </div>
                        <!-- /.box-body -->
                        <!-- <div class="box-footer clearfix no-border">
                          <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                        </div> -->
                      </div>
                </div>

                <div id="main-compartment-container"></div>
                    
            </div>
        </section>
    </div>

