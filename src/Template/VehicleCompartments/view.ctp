
<section class="content-header">
    <h1><?= __('View Vehicle Compartment') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Parent Vehicle Compartment') ?></th>
            <td><?= $vehicleCompartment->has('parent_vehicle_compartment') ? $this->Html->link($vehicleCompartment->parent_vehicle_compartment->name, ['controller' => 'VehicleCompartments', 'action' => 'view', $vehicleCompartment->parent_vehicle_compartment->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle') ?></th>
            <td><?= $vehicleCompartment->has('vehicle') ? $this->Html->link($vehicleCompartment->vehicle->id, ['controller' => 'Vehicles', 'action' => 'view', $vehicleCompartment->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($vehicleCompartment->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleCompartment->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Allow Seal') ?></th>
            <td><?= $this->Number->format($vehicleCompartment->allow_seal) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort') ?></th>
            <td><?= $this->Number->format($vehicleCompartment->sort) ?></td>
        </tr>
    <tr>
        <th><?= __('Description') ?></th>
        <td><?= $this->Text->autoParagraph(h($vehicleCompartment->description)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicleCompartment->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicleCompartment->modified) ?></td>
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
                <h3 class="panel-title"><?= __('Related Vehicle Compartments') ?></h3>
            </div>
        </div>        
        <?php if (!empty($vehicleCompartment->child_vehicle_compartments)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Vehicle Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Allow Seal') ?></th>
                <th><?= __('Sort') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicleCompartment->child_vehicle_compartments as $childVehicleCompartments): ?>
            <tr>
                <td><?= h($childVehicleCompartments->id) ?></td>
                <td><?= h($childVehicleCompartments->parent_id) ?></td>
                <td><?= h($childVehicleCompartments->vehicle_id) ?></td>
                <td><?= h($childVehicleCompartments->name) ?></td>
                <td><?= h($childVehicleCompartments->description) ?></td>
                <td><?= h($childVehicleCompartments->allow_seal) ?></td>
                <td><?= h($childVehicleCompartments->sort) ?></td>
                <td><?= h($childVehicleCompartments->created) ?></td>
                <td><?= h($childVehicleCompartments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'VehicleCompartments', 'action' => 'view', $childVehicleCompartments->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'VehicleCompartments', 'action' => 'edit', $childVehicleCompartments->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'VehicleCompartments', 'action' => 'delete', $childVehicleCompartments->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $childVehicleCompartments->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
