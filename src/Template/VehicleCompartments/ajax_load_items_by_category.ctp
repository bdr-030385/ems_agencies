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
                <td><div class="external-event bg-gray"><?= $i->name; ?></div></td>
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
});
</script>