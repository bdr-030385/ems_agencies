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
                <td><div data-compartment-id="<?= $vsc->id; ?>" class="droppable"><?= $vsc->name; ?></div></td>
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
                    target.append(ui.draggable.clone().css("position","").css('cursor',"inherit"));
                }
            },"json");
            
        }
    });

});
</script>