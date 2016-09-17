
<section class="content-header">
    <h1><?= __('View Member Type') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($memberType->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($memberType->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($memberType->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($memberType->modified) ?></td>
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
                <h3 class="panel-title"><?= __('Related Agencies') ?></h3>
            </div>
        </div>        
        <?php if (!empty($memberType->agencies)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Account Type Id') ?></th>
                <th><?= __('Member Type Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Emt Number') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Start Date') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($memberType->agencies as $agencies): ?>
            <tr>
                <td><?= h($agencies->id) ?></td>
                <td><?= h($agencies->account_type_id) ?></td>
                <td><?= h($agencies->member_type_id) ?></td>
                <td><?= h($agencies->name) ?></td>
                <td><?= h($agencies->emt_number) ?></td>
                <td><?= h($agencies->status) ?></td>
                <td><?= h($agencies->start_date) ?></td>
                <td><?= h($agencies->created) ?></td>
                <td><?= h($agencies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Agencies', 'action' => 'view', $agencies->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Agencies', 'action' => 'edit', $agencies->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'Agencies', 'action' => 'delete', $agencies->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $agencies->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
