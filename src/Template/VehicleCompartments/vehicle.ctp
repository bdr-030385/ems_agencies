
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
                                <div id="top-compartment-list"></div>                             
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

