
<section class="content-header">
    <h1><?= __('View Vendor Item') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Vendor') ?></th>
            <td><?= $vendorItem->has('vendor') ? $this->Html->link($vendorItem->vendor->id, ['controller' => 'Vendors', 'action' => 'view', $vendorItem->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Item Name') ?></th>
            <td><?= h($vendorItem->item_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Pack Price Uom') ?></th>
            <td><?= h($vendorItem->pack_price_uom) ?></td>
        </tr>
        <tr>
            <th><?= __('Pack Quantity Uom') ?></th>
            <td><?= h($vendorItem->pack_quantity_uom) ?></td>
        </tr>
        <tr>
            <th><?= __('Sub Pack Quantity Uom') ?></th>
            <td><?= h($vendorItem->sub_pack_quantity_uom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendorItem->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Item Id') ?></th>
            <td><?= $this->Number->format($vendorItem->item_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pack Price') ?></th>
            <td><?= $this->Number->format($vendorItem->pack_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Pack Quantity') ?></th>
            <td><?= $this->Number->format($vendorItem->pack_quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Sub Pack Quantity') ?></th>
            <td><?= $this->Number->format($vendorItem->sub_pack_quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Preferd Vendor') ?></th>
            <td><?= $this->Number->format($vendorItem->is_preferd_vendor) ?></td>
        </tr>
    <tr>
        <th><?= __('Item Number') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendorItem->item_number)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Barcode Number') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendorItem->barcode_number)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Website Link') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendorItem->website_link)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Note') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendorItem->note)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vendorItem->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vendorItem->modified) ?></td>
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
</section>
