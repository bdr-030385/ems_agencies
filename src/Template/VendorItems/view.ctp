
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
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendorItem->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Item Id') ?></th>
            <td><?= $this->Number->format($vendorItem->item_id) ?></td>
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
