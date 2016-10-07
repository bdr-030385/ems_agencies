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
                                <div data-item-id="<?= $item_id; ?>" class="external-event-2" ><?= $value; ?></div>
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

<script>
$(function(){
    $('#dt-vehicle-subcompartment-list').dataTable({
        "iDisplayLength":100,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
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