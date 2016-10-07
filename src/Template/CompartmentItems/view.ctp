
<section class="content-header">
    <h1><?= __('View Compartment Item') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Item') ?></th>
            <td><?= $compartmentItem->has('item') ? $this->Html->link($compartmentItem->item->name, ['controller' => 'Items', 'action' => 'view', $compartmentItem->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($compartmentItem->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Compartment Id') ?></th>
            <td><?= $this->Number->format($compartmentItem->compartment_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($compartmentItem->created) ?></td>
        </tr>
        <tr>
            <th><?= __(' Modified') ?></th>
            <td><?= h($compartmentItem-> modified) ?></td>
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
