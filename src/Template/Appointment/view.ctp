
<section class="content-header">
    <h1><?= __('View Appointment') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($appointment->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($appointment->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename') ?></th>
            <td><?= h($appointment->middlename) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Number') ?></th>
            <td><?= h($appointment->contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($appointment->id) ?></td>
        </tr>
    <tr>
        <th><?= __('Address') ?></th>
        <td><?= $this->Text->autoParagraph(h($appointment->address)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Note') ?></th>
        <td><?= $this->Text->autoParagraph(h($appointment->note)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Appointment Date') ?></th>
            <td><?= h($appointment->appointment_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Time') ?></th>
            <td><?= h($appointment->start_time) ?></td>
        </tr>
        <tr>
            <th><?= __('End Time') ?></th>
            <td><?= h($appointment->end_time) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Created') ?></th>
            <td><?= h($appointment->date_created) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Updated') ?></th>
            <td><?= h($appointment->date_updated) ?></td>
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
