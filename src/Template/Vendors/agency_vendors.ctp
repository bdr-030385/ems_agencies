<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Contact List </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="all"> Contact Details</th>
                                 <th class="none">Email</th>
                                 <th class="none">Phone (H)</th>
                                 <th class="none">Contact Person</th>
                                 <th class="none">Contact Person Phone</th>
                            <th class="min-phone-l">Address</th>
                            <th class="min-tablet">City</th>
                            <th class="min-phone-l">State</th>
                           
                            <th class="desktop">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vendors as $vendor): ?>
                            <tr>
                                <td><?php echo $vendor->vendor_name; ?></td>
                               
                                    <td><?php echo $vendor->email; ?></td>
                                    <td><?php echo $vendor->phone_number; ?></td>
                                    <td><?php echo $vendor->contact_person; ?></td>
                                    <td><?php echo $vendor->contact_person_phone; ?></td>
                                <td><?php echo $vendor->address; ?></td>
                                <td><?php echo $vendor->city; ?></td>
                                <td><?php echo $vendor->state; ?></td> 
                                <td>
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendor->id],['class' => 'btn blue','escape' => false]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'agency_edit', $vendor->id],['class' => 'btn blue', 'escape' => false]) ?>    
                                    <?= $this->Html->link(__('Vendor Items'), ['controller' => 'vendor_items', 'action' => 'vendor', $vendor->id],['class' => 'btn blue', 'escape' => false]) ?>                                
                                    <?= $this->Html->link(__('Delete'), '#modal-'.$vendor->id,['data-toggle' => 'modal', 'class' => 'btn red', 'escape' => false]) ?>
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
                                                        ['action' => 'agency_delete', $vendor->id],
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