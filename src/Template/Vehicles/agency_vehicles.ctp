
<section class="content-header">
    <h1><?= __('Vehicles') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Vehicles') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Vehicle'), ['action' => 'agency_add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                <th><?= $this->Paginator->sort('id') ?></th>                                                
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
                                                <td><?= $vehicle->has('vehicle_type') ? $this->Html->link($vehicle->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicle->vehicle_type->id]) : '' ?></td>
                                                <td><?= $vehicle->has('color') ? $this->Html->link($vehicle->color->name, ['controller' => 'Colors', 'action' => 'view', $vehicle->color->id]) : '' ?></td>
                                                <td><?= $vehicle->number_vehicle ?></td>
                                                <td><?= h($vehicle->vehicle_year) ?></td>
                                                <td><?= h($vehicle->make) ?></td>
                                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vehicle->id],['class' => 'btn btn-info','title' => 'View', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'agency_edit', $vehicle->id],['class' => 'btn btn-success', 'title' => 'Edit', 'escape' => false]) ?>
                                    <?php if($vehicle->part_vehicle_inspection == "Yes") { ?>
                                        <?= $this->Html->link('<i class="fa  fa-object-group"></i>', ['controller' => 'vehicle_compartments', 'action' => 'vehicle', $vehicle->id],['class' => 'btn btn-success', 'title' => 'Compartments', 'escape' => false]) ?>
                                    <?php } else { ?>
                                        <?= $this->Html->link('<i class="fa  fa-object-group"></i>', ['controller' => 'vehicle_compartments', 'action' => 'vehicle', $vehicle->id],['type' => 'button', 'class' => 'btn btn-success', 'title' => 'Compartments', 'escape' => false, 'disabled' => 'disabled', 'onclick' => 'return false;']) ?>
                                    <?php } ?>                                    
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
                    <div class="paginator" style="text-align:center;">
                        <ul class="pagination">
                        <?= $this->Paginator->prev('«') ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next('»') ?>
                        </ul>
                        <p class="hidden"><?= $this->Paginator->counter() ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>