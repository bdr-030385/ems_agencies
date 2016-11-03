<script>var base_url = '<?= $base_url; ?>';</script>
<style>
.small-inner {margin-bottom: 0px;}
</style>
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
                    <?php $c = 0; ?>
                    <?php foreach($vehicle_compartments as $vc) { ?>
                        <?php $c++; ?>
                        <?php if($vc->parent_id == 0) { ?>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                
                                    <div class="small-box default-box <?php echo getCompartmentStatusClass($a_checked_compartments[$vc->id]); ?>" style="border: 2px solid #ccc;">
                                        <div class="pull-right"><button data-vehicle-compartment-id="<?= $vc->id; ?>" data-bg-color="#00c0ef" class="btn btn-primary btn-xs btn-show-check-subcompartment" title="Show Sub Compartment"><i class="fa  fa-object-group"></i></button></div>
                                        <div class="clearfix"></div>
                                        <div class="inner text-center">
                                            <p><?= $vc->name; ?></p>
                                        </div>
                                        <?php if($vc->allow_seal == 1) { ?>
                                            <a href="javascript:void(0);" data-vehicle-compartment-id="<?= $vc->id; ?>" data-status="Good" class="small-box-footer btn-seal-compartment">Sealed</a>
                                        <?php }else{  ?>
                                            <a href="#" disabled="disabled">&nbsp;</a>
                                        <?php } ?>
                                    </div>
                            
                                
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class=" col-lg-8">
                                <?php loadCheckVehicleChildSubCompartmentsHtml($vc->id,$child_subcompartments,$compartment_items, $a_checked_compartments, $a_checked_items); ?>
                            </div>
                        </div>

                    <?php } ?>

                    <div id="modal-seal-compartment" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Seal Confirmation</h4>
                            </div>
                            <div class="modal-body">
                                <p><?= __('Are you sure you want to seal the selected compartment?') ?></p>
                            </div>
                            <div class="modal-footer">                                        
                                 <?php 
                                    echo $this->Form->create(null,['id' => 'frm-seal-compartment']);
                                    echo $this->Form->hidden('vehicle_compartment_id',['id' => 'vehicle_compartment_id', 'value' => ""]);
                                    echo $this->Form->hidden('status',['id' => 'status', 'value' => ""]);
                                    echo $this->Form->button(__('No'),['name' => 'cancel', 'value' => 'cancel', 'class' => 'btn btn-default', 'data-dismiss' => 'modal', 'escape' => false]);
                                    echo $this->Form->button(__('Yes'),['name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-primary ', 'escape' => false]);
                                    echo $this->Form->end();
                                ?>                                                                                
                            </div>
                          </div>
                        </div>                              
                    </div>

                    <div id="modal-compartment-item-note" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Note</h4>
                            </div>
                            <div class="modal-body">
                                <div id="compartment-item-note-container"></div>
                            </div>
                            
                          </div>
                        </div>                              
                    </div>

                </div>            
            </div>
        </section>
    </div>

