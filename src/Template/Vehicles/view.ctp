
<section class="content-header">
    <h1><?= __('View Vehicle') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $vehicle->has('agency') ? $this->Html->link($vehicle->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vehicle->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle Type') ?></th>
            <td><?= $vehicle->has('vehicle_type') ? $this->Html->link($vehicle->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicle->vehicle_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= $vehicle->has('color') ? $this->Html->link($vehicle->color->name, ['controller' => 'Colors', 'action' => 'view', $vehicle->color->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle Year') ?></th>
            <td><?= h($vehicle->vehicle_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Make') ?></th>
            <td><?= h($vehicle->make) ?></td>
        </tr>
        <tr>
            <th><?= __('Model') ?></th>
            <td><?= h($vehicle->model) ?></td>
        </tr>
        <tr>
            <th><?= __('Vin') ?></th>
            <td><?= h($vehicle->vin) ?></td>
        </tr>
        <tr>
            <th><?= __('Part Vehicle Inspection') ?></th>
            <td><?= h($vehicle->part_vehicle_inspection) ?></td>
        </tr>
        <tr>
            <th><?= __('Registration Card') ?></th>
            <td><?= h($vehicle->registration_card) ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Card') ?></th>
            <td><?= h($vehicle->insurance_card) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Number Vehicle') ?></th>
            <td><?= $this->Number->format($vehicle->number_vehicle) ?></td>
        </tr>
        <tr>
            <th><?= __('Expiration Date') ?></th>
            <td><?= h($vehicle->expiration_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicle->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicle->modified) ?></td>
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
                <h3 class="panel-title"><?= __('Related Vehicle Files') ?></h3>
            </div>
        </div>        
        <?php if (!empty($vehicle->vehicle_files)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Vehicle Id') ?></th>
                <th><?= __('Filename') ?></th>
                <th><?= __('Location') ?></th>
                <th><?= __('Is Approved') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modfied') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->vehicle_files as $vehicleFiles): ?>
            <tr>
                <td><?= h($vehicleFiles->id) ?></td>
                <td><?= h($vehicleFiles->vehicle_id) ?></td>
                <td><?= h($vehicleFiles->filename) ?></td>
                <td><?= h($vehicleFiles->location) ?></td>
                <td><?= h($vehicleFiles->is_approved) ?></td>
                <td><?= h($vehicleFiles->created) ?></td>
                <td><?= h($vehicleFiles->modfied) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'VehicleFiles', 'action' => 'view', $vehicleFiles->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'VehicleFiles', 'action' => 'edit', $vehicleFiles->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'VehicleFiles', 'action' => 'delete', $vehicleFiles->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleFiles->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
