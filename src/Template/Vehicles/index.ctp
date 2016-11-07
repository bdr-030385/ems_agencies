<div class="page-content-inner">
                                                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-car"></i>Vehicles</div>
                        <div class="tools"></div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('agency_id') ?></th>
                                    <th><?= $this->Paginator->sort('vehicle_type_id') ?></th>
                                    <th><?= $this->Paginator->sort('color_id') ?></th>
                                    <th><?= $this->Paginator->sort('number_vehicle', __('Vehicle ID')) ?></th>
                                    <th><?= $this->Paginator->sort('vehicle_year') ?></th>
                                    <th><?= $this->Paginator->sort('make') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($vehicles as $vehicle): ?>
                                <tr>
                                    <td><?= $this->Number->format($vehicle->id) ?></td>
                                    <td><?= $vehicle->has('agency') ? $this->Html->link($vehicle->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vehicle->agency->id]) : '' ?></td>
                                    <td><?= $vehicle->has('vehicle_type') ? $this->Html->link($vehicle->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicle->vehicle_type->id]) : '' ?></td>
                                    <td><?= $vehicle->has('color') ? $this->Html->link($vehicle->color->name, ['controller' => 'Colors', 'action' => 'view', $vehicle->color->id]) : '' ?></td>
                                    <td><?= $vehicle->number_vehicle ?></td>
                                    <td><?= h($vehicle->vehicle_year) ?></td>
                                    <td><?= h($vehicle->make) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vehicle->id],['class' => 'btn btn-info','title' => 'View', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $vehicle->id],['class' => 'btn btn-success', 'title' => 'Edit', 'escape' => false]) ?>
                                        <?php if($vehicle->part_vehicle_inspection == "Yes") { ?>
                                            <?= $this->Html->link('<i class="fa  fa-object-group"></i>', ['controller' => 'vehicle_compartments', 'action' => 'vehicle', $vehicle->id],['class' => 'btn btn-success', 'title' => 'Compartments', 'escape' => false]) ?>
                                        <?php } else { ?>
                                            <?= $this->Html->link('<i class="fa  fa-object-group"></i>', ['controller' => 'vehicle_compartments', 'action' => 'vehicle', $vehicle->id],['type' => 'button', 'class' => 'btn btn-success', 'title' => 'Compartments', 'escape' => false, 'disabled' => 'disabled', 'onclick' => 'return false;']) ?>
                                        <?php } ?>  
                                        <?= $this->Html->link('<i class="fa fa-list-alt"></i>', ['action' => 'check', $vehicle->id],['class' => 'btn btn-success', 'title' => 'Rig Check', 'escape' => false]) ?>                                  
                                        <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$vehicle->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'title' => 'Delete', 'escape' => false]) ?>
                                        <div id="modal-<?=$vehicle->id?>" class="modal fade">
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
                                                            ['action' => 'delete', $vehicle->id],
                                                            ['class' => 'btn btn-danger', 'escape' => false]
                                                        )
                                                    ?>
                                                </div>
                                              </div>
                                            </div>                              
                                        </div>                                    
                                    </td>
                                </tr>
                                <?php endforeach; ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
                       
    </div>
</div>


