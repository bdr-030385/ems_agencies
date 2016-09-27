
<section class="content-header">
    <h1><?= __('View Item') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $item->has('agency') ? $this->Html->link($item->agency->name, ['controller' => 'Agencies', 'action' => 'view', $item->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($item->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Item Category') ?></th>
            <td><?= $item->has('item_category') ? $this->Html->link($item->item_category->name, ['controller' => 'ItemCategories', 'action' => 'view', $item->item_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Reordering Point Category') ?></th>
            <td><?= h($item->reordering_point_category) ?></td>
        </tr>
        <tr>
            <th><?= __('Reordering Amount Category') ?></th>
            <td><?= h($item->reordering_amount_category) ?></td>
        </tr>
        <tr>
            <th><?= __('Vendor') ?></th>
            <td><?= $item->has('vendor') ? $this->Html->link($item->vendor->id, ['controller' => 'Vendors', 'action' => 'view', $item->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Front Stockroom') ?></th>
            <td><?= h($item->front_stockroom) ?></td>
        </tr>
        <tr>
            <th><?= __('Back Stockroom') ?></th>
            <td><?= h($item->back_stockroom) ?></td>
        </tr>
        <tr>
            <th><?= __('Rig') ?></th>
            <td><?= h($item->rig) ?></td>
        </tr>
        <tr>
            <th><?= __('Easv') ?></th>
            <td><?= h($item->easv) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($item->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Reordering Point') ?></th>
            <td><?= $this->Number->format($item->reordering_point) ?></td>
        </tr>
        <tr>
            <th><?= __('Reordering Amount') ?></th>
            <td><?= $this->Number->format($item->reordering_amount) ?></td>
        </tr>
        <tr>
            <th><?= __('Part 800') ?></th>
            <td><?= $this->Number->format($item->part_800) ?></td>
        </tr>
    <tr>
        <th><?= __('Note') ?></th>
        <td><?= $this->Text->autoParagraph(h($item->note)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Expiration Date') ?></th>
            <td><?= h($item->expiration_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </tbody>
    </table>

    <div class="form-group" style="margin-top: 80px;">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="action-fixed-bottom">        
        <?= $this->Html->link('<i class="fa fa-angle-left"> </i> Back To list', ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
        </div>
    </div>
    </div>
    <div class="related">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Related Item Expirations') ?></h3>
            </div>
        </div>        
        <?php if (!empty($item->item_expirations)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Item Id') ?></th>
                <th><?= __('Expiration Date') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($item->item_expirations as $itemExpirations): ?>
            <tr>
                <td><?= h($itemExpirations->id) ?></td>
                <td><?= h($itemExpirations->item_id) ?></td>
                <td><?= h($itemExpirations->expiration_date) ?></td>
                <td><?= h($itemExpirations->created) ?></td>
                <td><?= h($itemExpirations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'ItemExpirations', 'action' => 'view', $itemExpirations->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'ItemExpirations', 'action' => 'edit', $itemExpirations->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'ItemExpirations', 'action' => 'delete', $itemExpirations->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $itemExpirations->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Related Vendor Items') ?></h3>
            </div>
        </div>        
        <?php if (!empty($item->vendor_items)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Vendor Id') ?></th>
                <th><?= __('Item Id') ?></th>
                <th><?= __('Item Name') ?></th>
                <th><?= __('Item Number') ?></th>
                <th><?= __('Barcode Number') ?></th>
                <th><?= __('Website Link') ?></th>
                <th><?= __('Pack Price') ?></th>
                <th><?= __('Pack Price Uom') ?></th>
                <th><?= __('Pack Quantity') ?></th>
                <th><?= __('Pack Quantity Uom') ?></th>
                <th><?= __('Sub Pack Quantity') ?></th>
                <th><?= __('Sub Pack Quantity Uom') ?></th>
                <th><?= __('Is Preferd Vendor') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($item->vendor_items as $vendorItems): ?>
            <tr>
                <td><?= h($vendorItems->id) ?></td>
                <td><?= h($vendorItems->vendor_id) ?></td>
                <td><?= h($vendorItems->item_id) ?></td>
                <td><?= h($vendorItems->item_name) ?></td>
                <td><?= h($vendorItems->item_number) ?></td>
                <td><?= h($vendorItems->barcode_number) ?></td>
                <td><?= h($vendorItems->website_link) ?></td>
                <td><?= h($vendorItems->pack_price) ?></td>
                <td><?= h($vendorItems->pack_price_uom) ?></td>
                <td><?= h($vendorItems->pack_quantity) ?></td>
                <td><?= h($vendorItems->pack_quantity_uom) ?></td>
                <td><?= h($vendorItems->sub_pack_quantity) ?></td>
                <td><?= h($vendorItems->sub_pack_quantity_uom) ?></td>
                <td><?= h($vendorItems->is_preferd_vendor) ?></td>
                <td><?= h($vendorItems->note) ?></td>
                <td><?= h($vendorItems->created) ?></td>
                <td><?= h($vendorItems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'VendorItems', 'action' => 'view', $vendorItems->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'VendorItems', 'action' => 'edit', $vendorItems->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'VendorItems', 'action' => 'delete', $vendorItems->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $vendorItems->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
