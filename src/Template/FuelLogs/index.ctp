
<section class="content-header">
    <h1><?= __('Fuel Logs') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Fuel Logs') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Fuel Log'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('user_entity_id') ?></th>
                                                <th><?= $this->Paginator->sort('vehicle_id') ?></th>
                                                <th><?= $this->Paginator->sort('mileage') ?></th>
                                                <th><?= $this->Paginator->sort('gallons_pumped') ?></th>
                                                <th><?= $this->Paginator->sort('date_submitted') ?></th>
                                                <th><?= $this->Paginator->sort('created') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fuelLogs as $fuelLog): ?>
                            <tr>
                                                <td><?= $this->Number->format($fuelLog->id) ?></td>
                                                <td><?= $fuelLog->has('user_entity') ? $this->Html->link($fuelLog->user_entity->id, ['controller' => 'UserEntities', 'action' => 'view', $fuelLog->user_entity->id]) : '' ?></td>
                                                <td><?= $fuelLog->has('vehicle') ? $this->Html->link($fuelLog->vehicle->number_vehicle, ['controller' => 'Vehicles', 'action' => 'view', $fuelLog->vehicle->id]) : '' ?></td>
                                                <td><?= $this->Number->format($fuelLog->mileage) ?></td>
                                                <td><?= $this->Number->format($fuelLog->gallons_pumped) ?></td>
                                                <td><?= h($fuelLog->date_submitted) ?></td>
                                                <td><?= h($fuelLog->created) ?></td>
                                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $fuelLog->id],['class' => 'btn btn-info','escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $fuelLog->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$fuelLog->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                    <div id="modal-<?=$fuelLog->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $fuelLog->id],
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