
<section class="content-header">
    <h1><?= __('View Vehicle Maintenance Request') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $vehicleMaintenanceRequest->has('agency') ? $this->Html->link($vehicleMaintenanceRequest->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vehicleMaintenanceRequest->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User Entity') ?></th>
            <td><?= $vehicleMaintenanceRequest->has('user_entity') ? $this->Html->link($vehicleMaintenanceRequest->user_entity->id, ['controller' => 'UserEntities', 'action' => 'view', $vehicleMaintenanceRequest->user_entity->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Complaint') ?></th>
            <td><?= h($vehicleMaintenanceRequest->complaint) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleMaintenanceRequest->id) ?></td>
        </tr>
    <tr>
        <th><?= __('Complaint Description') ?></th>
        <td><?= $this->Text->autoParagraph(h($vehicleMaintenanceRequest->complaint_description)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Description') ?></th>
        <td><?= $this->Text->autoParagraph(h($vehicleMaintenanceRequest->description)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Note') ?></th>
        <td><?= $this->Text->autoParagraph(h($vehicleMaintenanceRequest->note)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Date Occurred') ?></th>
            <td><?= h($vehicleMaintenanceRequest->date_occurred) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicleMaintenanceRequest->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicleMaintenanceRequest->modified) ?></td>
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
