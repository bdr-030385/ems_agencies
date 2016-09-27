
<section class="content-header">
    <h1><?= __('View Item Category') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $itemCategory->has('agency') ? $this->Html->link($itemCategory->agency->name, ['controller' => 'Agencies', 'action' => 'view', $itemCategory->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($itemCategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($itemCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($itemCategory->modified) ?></td>
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
                <h3 class="panel-title"><?= __('Related Items') ?></h3>
            </div>
        </div>        
        <?php if (!empty($itemCategory->items)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Agency Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Item Category Id') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Reordering Point') ?></th>
                <th><?= __('Reordering Point Category') ?></th>
                <th><?= __('Reordering Amount') ?></th>
                <th><?= __('Reordering Amount Category') ?></th>
                <th><?= __('Vendor Id') ?></th>
                <th><?= __('Expiration Date') ?></th>
                <th><?= __('Part 800') ?></th>
                <th><?= __('Front Stockroom') ?></th>
                <th><?= __('Back Stockroom') ?></th>
                <th><?= __('Rig') ?></th>
                <th><?= __('Easv') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($itemCategory->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->agency_id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->item_category_id) ?></td>
                <td><?= h($items->quantity) ?></td>
                <td><?= h($items->reordering_point) ?></td>
                <td><?= h($items->reordering_point_category) ?></td>
                <td><?= h($items->reordering_amount) ?></td>
                <td><?= h($items->reordering_amount_category) ?></td>
                <td><?= h($items->vendor_id) ?></td>
                <td><?= h($items->expiration_date) ?></td>
                <td><?= h($items->part_800) ?></td>
                <td><?= h($items->front_stockroom) ?></td>
                <td><?= h($items->back_stockroom) ?></td>
                <td><?= h($items->rig) ?></td>
                <td><?= h($items->easv) ?></td>
                <td><?= h($items->note) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Items', 'action' => 'view', $items->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Items', 'action' => 'edit', $items->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'Items', 'action' => 'delete', $items->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
