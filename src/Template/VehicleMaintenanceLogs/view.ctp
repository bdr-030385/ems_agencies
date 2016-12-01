
<section class="content-header">
    <h1><?= __('View Vehicle Maintenance Log') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $vehicleMaintenanceLog->has('agency') ? $this->Html->link($vehicleMaintenanceLog->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vehicleMaintenanceLog->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vendor') ?></th>
            <td><?= $vehicleMaintenanceLog->has('vendor') ? $this->Html->link($vehicleMaintenanceLog->vendor->id, ['controller' => 'Vendors', 'action' => 'view', $vehicleMaintenanceLog->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Invoice Number') ?></th>
            <td><?= h($vehicleMaintenanceLog->invoice_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Mileage') ?></th>
            <td><?= h($vehicleMaintenanceLog->mileage) ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle') ?></th>
            <td><?= $vehicleMaintenanceLog->has('vehicle') ? $this->Html->link($vehicleMaintenanceLog->vehicle->number_vehicle, ['controller' => 'Vehicles', 'action' => 'view', $vehicleMaintenanceLog->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Submitted By') ?></th>
            <td><?= h($vehicleMaintenanceLog->submitted_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleMaintenanceLog->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Performed') ?></th>
            <td><?= h($vehicleMaintenanceLog->date_performed) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicleMaintenanceLog->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicleMaintenanceLog->modified) ?></td>
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
