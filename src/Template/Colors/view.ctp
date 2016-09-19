
<section class="content-header">
    <h1><?= __('View Color') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($color->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($color->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($color->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($color->modified) ?></td>
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
                <h3 class="panel-title"><?= __('Related Vehicles') ?></h3>
            </div>
        </div>        
        <?php if (!empty($color->vehicles)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Agency Id') ?></th>
                <th><?= __('Vehicle Type Id') ?></th>
                <th><?= __('Color Id') ?></th>
                <th><?= __('Number Vehicle') ?></th>
                <th><?= __('Vehicle Year') ?></th>
                <th><?= __('Make') ?></th>
                <th><?= __('Model') ?></th>
                <th><?= __('Color') ?></th>
                <th><?= __('Vin') ?></th>
                <th><?= __('Part Vehicle Inspection') ?></th>
                <th><?= __('Registration Card') ?></th>
                <th><?= __('Insurance Card') ?></th>
                <th><?= __('Expiration Date') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($color->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->agency_id) ?></td>
                <td><?= h($vehicles->vehicle_type_id) ?></td>
                <td><?= h($vehicles->color_id) ?></td>
                <td><?= h($vehicles->number_vehicle) ?></td>
                <td><?= h($vehicles->vehicle_year) ?></td>
                <td><?= h($vehicles->make) ?></td>
                <td><?= h($vehicles->model) ?></td>
                <td><?= h($vehicles->color) ?></td>
                <td><?= h($vehicles->vin) ?></td>
                <td><?= h($vehicles->part_vehicle_inspection) ?></td>
                <td><?= h($vehicles->registration_card) ?></td>
                <td><?= h($vehicles->insurance_card) ?></td>
                <td><?= h($vehicles->expiration_date) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td><?= h($vehicles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
