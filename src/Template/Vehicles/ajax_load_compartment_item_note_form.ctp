<script>var base_url = '<?= $base_url; ?>';</script>
<form id="frm-add-item-note" method="post" data-toggle="validator" role="form" onsubmit="return false" >
    <input type="hidden" id="item_id" name="item_id" value="<?= $item->id; ?>" >
    <input type="hidden" id="checked_item_id" name="checked_item_id" value="<?= $checked_item->id; ?>" >
    <fieldset>  
        <div class='form-group'>
            <div class='col-sm-12 form-label'>&nbsp;</div>
            <div class='col-sm-6'>
                <input type="number" name="quantity" required="required" class="form-control" step="any" min="0" value="<?= $item->quantity; ?>">
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'>&nbsp;</div>
            <div class='col-sm-6'>
                <select class="form-control" name="status" required="required">
                    <option <?= ($item_status == NOT_STARTED ? "selected='selected'" : "") ?> value="><?= NOT_STARTED; ?>" ><?= NOT_STARTED; ?></option>
                    <option <?= ($item_status == GOOD ? "selected='selected'" : "") ?> value="<?= GOOD; ?>" ><?= GOOD; ?></option>
                    <option <?= ($item_status == MISSING ? "selected='selected'" : "") ?> value="<?= MISSING; ?>" ><?= MISSING; ?></option>
                </select>
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'><br>Recorded Dates:</div>
            <div class='col-sm-12'>
                <ul id="expiration-dates-list">
                    <?php foreach($item_expirations as $ie) { ?>
                        <li><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-minus"></i></a> <?= date("Y-m-d", strtotime($ie->expiration_date)); ?></li>
                    <?php } ?>
                </ul>
                <ul>
                    <li class="exp-date-container" style="display:none;">
                        <i class="fa fa-calendar"></i> 
                        &nbsp;<input type="text" id="inp-expiration-date" class="form-control default-datepicker" style="width:20%; margin-top:5px; display:inline" placeholder="Select Date">
                        <a href="#" class="btn btn-primary btn-save-item-expiration-date" style="margin-bottom:5px;"><i class="fa fa-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'>&nbsp;</div>
            <div class='col-sm-12'>
                <button class="btn btn-primary btn-sm btn-add-expiration-item" type="button">Add Expiration Date</button>
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'>&nbsp;</div>
            <div class='col-sm-6'>
                <textarea class="form-control" id="note" name="note" required="required" placeholder="Note" ><?= $item->note; ?></textarea>
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'>&nbsp;</div>
            <div class='col-sm-12'>
                <button class="btn btn-primary btn-sm btn-save-item-note" type="submit">Save</button> &nbsp;
                <button class="btn btn-default btn-sm" type="button">Close</button>
            </div>
        </div>
    </fieldset>
</form>

<script>
$(function(){
    $('.default-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });

    $('#frm-add-item-note').submit(function(evt) {
        evt.preventDefault();

        $('.btn-save-item-note').html("<i class='fa fa-spin fa-spinner'></i> Saving...");
        if( $('.btn-save-item-note').hasClass("disabled") ) {
            $('.btn-save-item-note').html("Save");
        }else{
            $('.btn-save-item-note').attr("disabled","disabled");
            $.post(base_url + "vehicles/ajax_update_compartment_status_note",$('#frm-add-item-note').serialize(),function(o) {
                if(o.is_success) {
                    //loadVehicleSubCompartments($('#main_compartment_id').val());
                }

                location.reload();

                /*$('#modal-copy-compartment').modal('toggle');
                $('#msg-notifier-container').html(o.message);
                $('#messageNotifierModal').modal("show");

                $('.btn-save-item-note').removeAttr("disabled");
                $('.btn-save-item-note').html("Save");*/
            },"json");
        }
    });

    $('.btn-add-expiration-item').click(function(){
        $('.exp-date-container').toggle();
    });

    $('.btn-save-item-expiration-date').click(function(){
        var expiration_date = $('#inp-expiration-date').val();
        var item_id = $('#item_id').val();

        if(expiration_date != '') {
            $.post(base_url + 'vehicles/save_item_expiration_date',{item_id:item_id,expiration_date:expiration_date},function(o){
                if(o.is_success) {
                    $('ul#expiration-dates-list').append('<li><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-minus"></i></a> '+o.expiration_date+'</li>');
                }
            },"json");
        }
    });
});
</script>