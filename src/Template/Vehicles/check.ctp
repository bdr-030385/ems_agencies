
<section class="content-header">
    <h1><?= __('Rig Check') . ": " . $vehicle->number_vehicle ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Rig Check') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-body">
                    <?php foreach($vehicle_compartments as $vc) { ?>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-gray default-box" style="border: 2px solid #ccc;">
                                <div class="pull-right"><button data-vehicle-compartment-id="<?= $vc->id; ?>" class="btn btn-info btn-xs btn-show-check-subcompartment" title="Show Sub Compartment"><i class="fa  fa-object-group"></i></button></div>
                                <div class="clearfix"></div>
                                <div class="inner text-center">
                                    <p><?= $vc->name; ?></p>
                                </div>
                                
                                <a href="#" class="small-box-footer">Sealed</i></a>
                            </div>

                            <div id="sub-compartment-<?= $vc->id; ?>" class="row hidden" style="width: 1070px; background-color:#efefef; padding:10px">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-gray default-box" style="border: 2px solid #ccc;">
                                        <div class="inner text-center">
                                            <p>aaaaa</p>
                                        </div>
                                        
                                        <a href="#" class="small-box-footer">Sealed</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-gray default-box" style="border: 2px solid #ccc;">
                                        <div class="inner text-center">
                                            <p>aaaaa</p>
                                        </div>
                                        
                                        <a href="#" class="small-box-footer">Sealed</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-gray default-box" style="border: 2px solid #ccc;">
                                        <div class="inner text-center">
                                            <p>aaaaa</p>
                                        </div>
                                        
                                        <a href="#" class="small-box-footer">Sealed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>            
            </div>
        </section>
    </div>

