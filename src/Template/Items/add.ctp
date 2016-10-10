<script>
var BASE_URL = '<?= $base_url; ?>';
</script>
<section class="content-header">
    <h1><?= __('Add Item') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __('Items'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($item,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='agency_id' class='col-sm-2 control-label'>" . __('Agency Id') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('agency_id', ['class' => 'form-control', 'id' => 'agency_id', 'label' => false, 'options' => $agencies]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='name' class='col-sm-2 control-label'>" . __('Name') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('name', ['class' => 'form-control', 'id' => 'name', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='item_category_id' class='col-sm-2 control-label'>" . __('Item Category Id') . "</label>
                                        <div class='col-sm-6 item-categories-container'>";
                                         echo $this->Form->input('item_category_id', ['class' => 'form-control', 'id' => 'item_category_id', 'label' => false, 'options' => $itemCategories]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='quantity' class='col-sm-2 control-label'>" . __('Quantity on Hand') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('quantity', ['class' => 'form-control', 'id' => 'quantity', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='reordering_point' class='col-sm-2 control-label'>" . __('Reordering Point') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('reordering_point', ['class' => 'form-control', 'id' => 'reordering_point', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='reordering_point_category' class='col-sm-2 control-label'>" . __('Reordering Point Category') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('reordering_point_category', ['class' => 'form-control', 'id' => 'reordering_point_category', 'label' => false, 'options' => $reorder_category]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='reordering_amount' class='col-sm-2 control-label'>" . __('Reordering Amount') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('reordering_amount', ['class' => 'form-control', 'id' => 'reordering_amount', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='reordering_amount_category' class='col-sm-2 control-label'>" . __('Reordering Amount Category') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('reordering_amount_category', ['class' => 'form-control', 'id' => 'reordering_amount_category', 'label' => false, 'options' => $reorder_category]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vendor_id' class='col-sm-2 control-label'>" . __('Preferred Vendor') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vendor_id', ['class' => 'form-control', 'id' => 'vendor_id', 'label' => false, 'options' => $vendors]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='expiration_date' class='col-sm-2 control-label'>" . __('Expiration Date') . "</label>
                                        <div class='col-sm-6' style='margin-top:5px;'> 
                                            <input type='checkbox' name='has_expiration' value='1' class='chkbx-expiration-date' >
                                        ";               
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='part_800' class='col-sm-2 control-label'>" . __('Legally Required') . "</label>
                                        <div class='col-sm-6' style='margin-top:5px;'> 
                                            <input type='checkbox' name='is_part_800' value='1' class='chkbx-part-800' >
                                            &nbsp; &nbsp; &nbsp;<input type='number' min='0' name='part_800' id='part_800' disabled='disabled' class='' value='0' >
                                        ";                   
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='front_stockroom' class='col-sm-2 control-label'>" . __('Front Stockroom') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('front_stockroom', ['class' => 'form-control', 'id' => 'front_stockroom', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='back_stockroom' class='col-sm-2 control-label'>" . __('Back Stockroom') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('back_stockroom', ['class' => 'form-control', 'id' => 'back_stockroom', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='rig' class='col-sm-2 control-label'>" . __('Rig') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('rig', ['class' => 'form-control', 'id' => 'rig', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='easv' class='col-sm-2 control-label'>" . __('Easv') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('easv', ['class' => 'form-control', 'id' => 'easv', 'label' => false]);                
                                    echo " </div></div>";  
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='note' class='col-sm-2 control-label'>" . __('Note') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('note', ['class' => 'form-control', 'id' => 'note', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                ?>
                    </fieldset>
                    <div class="form-group" style="margin-top: 80px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="action-fixed-bottom">
                                <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
                                <?= $this->Form->button('<i class="fa fa-edit"></i> ' . __('Save and Continue adding'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-info', 'escape' => false]) ?>
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