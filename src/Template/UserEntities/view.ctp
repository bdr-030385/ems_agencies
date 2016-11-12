<div class="cd-tabs">
  <style type="text/css">
    label
    {
      padding: 10px;
      padding-left: 0px;
      padding-top: 0px;
      }
  </style>
<ul class="cd-tabs-content" style="width: 100%;float: left;">
    <li data-content="tab1" class="selected">
  <!-- second partition -->
  <div class="page-title" align="center">
    <h1 style="font-size: 30px; color: #000"> View User </h1>
   
    <br>
    <br>
   
  </div>
  <div class="col-md-12" style="color: #000">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tbody>
                    <tr>
                        <th><?= __('Agency') ?></th>
                        <td><?= $userEntity->has('agency') ? $this->Html->link($userEntity->agency->name, ['controller' => 'Agencies', 'action' => 'view', $userEntity->agency->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('User') ?></th>
                        <td><?= $userEntity->has('user') ? $this->Html->link($userEntity->user->id, ['controller' => 'Users', 'action' => 'view', $userEntity->user->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Firstname') ?></th>
                        <td><?= h($userEntity->firstname) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Lastname') ?></th>
                        <td><?= h($userEntity->lastname) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Mi') ?></th>
                        <td><?= h($userEntity->mi) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Mid') ?></th>
                        <td><?= h($userEntity->mid) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Gender') ?></th>
                        <td><?= h($userEntity->gender) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Ssn') ?></th>
                        <td><?= h($userEntity->ssn) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('City') ?></th>
                        <td><?= h($userEntity->city) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('State') ?></th>
                        <td><?= h($userEntity->state) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Zip') ?></th>
                        <td><?= h($userEntity->zip) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($userEntity->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Phone') ?></th>
                        <td><?= h($userEntity->phone) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Home') ?></th>
                        <td><?= h($userEntity->home) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Work Phone') ?></th>
                        <td><?= h($userEntity->work_phone) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cell Phone') ?></th>
                        <td><?= h($userEntity->cell_phone) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cell Phone Carrier') ?></th>
                        <td><?= h($userEntity->cell_phone_carrier) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Emergency Contact Name') ?></th>
                        <td><?= h($userEntity->emergency_contact_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Emergency Email') ?></th>
                        <td><?= h($userEntity->emergency_email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($userEntity->id) ?></td>
                    </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= $this->Text->autoParagraph(h($userEntity->address)); ?></td>        
                </tr>
                    <tr>
                        <th><?= __('Birthdate') ?></th>
                        <td><?= h($userEntity->birthdate) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($userEntity->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($userEntity->modified) ?></td>
                    </tr>
                </tbody>
                </tbody>
                </table>

                <div class="form-group" style="margin-top: 80px;">
                
                </div>
                <div class="related" style="padding:10px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= __('Related User Custom Fields') ?></h3>
                        </div>
                    </div>        
                    <?php if (!empty($userEntity->user_custom_fields)): ?>
                    <table class="table table-striped table-bordered table-hover global-datatable">
                        <thead>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($userEntity->user_custom_fields as $userCustomFields): ?>
                        <tr>
                            <td><?= h($userCustomFields->id) ?></td>
                            <td><?= h($userCustomFields->name) ?></td>
                            <td><?= h($userCustomFields->value) ?></td>
                            <td><?= h($userCustomFields->created) ?></td>
                            <td><?= h($userCustomFields->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'UserCustomFields', 'action' => 'view', $userCustomFields->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                                <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'UserCustomFields', 'action' => 'edit', $userCustomFields->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                                <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'UserCustomFields', 'action' => 'delete', $userCustomFields->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $userCustomFields->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>      
                        </tbody>      
                    </table>
                <?php endif; ?>
                </div>
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>
</li>
</ul>
</div>
