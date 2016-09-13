<section class="content-header">
    <h1><?= __('Edit Group') ?></h1>
</section>
<section class="content">
    <?= $this->Form->create($group,['class' => 'form-horizontal']); ?>
    <fieldset>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label"><?php echo __('Group Name'); ?></label>
            <div class="col-sm-6">
                <?= $this->Form->input('name',['class' => 'form-control', 'id' => 'name', 'label' => false]) ?>
            </div>
        </div>
    </fieldset> 
    <div class="form-group" style="margin-top: 80px;">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="action-fixed-bottom">
                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue'),['name' => 'edit', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-angle-left"></i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</section>

