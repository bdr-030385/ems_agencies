
<section class="content-header">
    <h1><?= __('View Vehicle File') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Vehicle') ?></th>
            <td><?= $vehicleFile->has('vehicle') ? $this->Html->link($vehicleFile->vehicle->id, ['controller' => 'Vehicles', 'action' => 'view', $vehicleFile->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Filename') ?></th>
            <td><?= h($vehicleFile->filename) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleFile->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Approved') ?></th>
            <td><?= $this->Number->format($vehicleFile->is_approved) ?></td>
        </tr>
    <tr>
        <th><?= __('Location') ?></th>
        <td><?= $this->Text->autoParagraph(h($vehicleFile->location)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicleFile->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modfied') ?></th>
            <td><?= h($vehicleFile->modfied) ?></td>
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
