
<section class="content-header">
    <h1><?= __('Agencies') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('Agencies') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New Agency'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('account_type_id') ?></th>
                                                <th><?= $this->Paginator->sort('member_type_id') ?></th>
                                                <th><?= $this->Paginator->sort('name') ?></th>
                                                <th><?= $this->Paginator->sort('emt_number') ?></th>
                                                <th><?= $this->Paginator->sort('status') ?></th>
                                                <th><?= $this->Paginator->sort('start_date') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($agencies as $agency): ?>
                            <tr>
                                                <td><?= $this->Number->format($agency->id) ?></td>
                                                <td><?= $agency->has('account_type') ? $this->Html->link($agency->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $agency->account_type->id]) : '' ?></td>
                                                <td><?= $agency->has('member_type') ? $this->Html->link($agency->member_type->name, ['controller' => 'MemberTypes', 'action' => 'view', $agency->member_type->id]) : '' ?></td>
                                                <td><?= h($agency->name) ?></td>
                                                <td><?= h($agency->emt_number) ?></td>
                                                <td><?= h($agency->status) ?></td>
                                                <td><?= h($agency->start_date) ?></td>
                                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $agency->id],['class' => 'btn btn-info','escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $agency->id],['class' => 'btn btn-success', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash"></i>', '#modal-'.$agency->id,['data-toggle' => 'modal', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                                    <div id="modal-<?=$agency->id?>" class="modal fade" tabindex="-1" data-width="660" style="display: none; max-height:175px;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><?= __('Are you sure you want to delete selected entry?') ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-default"><?= __('No') ?></button>
                                            <?= $this->Form->postLink(
                                                    'Yes',
                                                    ['action' => 'delete', $agency->id],
                                                    ['class' => 'btn btn-primary', 'escape' => false]
                                                )
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="paginator" style="text-align:center;">
                        <ul class="pagination">
                        <?= $this->Paginator->prev('«') ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next('»') ?>
                        </ul>
                        <p class="hidden"><?= $this->Paginator->counter() ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>