<script>var base_url = '<?= $base_url; ?>';</script>
<table id="dt-vehicle-subcompartment-list" class="table table-condensed">
    <thead>
        <tr style="display:none;">
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($vehicle_sub_compartment as $vsc) { ?>
            <tr>
                <td>
                    <div data-compartment-id="<?= $vsc->id; ?>" class="droppable" style="border:1px solid #ccc;">
                        <div style="background:#ccc none repeat scroll 0 0; padding:10px;"><?= $vsc->name; ?></div>
                        <?php if(!empty($compartment_items[$vsc->id])) { ?>
                            <?php foreach($compartment_items[$vsc->id] as $item_id => $value) { ?>
                                <div data-item-id="<?= $item_id; ?>" class="external-event-2" ><?= $value['name']; ?> <span class="pull-right"><a class="btn btn-xs btn-primary btn-delete-compartment-item" data-item-id="<?= $value['id']; ?>" href="javascript:void(0);"><i class="fa fa-trash"></i></a></span></div>
                            <?php } ?>
                        <?php } ?>

                        <!-- CHILD SUBCOMPARTMENTS -->
                        <?php loadChildSubCompartmentsHtml($vsc->id,$child_subcompartments,$compartment_items, 1); ?>
                        
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div id="modal-delete-compartment-item" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Delete Confirmation</h4>
        </div>
        <div class="modal-body">
            <p><?= __('Are you sure you want to delete selected entry?') ?></p>
        </div>
        <div class="modal-footer">                                        
             <?php 
                echo $this->Form->create(null,['id' => 'frm-delete-vehicle-compartment-item']);
                echo $this->Form->hidden('vehile_compartment_item_id',['id' => 'vehile_compartment_item_id', 'value' => ""]);
                echo $this->Form->button(__('No'),['name' => 'cancel', 'value' => 'cancel', 'class' => 'btn btn-default', 'data-dismiss' => 'modal', 'escape' => false]);
                echo $this->Form->button(__('Yes'),['name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'escape' => false]);
                echo $this->Form->end();
            ?>                                                                                
        </div>
      </div>
    </div>                              
</div>

<script>
$(function(){
    $('#dt-vehicle-subcompartment-list').dataTable({
        "iDisplayLength":100,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
    });

    $(".btn-delete-compartment-item").click(function(){
        var vehicle_compartment_item_id = $(this).attr("data-item-id");
        $("#vehile_compartment_item_id").val(vehicle_compartment_item_id);
        $('#modal-delete-compartment-item').modal('show');
    });

    $("#frm-delete-vehicle-compartment-item").submit(function(e){
        var url = base_url + "vehicle_compartments/ajax_delete_compartment_id";
        $.ajax({
            type: "POST",
            dataType: "json",
            url: url,               
            data: $(this).serialize(), 
            beforeSend: function() {            
                         
            },
            success: function(o)
             {
                if( o.is_success ){
                    var vehicle_compartment_id = o.vehicle_compartment_id;          
                    $.post(base_url+'vehicle_compartments/ajax_load_main_compartment',{vehicle_compartment_id:vehicle_compartment_id},function(o){
                      $('#main-compartment-container').html(o);
                    });
                }    

                $('#modal-delete-compartment-item').modal('hide');        
            }
        }); 
        e.preventDefault();
    });

    $( ".droppable" ).droppable({
        drop: function( event, ui ) {
            var target = $(this);
            var item_id = ui.draggable.attr("data-item-id");
            var compartment_id = target.attr("data-compartment-id");          

            //save item 
            $.post(base_url+'vehicle_compartments/ajax_add_item_compartment',{compartment_id:compartment_id,item_id:item_id},function(o){
                if(o.is_success) {
                    target.append(ui.draggable.clone()
                        .css("position","")
                        .css('cursor',"inherit")
                        .removeClass('bg-gray')
                        .removeClass('external-event')
                        .addClass('external-event-2'));
                }
            },"json");
            
        }
    });

});
</script>