
<section class="content-header">
    <h1><?= __('View Agency') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Account Type') ?></th>
            <td><?= $agency->has('account_type') ? $this->Html->link($agency->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $agency->account_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Member Type') ?></th>
            <td><?= $agency->has('member_type') ? $this->Html->link($agency->member_type->name, ['controller' => 'MemberTypes', 'action' => 'view', $agency->member_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($agency->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Emt Number') ?></th>
            <td><?= h($agency->emt_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($agency->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($agency->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Date') ?></th>
            <td><?= h($agency->start_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($agency->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($agency->modified) ?></td>
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
                <h3 class="panel-title"><?= __('Related User Entities') ?></h3>
            </div>
        </div>        
        <?php if (!empty($agency->user_entities)): ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Agency Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Firstname') ?></th>
                <th><?= __('Lastname') ?></th>
                <th><?= __('Mi') ?></th>
                <th><?= __('Member Id') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Birthdate') ?></th>
                <th><?= __('Ssn') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('State') ?></th>
                <th><?= __('Zip') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Home') ?></th>
                <th><?= __('Work Phone') ?></th>
                <th><?= __('Cell Phone') ?></th>
                <th><?= __('Cell Phone Carrier') ?></th>
                <th><?= __('Emergency Contact Name') ?></th>
                <th><?= __('Emergency Email') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agency->user_entities as $userEntities): ?>
            <tr>
                <td><?= h($userEntities->id) ?></td>
                <td><?= h($userEntities->agency_id) ?></td>
                <td><?= h($userEntities->user_id) ?></td>
                <td><?= h($userEntities->firstname) ?></td>
                <td><?= h($userEntities->lastname) ?></td>
                <td><?= h($userEntities->mi) ?></td>
                <td><?= h($userEntities->member_id) ?></td>
                <td><?= h($userEntities->gender) ?></td>
                <td><?= h($userEntities->birthdate) ?></td>
                <td><?= h($userEntities->ssn) ?></td>
                <td><?= h($userEntities->address) ?></td>
                <td><?= h($userEntities->city) ?></td>
                <td><?= h($userEntities->state) ?></td>
                <td><?= h($userEntities->zip) ?></td>
                <td><?= h($userEntities->email) ?></td>
                <td><?= h($userEntities->phone) ?></td>
                <td><?= h($userEntities->home) ?></td>
                <td><?= h($userEntities->work_phone) ?></td>
                <td><?= h($userEntities->cell_phone) ?></td>
                <td><?= h($userEntities->cell_phone_carrier) ?></td>
                <td><?= h($userEntities->emergency_contact_name) ?></td>
                <td><?= h($userEntities->emergency_email) ?></td>
                <td><?= h($userEntities->created) ?></td>
                <td><?= h($userEntities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'UserEntities', 'action' => 'view', $userEntities->id], ['class' => 'btn btn-info', 'escape' => false]) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'UserEntities', 'action' => 'edit', $userEntities->id], ['class' => 'btn btn-success', 'escape' => false]) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['controller' => 'UserEntities', 'action' => 'delete', $userEntities->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $userEntities->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>      
            </tbody>      
        </table>
    <?php endif; ?>
    </div>
</section>
