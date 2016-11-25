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
                                    
                                    <th class="none">Email Address</th>
                                    <th class="none">EMT Number</th>
                                    <th class="none">Status</th>
                                    <th class="none">Start Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($agencies as $agency){ ?>
                                    <tr>
                                        <td><?php echo $agency->name; ?></td>
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
                                        <td><?php echo $agency->email_address; ?></td>
                                        <td><?php echo $agency->emt_number; ?></td>
                                        <td><?php echo $agency->status; ?></td>
                                        <td><?php echo $agency->start_date->format("Y-m-d"); ?></td>
                                    </tr>
                                <?php } ?>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
                       
    </div>
</div>