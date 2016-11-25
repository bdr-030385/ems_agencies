
<div class="cd-tabs">
<style>
.fixed-header {
  position: fixed;
  top:0; left:0;
  width: 100%; 
}
nav { 
  background: #444d58;
  postion:fixed;
  z-index:10;
}

    </style>

  <!-- second partition -->
  <div class="col-md-12" style="color: #000">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <section class="col-lg-12 ">
            <div class="box " >  
                <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($vehicleType->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($vehicleType->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($vehicleType->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($vehicleType->modified) ?></td>
                    </tr>
                </tbody>
                </table>

                <div class="form-group" style="margin-top: 80px;">

                </div>
                <div class="related" style="padding:10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= __('Related Vehicles') ?></h3>
                        </div>
                    </div>        
                    <?php if (!empty($vehicleType->vehicles)): ?>
                    <table class="table table-striped table-bordered table-hover global-datatable">
                        <thead>
                        <tr>
                            <th><?= __('Id') ?></th>
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
                        </thead>
                        <tbody>
                        <?php foreach ($vehicleType->vehicles as $vehicles): ?>
                        <tr>
                            <td><?= h($vehicles->id) ?></td>
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
            </div>
        </section>
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>

</div>
