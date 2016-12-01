
<section class="content-header">
    <h1><?= __('Vehicle Maintenance Logs') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Vehicle Maintenance Logs') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Vehicle Maintenance Log'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('agency_id') ?></th>
                                                <th><?= $this->Paginator->sort('vendor_id') ?></th>
                                                <th><?= $this->Paginator->sort('invoice_number') ?></th>
                                                <th><?= $this->Paginator->sort('mileage') ?></th>
                                                <th><?= $this->Paginator->sort('date_performed') ?></th>
                                                <th><?= $this->Paginator->sort('vehicle_id') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vehicleMaintenanceLogs as $vehicleMaintenanceLog): ?>
                            <tr>
                                                <td><?= $this->Number->format($vehicleMaintenanceLog->id) ?></td>
                                                <td><?= $vehicleMaintenanceLog->has('agency') ? $this->Html->link($vehicleMaintenanceLog->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vehicleMaintenanceLog->agency->id]) : '' ?></td>
                                                <td><?= $vehicleMaintenanceLog->has('vendor') ? $this->Html->link($vehicleMaintenanceLog->vendor->id, ['controller' => 'Vendors', 'action' => 'view', $vehicleMaintenanceLog->vendor->id]) : '' ?></td>
                                                <td><?= h($vehicleMaintenanceLog->invoice_number) ?></td>
                                                <td><?= h($vehicleMaintenanceLog->mileage) ?></td>
                                                <td><?= h($vehicleMaintenanceLog->date_performed) ?></td>
                                                <td><?= $vehicleMaintenanceLog->has('vehicle') ? $this->Html->link($vehicleMaintenanceLog->vehicle->number_vehicle, ['controller' => 'Vehicles', 'action' => 'view', $vehicleMaintenanceLog->vehicle->id]) : '' ?></td>
                                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vehicleMaintenanceLog->id],['class' => 'btn btn-info','escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $vehicleMaintenanceLog->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$vehicleMaintenanceLog->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                    <div id="modal-<?=$vehicleMaintenanceLog->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $vehicleMaintenanceLog->id],
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