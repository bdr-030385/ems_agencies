
<section class="content-header">
    <h1><?= __('Vehicle Maintenance Requests') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Vehicle Maintenance Requests') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Vehicle Maintenance Request'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('agency_id') ?></th>
                                                <th><?= $this->Paginator->sort('user_entity_id') ?></th>
                                                <th><?= $this->Paginator->sort('complaint') ?></th>
                                                <th><?= $this->Paginator->sort('date_occurred') ?></th>
                                                <th><?= $this->Paginator->sort('created') ?></th>
                                                <th><?= $this->Paginator->sort('modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vehicleMaintenanceRequests as $vehicleMaintenanceRequest): ?>
                            <tr>
                                                <td><?= $this->Number->format($vehicleMaintenanceRequest->id) ?></td>
                                                <td><?= $vehicleMaintenanceRequest->has('agency') ? $this->Html->link($vehicleMaintenanceRequest->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vehicleMaintenanceRequest->agency->id]) : '' ?></td>
                                                <td><?= $vehicleMaintenanceRequest->has('user_entity') ? $this->Html->link($vehicleMaintenanceRequest->user_entity->id, ['controller' => 'UserEntities', 'action' => 'view', $vehicleMaintenanceRequest->user_entity->id]) : '' ?></td>
                                                <td><?= h($vehicleMaintenanceRequest->complaint) ?></td>
                                                <td><?= h($vehicleMaintenanceRequest->date_occurred) ?></td>
                                                <td><?= h($vehicleMaintenanceRequest->created) ?></td>
                                                <td><?= h($vehicleMaintenanceRequest->modified) ?></td>
                                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vehicleMaintenanceRequest->id],['class' => 'btn btn-info','escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $vehicleMaintenanceRequest->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$vehicleMaintenanceRequest->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                    <div id="modal-<?=$vehicleMaintenanceRequest->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $vehicleMaintenanceRequest->id],
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