<script>
var BASE_URL = '<?= $base_url; ?>';
</script>
<section class="content-header">
    <h1><?= __('Items') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Items') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Item'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('agency_id') ?></th>
                                                <th><?= $this->Paginator->sort('name') ?></th>
                                                <th><?= $this->Paginator->sort('item_category_id') ?></th>
                                                <th><?= $this->Paginator->sort('quantity', __('Quantity on Hand')) ?></th>
                                                <th><?= $this->Paginator->sort('reordering_point') ?></th>
                                                <th><?= $this->Paginator->sort('reordering_point_category') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                                <td><?= $this->Number->format($item->id) ?></td>
                                                <td><?= $item->has('agency') ? $this->Html->link($item->agency->name, ['controller' => 'Agencies', 'action' => 'view', $item->agency->id]) : '' ?></td>
                                                <td><?= h($item->name) ?></td>
                                                <td><?= $item->has('item_category') ? $this->Html->link($item->item_category->name, ['controller' => 'ItemCategories', 'action' => 'view', $item->item_category->id]) : '' ?></td>
                                                <td><?= $this->Number->format($item->quantity) ?></td>
                                                <td><?= $this->Number->format($item->reordering_point) ?></td>
                                                <td><?= h($item->reordering_point_category) ?></td>
                                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-sitemap"></i>', '#addVendorItemModal-'.$item->id,['data-toggle' => 'modal', 'class' => 'btn btn-info btn-load-vendor', 'data-agency-id' => $item->agency_id, 'escape' => false, 'title' => 'Add Vendor to Item']) ?>
                                    <?php include('add_vendor_items.ctp'); ?>

                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $item->id],['class' => 'btn btn-success', 'escape' => false, 'title' => 'Edit Item']) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$item->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false, 'title' => 'Delete Item']) ?>
                                    <div id="modal-<?=$item->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $item->id],
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