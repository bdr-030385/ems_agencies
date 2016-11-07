<div class="page-content-inner">
                                                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-globe"></i>Agencies</div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="all">Agency name</th>
                                    <th class="min-phone-l">Contact info</th>
                                    <th class="min-tablet">Address</th>
                                    <th class="min-phone-l">Action</th>

                                    <th class="desktop">Billing</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($agencies as $agency): ?>
                                    <tr>
                                        <td><?= h($agency->name) ?></td>
                                        <td></td>
                                        <td><?= h($agency->address_street1) ?></td>
                                        <td>
                                           <?= $this->Html->link('Edit', ['action' => 'edit', $agency->id],['class' => 'btn blue', 'title' => 'Edit', 'escape' => false]) ?>
                                           <?= $this->Html->link('Delete', '#modal-'.$agency->id,['data-toggle' => 'modal', 'class' => 'btn red', 'title' => 'Delete', 'escape' => false]) ?>
                                           <div id="modal-<?=$agency->id?>" class="modal fade">
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
                                                                ['action' => 'delete', $agency->id],
                                                                ['class' => 'btn btn-danger', 'escape' => false]
                                                            )
                                                        ?>
                                                    </div>
                                                  </div>
                                                </div>                              
                                            </div>
                                        </td>
                                        <td></td>
                                        <!-- <td class="actions">
                                            <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $agency->id],['class' => 'btn btn-info', 'title' => 'View', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $agency->id],['class' => 'btn btn-success', 'title' => 'Edit', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="fa fa-users"></i>', ['action' => 'add_users', $agency->id],['class' => 'btn btn-success', 'title' => 'Add Users', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$agency->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'title' => 'Delete', 'escape' => false]) ?>
                                            <div id="modal-<?=$agency->id?>" class="modal fade">
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
                                                                ['action' => 'delete', $agency->id],
                                                                ['class' => 'btn btn-danger', 'escape' => false]
                                                            )
                                                        ?>
                                                    </div>
                                                  </div>
                                                </div>                              
                                            </div>
                                        </td> -->
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