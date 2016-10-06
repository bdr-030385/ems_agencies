<script>var base_url = '<?= $base_url; ?>';</script>
<table id="dt-item-list" class="table table-condensed">
    <thead>
        <tr style="display:none;">
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $i) { ?>
            <tr>
                <td><div data-item-id="<?= $i->id; ?>" class="draggable-item external-event bg-gray"><?= $i->name; ?></div></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
$(function(){
    $('#dt-item-list').dataTable({
        "iDisplayLength":100,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
    });

    $('.draggable-item').draggable({
      zIndex: 1070,
      revert: true, // will cause the event to go back to its
      revertDuration: 0  //  original position after the drag
    });
});
</script>