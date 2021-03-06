<script>var base_url = '<?= $base_url; ?>';</script>
<table id="dt-vehicle-subcompartment-list" class="table table-condensed">
    <thead>
        <tr style="display:none;">
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php $level = 1;foreach($vehicle_sub_compartment as $vsc) { ?>
            <?php 
                if( $level == 1 ){
                    $drop_class = "main-droppable";
                }else{
                    $drop_class = "droppable";
                }
            ?>
            <tr>
                <td>
                    <div data-compartment-id="<?= $vsc->id; ?>" class="<?php echo $drop_class; ?>" style="border:1px solid #ccc;">
                        <div style="background:#ccc none repeat scroll 0 0; padding:10px;"><?= $vsc->name; ?></div>
                        <?php if(!empty($compartment_items[$vsc->id])) { ?>
                            <?php foreach($compartment_items[$vsc->id] as $item_id => $value) { ?>
                                <div id="d-<?= $value['id']; ?>" data-item-id="<?= $item_id; ?>" class="external-event-2" ><?= $value['name']; ?> <span class="pull-right"><a class="btn btn-xs btn-primary btn-delete-compartment-item" data-item-id="<?= $value['id']; ?>" data-div-obj-id="d-<?= $value['id']; ?>" href="javascript:void(0);"><i class="fa fa-trash"></i></a></span></div>
                            <?php } ?>
                        <?php } ?>

                        <!-- CHILD SUBCOMPARTMENTS -->
                        <?php loadChildSubCompartmentsHtml($vsc->id,$child_subcompartments,$compartment_items, 1); ?>
                        
                    </div>
                </td>
            </tr>
        <?php $level++;} ?>
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
                echo $this->Form->button(__('Yes'),['name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger btn-delete-action', 'escape' => false]);
                echo $this->Form->end();
            ?>                                                                                
        </div>
      </div>
    </div>                              
</div>

<script>
var is_dragged = false;
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
        $(".btn-delete-action").attr("data-obj-id",$(this).attr("data-div-obj-id"));
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
                    /*var vehicle_compartment_id = o.vehicle_compartment_id;          
                    $.post(base_url+'vehicle_compartments/ajax_load_main_compartment',{vehicle_compartment_id:vehicle_compartment_id},function(o){
                      $('#main-compartment-container').html(o);
                    });*/
                    //var oid = $(".btn-delete-action").attr("data-obj-id");
                    var oid = o.cid;
                    $("#d-"+oid).hide(500);
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
            is_dragged = true;
            //save item 
            $.post(base_url+'vehicle_compartments/ajax_add_item_compartment',{compartment_id:compartment_id,item_id:item_id},function(o){
                if(o.is_success) {
                    target.append(ui.draggable.clone()
                        .css("position","")
                        .css('cursor',"inherit")
                        .removeClass('bg-gray')
                        .attr('id', "d-" + o.compartment_item_id)
                        .removeClass('external-event')
                        .addClass('external-event-2')
                        .append('<span class="pull-right"><a class="btn btn-xs btn-primary btn-delete-compartment-item" data-item-id="'+o.compartment_item_id+'" href="javascript:void(0);"><i class="fa fa-trash"></i></a></span>'));

                    $(".btn-delete-compartment-item").click(function(){
                        var vehicle_compartment_item_id = $(this).attr("data-item-id");
                        $("#vehile_compartment_item_id").val(vehicle_compartment_item_id);
                        $(".btn-delete-action").attr("data-obj-id",$(this).attr("data-div-obj-id"));
                        $('#modal-delete-compartment-item').modal('show');
                    });
                }
            },"json");
            
        }
    });

    $( ".main-droppable" ).droppable({
        drop: function( event, ui ) {
            var target = $(this);
            var item_id = ui.draggable.attr("data-item-id");
            var compartment_id = target.attr("data-compartment-id");          
            if( !is_dragged ){
                //save item 
                $.post(base_url+'vehicle_compartments/ajax_add_item_compartment',{compartment_id:compartment_id,item_id:item_id},function(o){
                    if(o.is_success) {
                        target.append(ui.draggable.clone()
                            .css("position","")
                            .css('cursor',"inherit")
                            .attr('id', "d-" + o.compartment_item_id)
                            .removeClass('bg-gray')
                            .removeClass('external-event')
                            .addClass('external-event-2')
                            .append('<span class="pull-right"><a class="btn btn-xs btn-primary btn-delete-compartment-item" data-item-id="'+o.compartment_item_id+'" href="javascript:void(0);"><i class="fa fa-trash"></i></a></span>'));

                        $(".btn-delete-compartment-item").click(function(){
                            var vehicle_compartment_item_id = $(this).attr("data-item-id");
                            $("#vehile_compartment_item_id").val(vehicle_compartment_item_id);
                            $(".btn-delete-action").attr("data-obj-id",$(this).attr("data-div-obj-id"));
                            $('#modal-delete-compartment-item').modal('show');
                        });
                    }
                },"json");
            }else{
                is_dragged = false;
            }
            
        }
    });

});
</script>