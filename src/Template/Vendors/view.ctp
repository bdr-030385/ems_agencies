
<section class="content-header">
    <h1><?= __('View Vendor') ?></h1>
</section>

<section class="content">   
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <th><?= __('Agency') ?></th>
            <td><?= $vendor->has('agency') ? $this->Html->link($vendor->agency->name, ['controller' => 'Agencies', 'action' => 'view', $vendor->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vendor Name') ?></th>
            <td><?= h($vendor->vendor_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone Number') ?></th>
            <td><?= h($vendor->phone_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($vendor->address) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($vendor->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($vendor->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($vendor->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Person') ?></th>
            <td><?= h($vendor->contact_person) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Person Phone') ?></th>
            <td><?= h($vendor->contact_person_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Person Email') ?></th>
            <td><?= h($vendor->contact_person_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Tearms') ?></th>
            <td><?= h($vendor->tearms) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendor->id) ?></td>
        </tr>
    <tr>
        <th><?= __('City') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendor->city)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Website') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendor->website)); ?></td>        
    </tr>
    <tr>
        <th><?= __('Note') ?></th>
        <td><?= $this->Text->autoParagraph(h($vendor->note)); ?></td>        
    </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vendor->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vendor->modified) ?></td>
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
