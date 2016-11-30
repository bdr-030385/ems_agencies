
<section class="content-header">
    <h1><?= __('View Fuel Log') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('User Entity') ?></th>
            <td><?= $fuelLog->has('user_entity') ? $this->Html->link($fuelLog->user_entity->id, ['controller' => 'UserEntities', 'action' => 'view', $fuelLog->user_entity->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle') ?></th>
            <td><?= $fuelLog->has('vehicle') ? $this->Html->link($fuelLog->vehicle->number_vehicle, ['controller' => 'Vehicles', 'action' => 'view', $fuelLog->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fuelLog->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Mileage') ?></th>
            <td><?= $this->Number->format($fuelLog->mileage) ?></td>
        </tr>
        <tr>
            <th><?= __('Gallons Pumped') ?></th>
            <td><?= $this->Number->format($fuelLog->gallons_pumped) ?></td>
        </tr>
    <tr>
        <th><?= __('Gas Credit Card Number') ?></th>
        <td><?= $this->Text->autoParagraph(h($fuelLog->gas_credit_card_number)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Date Submitted') ?></th>
            <td><?= h($fuelLog->date_submitted) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($fuelLog->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($fuelLog->modified) ?></td>
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
