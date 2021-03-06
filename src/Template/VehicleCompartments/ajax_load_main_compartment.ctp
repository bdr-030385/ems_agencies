<script>var base_url = '<?= $base_url; ?>';</script>
<input type="hidden" id="main_compartment_id" value="<?= $vehicle_compartment->id; ?>" >
<input type="hidden" id="agency_id" value="<?= $agency_id; ?>" >
<div class="box-body">
    <div class="box box-primary">
        <div class="box-header">
            <i class="fa fa-archive"></i>

            <h3 class="box-title"><?= $vehicle_compartment->name; ?> <small><?= $vehicle_compartment->description; ?> </small></h3>

            <div class="box-tools pull-right">
                <!-- <ul class="pagination pagination-sm inline">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul> -->
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="callout callout-default">
                <form id="frm-copy-compartment" onsubmit="return false;" method="post">
                    <input type="hidden" name="main_compartment_id" value="<?= $vehicle_compartment->id; ?>" >
                    <input type="hidden" name="vehicle_id" value="<?= $vehicle_compartment->vehicle_id; ?>" >
                    <select id="copyable-vehice-selector" class="form-control" style="width:20%; display:inline-flex">
                        <option value="">- Select Vehicle -</option>
                        <?php foreach($copyable_vehicles as $cv) { ?>
                            <option value="<?= $cv->id ?>"><?= $cv->number_vehicle ?></option>
                        <?php } ?>
                    </select>
                    <div id="copyable-vehicle-container" style="width:30%; display:inline-flex">
                        <select id="selected_compartment" name="selected_compartment" class="form-control" style="width:100%; display:inline-flex">
                            <option value="">- Select Compartment -</option>
                        </select>
                    </div>
                    <button type="button" class="btn" href="#modal-copy-compartment" data-toggle="modal" style="display:inline-flex; margin-bottom:5px">Copy Existing Compartment</button>
                    <div id="modal-copy-compartment" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Copy Compartment</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to copy the selected compartment?</p>
                            </div>
                            <div class="modal-footer">                                        
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary btn-copy-compartment" >Yes</button>                                                                   
                            </div>
                          </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select id="item_category" class="form-control" style="width:20%; display:block">
                            <option value="all">All</option>
                            <?php foreach($item_categories as $ic) { ?>
                                <option value="<?= $ic->id;?>"><?= $ic->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Item List</h3>
                        </div>
                        <div id="item-list-container" class="box-body no-padding"></div>
                    </div>
                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-5">
                    <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Selected Items</h3>
                          <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addSubCompartment" ><i class="fa fa-plus"></i> Add Sub Compartment</button>
                          </div>
                        </div>
                        <div id="vehicle-sub-compartment-container" class="box-body no-padding"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD SUB COMPARTMENT -->
<div class="modal fade" id="addSubCompartment" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Add Sub Compartment</h4>
            </div>
            <?= $this->Form->create(null,['onsubmit' => 'return false;', 'id' => 'frm-add-subcompartment', 'data-toggle' => 'validator', 'role' => 'form']) ?>
                <input type="hidden" value="<?= $vehicle_compartment->vehicle_id; ?>" name="vehicle_id">
                <input type="hidden" value="0" name="sort">
                <div class="modal-body">
                    <fieldset>        
                        <?php                                        
                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Sub Compartment Name");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('name',['class' => 'form-control', 'type' => 'text', 'id' => 'name', 'required' => 'required', 'label' => false]);    
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 

                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Allow Seal");
                                echo "</div>";
                                echo "<div class='col-sm-4'>";
                                    echo $this->Form->input('allow_seal',['options' => ["1" => "Yes", "0" => "No"], 'class' => 'form-control',  'id' => 'allow_seal', 'label' => false]);    
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>";

                            echo "<br><div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("New Compartment will be added in");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo "<select name='parent_id' class='form-control'>";
                                        echo "<option value=".$vehicle_compartment->id.">Main</option>";
                                    echo "</select>";    
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>";
                        
                        ?>
                    </fieldset>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-add-subcompartment">Add</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<!-- END MODAL -->

<script>
$(function(){

    function loadItemsByCategory(item_category_id,agency_id) {
        $('#item-list-container').html('<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading...</div>');
        $.post(base_url+'vehicle_compartments/ajax_load_items_by_category',{item_category_id:item_category_id,agency_id:agency_id},
            function(o){
                $('#item-list-container').html(o);
        });
    }
    
    $('#item_category').change(function(){
        var item_category_id = $(this).val();
        var agency_id = $("#agency_id").val();
        loadItemsByCategory(item_category_id,agency_id);
    });
    loadItemsByCategory($('#item_category').val(),$("#agency_id").val());

    function loadVehicleSubCompartments(compartment_parent_id) {
        $('#vehicle-sub-compartment-container').html('<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading...</div>');
        $.post(base_url+'vehicle_compartments/ajax_load_vehicle_sub_compartment',{compartment_parent_id:compartment_parent_id},
            function(o){
                $('#vehicle-sub-compartment-container').html(o);
        });
    }
    loadVehicleSubCompartments($('#main_compartment_id').val());

    $('#frm-add-subcompartment').submit(function(evt) {
        evt.preventDefault();

        $('.btn-add-subcompartment').html("<i class='fa fa-spin fa-spinner'></i> Saving...");
        if( $('.btn-add-subcompartment').hasClass("disabled") ) {
            $('.btn-add-subcompartment').html("Add");
        }else{
            $('.btn-add-subcompartment').attr("disabled","disabled");
            $.post(base_url + "vehicle_compartments/ajax_add_sub_compartment",$('#frm-add-subcompartment').serialize(),function(o) {
                if(o.is_success) {
                    loadTopVehicleCompartmentsList('<?= $vehicle_compartment->vehicle_id; ?>');
                    loadVehicleSubCompartments($('#main_compartment_id').val());
                }

                $('#addSubCompartment').modal('toggle');
                $('#msg-notifier-container').html(o.message);
                $('#messageNotifierModal').modal("show");

                $('.btn-add-subcompartment').removeAttr("disabled");
                $('.btn-add-subcompartment').html("Add");
            },"json");
        }
    });

    $('#copyable-vehice-selector').change(function(){
        var vehicle_id = $(this).val();
        $.post(base_url+'vehicle_compartments/ajax_load_copyable_vehicle_compartment',{vehicle_id:vehicle_id},
            function(o){
                $('#copyable-vehicle-container').html(o);
        });
    });

    $('#frm-copy-compartment').submit(function(evt) {
        evt.preventDefault();

        $('.btn-copy-compartment').html("<i class='fa fa-spin fa-spinner'></i> Saving...");
        if( $('.btn-copy-compartment').hasClass("disabled") ) {
            $('.btn-copy-compartment').html("Yes");
        }else{
            $('.btn-copy-compartment').attr("disabled","disabled");
            $.post(base_url + "vehicle_compartments/ajax_save_copied_compartment",$('#frm-copy-compartment').serialize(),function(o) {
                if(o.is_success) {
                    loadVehicleSubCompartments($('#main_compartment_id').val());
                }

                $('#modal-copy-compartment').modal('toggle');
                $('#msg-notifier-container').html(o.message);
                $('#messageNotifierModal').modal("show");

                $('.btn-copy-compartment').removeAttr("disabled");
                $('.btn-copy-compartment').html("Yes");
            },"json");
        }
    });

});
</script>