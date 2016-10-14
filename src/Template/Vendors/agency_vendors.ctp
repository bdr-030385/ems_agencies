
<section class="content-header">
    <h1><?= __('Vendors') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Vendors') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Vendor'), ['action' => 'agency_add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>                                                
                                <th><?= $this->Paginator->sort('vendor_name') ?></th>
                                <th><?= $this->Paginator->sort('phone_number') ?></th>
                                <th><?= $this->Paginator->sort('address') ?></th>
                                <th><?= $this->Paginator->sort('state') ?></th>
                                <th><?= $this->Paginator->sort('zip') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vendors as $vendor): ?>
                            <tr>
                                <td><?= $this->Number->format($vendor->id) ?></td>                               
                                <td><?= h($vendor->vendor_name) ?></td>
                                <td><?= h($vendor->phone_number) ?></td>
                                <td><?= h($vendor->address) ?></td>
                                <td><?= h($vendor->state) ?></td>
                                <td><?= h($vendor->zip) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $vendor->id],['class' => 'btn btn-info','escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'agency_edit', $vendor->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-medkit"></i>', ['controller' => 'vendor_items', 'action' => 'index', $vendor->id],['class' => 'btn btn-success', 'escape' => false]) ?>
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