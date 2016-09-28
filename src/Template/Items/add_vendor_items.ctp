<div id="addVendorItemModal-<?=$item->id?>" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Add Vendor to Item</h4>
        </div>
        <?= $this->Form->create(null,['url' => '/items/add_vendor_item', 'id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form',]) ?>
        <input type="hidden" name="item_id" value="<?= $item->id; ?>" >
        <div class="modal-body">
            
            <fieldset>        
                <?php   
                            echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='item_name' class='col-sm-12 '>" . __('Item Name') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('dummy1', ['class' => 'form-control', 'id' => 'dummy1', 'value' => $item->name, 'readonly' => 'readonly', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>"; 

                            echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='item_name' class='col-sm-12 '>" . __('Vendor') . "</label>
                                <div  class='col-sm-12 vendor-list-container'>";
                                              
                            echo " </div></div>";

                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='item_name' class='col-sm-12 '>" . __('Item Name (vendor)') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('item_name', ['class' => 'form-control', 'id' => 'item_name', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='item_number' class='col-sm-12 '>" . __('Item Number') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('item_number', ['class' => 'form-control', 'id' => 'item_number', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='barcode_number' class='col-sm-12 '>" . __('Barcode Number') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('barcode_number', ['class' => 'form-control', 'id' => 'barcode_number', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='website_link' class='col-sm-12 '>" . __('Website Link') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('website_link', ['class' => 'form-control', 'id' => 'website_link', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='pack_price' class='col-sm-12 '>" . __('Pack Price') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('pack_price', ['class' => 'form-control', 'id' => 'pack_price', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='pack_price_uom' class='col-sm-12 '>" . __('Pack Price Uom') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('pack_price_uom', ['class' => 'form-control', 'id' => 'pack_price_uom', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='pack_quantity' class='col-sm-12 '>" . __('Pack Quantity') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('pack_quantity', ['class' => 'form-control', 'id' => 'pack_quantity', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='pack_quantity_uom' class='col-sm-12 '>" . __('Pack Quantity Uom') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('pack_quantity_uom', ['class' => 'form-control', 'id' => 'pack_quantity_uom', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='sub_pack_quantity' class='col-sm-12 '>" . __('Sub Pack Quantity') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('sub_pack_quantity', ['class' => 'form-control', 'id' => 'sub_pack_quantity', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='sub_pack_quantity_uom' class='col-sm-12 '>" . __('Sub Pack Quantity Uom') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('sub_pack_quantity_uom', ['class' => 'form-control', 'id' => 'sub_pack_quantity_uom', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='is_preferd_vendor' class='col-sm-12 '>" . __('Is Preferd Vendor') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('is_preferd_vendor', ['class' => 'form-control', 'id' => 'is_preferd_vendor', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                                    echo "
                            <div class='form-group' style='width:100%;'>
                                <label for='note' class='col-sm-12 '>" . __('Note') . "</label>
                                <div class='col-sm-12'>";
                                echo $this->Form->input('note', ['class' => 'form-control', 'id' => 'note', 'label' => false, 'style' => 'width:100%']);                
                            echo " </div></div>";    
                            
                                        ?>
            </fieldset>
            
        </div>
        
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
            <?= $this->Form->button('<i class="fa fa-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div> 
</div>    