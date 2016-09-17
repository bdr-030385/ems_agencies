<section class="content-header">
    <h1><?= __('Add Agency') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Agencies'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li class="active"><?= __('Add') ?></li>
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
                        <h4 style="margin-left:20px;">Agency Information</h4>       
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='account_type_id' class='col-sm-2 control-label'>" . __('Account Type Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('account_type_id', ['class' => 'form-control', 'required' => 'required', 'id' => 'account_type_id', 'label' => false, 'options' => $accountTypes]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='member_type_id' class='col-sm-2 control-label'>" . __('Member Type Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('member_type_id', ['class' => 'form-control', 'required' => 'required', 'id' => 'member_type_id', 'label' => false, 'options' => $memberTypes]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='name' class='col-sm-2 control-label'>" . __('Name') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('name', ['class' => 'form-control', 'required' => 'required', 'id' => 'name', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='emt_number' class='col-sm-2 control-label'>" . __('Emt Number') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('emt_number', ['class' => 'form-control', 'required' => 'required',  'id' => 'emt_number', 'label' => false]);                
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
                                        echo $this->Form->input('start_date', ['class' => 'form-control', 'id' => 'start_date', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                ?>
                        <hr>
                        <h4 style="margin-left:20px;">User Information</h4>
                        <?php
                            echo "
                                <div class='form-group'>
                                    <label for='start_date' class='col-sm-2 control-label'>" . __('Email Address') . "</label>
                                    <div class='col-sm-6'>";
                                    echo $this->Form->input('email_address', ['class' => 'form-control', 'id' => 'email_address', 'required' => 'required', 'type' => 'email', 'label' => false]);                
                                echo " </div></div>"; 

                            echo "
                                <div class='form-group'>
                                    <label for='start_date' class='col-sm-2 control-label'>" . __('Password') . "</label>
                                    <div class='col-sm-6'>";
                                    echo $this->Form->input('password', ['class' => 'form-control', 'id' => 'password', 'required' => 'required', 'type' => 'password', 'label' => false]);                
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