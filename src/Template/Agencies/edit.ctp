<section class="content-header">
    <h1><?= __('Edit Agency') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-suitcase'></i>" . __('Agencies'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($agency,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='account_type_id' class='col-sm-2 control-label'>" . __('Account Type') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('account_type_id', ['class' => 'form-control', 'id' => 'account_type_id', 'label' => false, 'options' => $accountTypes]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='member_type_id' class='col-sm-2 control-label'>" . __('Member Type') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('member_type_id', ['class' => 'form-control', 'id' => 'member_type_id', 'label' => false, 'options' => $memberTypes]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='name' class='col-sm-2 control-label'>" . __('Name') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('name', ['class' => 'form-control', 'id' => 'name', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='emt_number' class='col-sm-2 control-label'>" . __('Emt Number') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('emt_number', ['class' => 'form-control', 'id' => 'emt_number', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='status' class='col-sm-2 control-label'>" . __('Status') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('status', ['class' => 'form-control', 'id' => 'status', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='start_date' class='col-sm-2 control-label'>" . __('Start Date') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('start_date', ['type' => 'text', 'value' => $agency->start_date->format("Y-m-d"), 'class' => 'form-control default-datepicker', 'id' => 'start_date', 'label' => false]);                
                                    echo " </div></div>";   

                                    echo "
                                    <div class='form-group'>
                                        <label for='logo' class='col-sm-2 control-label'>" . __('Logo') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('logo', ['class' => 'form-control has-ck-finder', 'id' => 'logo', 'label' => false]);                
                                    echo " </div></div>";                                     
                        ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="action-fixed-bottom">
                                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue editing'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
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