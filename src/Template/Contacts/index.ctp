<div class="page-content-inner">
                                                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-globe"></i>Contact List</div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="all">Contact Details</th>
                                    <th class="all">Street</th>
                                    <th class="all">City</th>
                                    <th class="all">Country</th>
                                    <th class="all">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contacts as $contact): ?>
                                    <tr>
                                        <td><?= h($contact->firstname) ?> <?= h($contact->lastname) ?></td>
                                        <td><?= h($contact->street) ?></td>
                                        <td><?= h($contact->city) ?></td>
                                        <td><?= h($contact->country) ?></td>
                                        <td>
                                           <!--<?= $this->Html->link('Edit', ['action' => 'edit', $contact->id],['class' => 'btn blue', 'title' => 'Edit', 'escape' => false]) ?>-->
                                           <?= $this->Html->link('Delete', '#modal-'.$contact->id,['data-toggle' => 'modal', 'class' => 'btn red', 'title' => 'Delete', 'escape' => false]) ?>
                                           <div id="modal-<?=$contact->id?>" class="modal fade">
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
                                                                ['action' => 'delete', $contact->id],
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

