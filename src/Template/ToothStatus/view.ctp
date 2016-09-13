
<section class="content-header">
    <h1><?= __('View Tooth Status') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($toothStatus->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Archive') ?></th>
            <td><?= $this->Number->format($toothStatus->is_archive) ?></td>
        </tr>
    <tr>
        <th><?= __('Name') ?></th>
        <td><?= $this->Text->autoParagraph(h($toothStatus->name)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Code') ?></th>
        <td><?= $this->Text->autoParagraph(h($toothStatus->code)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Date Created') ?></th>
            <td><?= h($toothStatus->date_created) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Updated') ?></th>
            <td><?= h($toothStatus->date_updated) ?></td>
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
