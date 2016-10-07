<section class="content-header">
    <h1><?= __('Edit Compartment Item') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Compartment Items'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li class="active"><?= __('Edit') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">

                </div>
                <div class="box-body">
                    <?= $this->Form->create($compartmentItem,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='compartment_id' class='col-sm-2 control-label'>" . __('Compartment Id') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('compartment_id', ['class' => 'form-control', 'id' => 'compartment_id', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='item_id' class='col-sm-2 control-label'>" . __('Item Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('item_id', ['class' => 'form-control', 'id' => 'item_id', 'label' => false, 'options' => $items]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for=' modified' class='col-sm-2 control-label'>" . __(' Modified') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input(' modified', ['class' => 'form-control', 'id' => ' modified', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="action-fixed-bottom">
                                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="fa fa-angle-left"> </i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-warning', 'escape' => false]) ?>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </section>
    </div>
</section>