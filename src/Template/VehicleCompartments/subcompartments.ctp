
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
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>                                                                                                
                                <th><?= $this->Paginator->sort('name') ?></th>
                                <th><?= $this->Paginator->sort('allow_seal') ?></th>                                
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vehicleCompartments as $vehicleCompartment): ?>
                            <tr>
                                <td><?= $this->Number->format($vehicleCompartment->id) ?></td>                                                                
                                <td><?= h($vehicleCompartment->name) ?></td>
                                <td>
                                    <?php 
                                        if( $vehicleCompartment->allow_seal == 1 ){
                                            echo "<span class='label label-info'>Yes</span>";
                                        }else{
                                            echo "<span class='label label-danger'>No</span>";
                                        }
                                    ?>                                    
                                </td>                                
                                <td><?= h($vehicleCompartment->created) ?></td>
                                <td><?= h($vehicleCompartment->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vehicleCompartment->id],['title' => 'View', 'class' => 'btn btn-info','escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $vehicleCompartment->id],['title' => 'Edit', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-list-alt"></i>', ['action' => 'subcompartments', $vehicleCompartment->id],['title' => 'Subcompartments', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$vehicleCompartment->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
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