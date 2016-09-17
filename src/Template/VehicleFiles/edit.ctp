<section class="content-header">
    <h1><?= __('Edit Vehicle File') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Vehicle Files'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create(null,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vehicle_id' class='col-sm-2 control-label'>" . __('Vehicle Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vehicle_id', ['class' => 'form-control', 'id' => 'vehicle_id', 'label' => false, 'options' => $vehicles]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='filename' class='col-sm-2 control-label'>" . __('Filename') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('filename', ['class' => 'form-control', 'id' => 'filename', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='location' class='col-sm-2 control-label'>" . __('Location') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('location', ['class' => 'form-control', 'id' => 'location', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='is_approved' class='col-sm-2 control-label'>" . __('Is Approved') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('is_approved', ['class' => 'form-control', 'id' => 'is_approved', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='modfied' class='col-sm-2 control-label'>" . __('Modfied') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('modfied', ['class' => 'form-control', 'id' => 'modfied', 'label' => false]);                
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