<section class="content-header">
    <h1><?= __('Edit Vendor Item') ?></h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link("<i class='fa fa-dashboard'></i>" . __("Home"), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
        <li><?= $this->Html->link("<i class='fa fa fa-truck'></i>" . __('Vendor Items'), ['controller' => 'users', 'action' => 'dashboard'],['escape' => false]) ?></li>
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
                    <?= $this->Form->create($vendorItem,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
                    <fieldset>        
                        <?php
                                                            echo "
                                    <div class='form-group'>
                                        <label for='vendor_id' class='col-sm-2 control-label'>" . __('Vendor Name') . "</label>
                                        <div class='col-sm-6'>";
                                         echo $this->Form->input('vendor_id', ['class' => 'form-control', 'id' => 'vendor_id', 'label' => false, 'options' => $vendors]);                 
                                    echo " </div></div>";    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='item_id' class='col-sm-2 control-label'>" . __('Item Name') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('item_id', ['class' => 'form-control', 'id' => 'item_id', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='item_name' class='col-sm-2 control-label'>" . __('Vendor Item Name') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('item_name', ['class' => 'form-control', 'id' => 'item_name', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='item_number' class='col-sm-2 control-label'>" . __('Item Number') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('item_number', ['type' => 'text', 'class' => 'form-control', 'id' => 'item_number', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='barcode_number' class='col-sm-2 control-label'>" . __('Barcode Number') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('barcode_number', ['type' => 'text', 'class' => 'form-control', 'id' => 'barcode_number', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='website_link' class='col-sm-2 control-label'>" . __('Website Link') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('website_link', ['type' => 'text', 'class' => 'form-control', 'id' => 'website_link', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='pack_price' class='col-sm-2 control-label'>" . __('Pack Price') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('pack_price', ['class' => 'form-control', 'id' => 'pack_price', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='pack_price_uom' class='col-sm-2 control-label'>" . __('Pack Price Uom') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('pack_price_uom', ['class' => 'form-control', 'options' => $optionsUom, 'id' => 'pack_price_uom', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='pack_quantity' class='col-sm-2 control-label'>" . __('Pack Quantity') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('pack_quantity', ['class' => 'form-control', 'id' => 'pack_quantity', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='pack_quantity_uom' class='col-sm-2 control-label'>" . __('Pack Quantity Uom') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('pack_quantity_uom', ['class' => 'form-control', 'options' => $optionsUom, 'id' => 'pack_quantity_uom', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='sub_pack_quantity' class='col-sm-2 control-label'>" . __('Sub Pack Quantity') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('sub_pack_quantity', ['class' => 'form-control', 'id' => 'sub_pack_quantity', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='sub_pack_quantity_uom' class='col-sm-2 control-label'>" . __('Sub Pack Quantity Uom') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->input('sub_pack_quantity_uom', ['class' => 'form-control', 'options' => $optionsUom, 'id' => 'sub_pack_quantity_uom', 'label' => false]);                
                                    echo " </div></div>";    
                                    
                                                            echo "
                                    <div class='form-group'>
                                        <label for='is_preferd_vendor' class='col-sm-2 control-label'>" . __('Is Preferd Vendor') . "</label>
                                        <div class='col-sm-6'>";
                                        echo $this->Form->select('is_preferd_vendor',["1" => "Yes", "0" => "No"],['class' => 'form-control', 'id' => 'is_preferd_vendor', 'label' => false]);
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