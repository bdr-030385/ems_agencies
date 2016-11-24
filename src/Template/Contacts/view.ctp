
<section class="content-header">
    <h1><?= __('View Contact') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $contact->has('agency') ? $this->Html->link($contact->agency->name, ['controller' => 'Agencies', 'action' => 'view', $contact->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($contact->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($contact->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Email Address') ?></th>
            <td><?= h($contact->email_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Street') ?></th>
            <td><?= h($contact->street) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($contact->city) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($contact->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($contact->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone H') ?></th>
            <td><?= h($contact->phone_h) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone C') ?></th>
            <td><?= h($contact->phone_c) ?></td>
        </tr>
        <tr>
            <th><?= __('Carrier') ?></th>
            <td><?= h($contact->carrier) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Emergency Notification Text') ?></th>
            <td><?= $this->Number->format($contact->emergency_notification_text) ?></td>
        </tr>
        <tr>
            <th><?= __('Emergency Notification Email') ?></th>
            <td><?= $this->Number->format($contact->emergency_notification_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Information Text') ?></th>
            <td><?= $this->Number->format($contact->information_text) ?></td>
        </tr>
        <tr>
            <th><?= __('Information Email') ?></th>
            <td><?= $this->Number->format($contact->information_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($contact->modified) ?></td>
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
