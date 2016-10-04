
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
                <div class="box-body">
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
                        <div class="box-body">
                            <ul class="todo-list">
                                <?php foreach ($vehicleCompartments as $vehicleCompartment) { ?>
                                    <li>
                                      <!-- drag handle -->
                                          <span class="handle">
                                            <i class="fa fa-ellipsis-v"></i>
                                            <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                         <!-- todo text -->
                                        <a href="javascript:void(0);" data-vehicle-compartment-id="<?= $vehicleCompartment->id; ?>" class="btn-show-main-compartment"><span class="text"><?= h($vehicleCompartment->name) ?></span></a>
                                        <!-- Emphasis label -->
                                        <!-- <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small> -->
                                        <!-- General tools such as edit or delete-->
                                        <div class="tools">
                                            <?= $this->Html->link('<i class="fa fa-pencil"></i> Edit', ['action' => 'edit', $vehicleCompartment->id],['title' => 'Edit', 'class' => 'btn btn-xs btn-success', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="fa fa-trash-o"></i> Remove', '#modal-'.$vehicleCompartment->id,['data-toggle' => 'modal', 'class' => 'btn btn-xs btn-danger', 'escape' => false]) ?>
                                                       
                                        </div>
                                        <div id="modal-<?=$vehicleCompartment->id?>" class="modal fade">
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
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                    <?= $this->Form->postLink(
                                                            'Yes',
                                                            ['action' => 'delete', $vehicleCompartment->id],
                                                            ['class' => 'btn btn-danger', 'escape' => false]
                                                        )
                                                    ?>
                                                </div>
                                              </div>
                                            </div>                              
                                        </div>          
                                    </li>
                                <?php } ?>
                            
                          </ul>
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

