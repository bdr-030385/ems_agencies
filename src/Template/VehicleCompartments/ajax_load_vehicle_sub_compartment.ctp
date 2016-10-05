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
                <td><div class="droppable"><?= $vsc->name; ?></div></td>
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
            alert('dropped');
        /*$( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );*/
        }
    });

});
</script>