<div class="page-content-inner">
                                                
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-globe"></i>Vendors</div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="all">Agency name</th>
                                    <th class="min-phone-l">Vendor Name</th>
                                    <th class="min-tablet">Phone Number</th>
                                    <th class="min-phone-l">Email</th>
                                    <th class="min-phone-l">Website</th>
                                    <th class="min-phone-l">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($vendors as $vendor){ ?>
                                    <tr>
                                        <td><?php echo $vendor->agency->name; ?></td>
                                        <td><?php echo $vendor->vendor_name; ?></td>
                                        <td><?= h($vendor->phone_number) ?></td>
                                        <td><?= h($vendor->email) ?></td>
                                        <td><?= h($vendor->website) ?></td>
                                        <td>
                                            <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vendor->id],['class' => 'btn btn-info','escape' => false]) ?>
                                            <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $vendor->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                            <!--<?= $this->Html->link('<i class="fa fa-medkit"></i>', ['controller' => 'vendor_items', 'action' => 'vendor', $vendor->id],['class' => 'btn btn-success', 'escape' => false]) ?>-->
                                            <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$vendor->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                            <div id="modal-<?=$vendor->id?>" class="modal fade">
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
                                                                ['action' => 'delete', $vendor->id],
                                                                ['class' => 'btn btn-danger', 'escape' => false]
                                                            )
                                                        ?>
                                                    </div>
                                                  </div>
                                                </div>                              
                                            </div>  
                                        </td>
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
