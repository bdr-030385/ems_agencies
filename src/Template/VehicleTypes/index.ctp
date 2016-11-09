<div class="page-content-inner">
                                                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-car"></i>Vehicle Types</div>
                        <div class="tools"></div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('name') ?></th>
                                    <th><?= $this->Paginator->sort('created') ?></th>
                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($vehicleTypes as $vehicleType): ?>
                                <tr>
                                    <td><?= $this->Number->format($vehicleType->id) ?></td>
                                    <td><?= h($vehicleType->name) ?></td>
                                    <td><?= h($vehicleType->created) ?></td>
                                    <td><?= h($vehicleType->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vehicleType->id],['class' => 'btn btn-info','escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $vehicleType->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$vehicleType->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                        <div id="modal-<?=$vehicleType->id?>" class="modal fade">
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
                                                            ['action' => 'delete', $vehicleType->id],
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


