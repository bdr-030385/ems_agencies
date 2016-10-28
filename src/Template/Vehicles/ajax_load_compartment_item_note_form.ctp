<form id="frm-add-item-note" method="post" data-toggle="validator" role="form" onsubmit="return false" >
    <input type="hidden" name="item_id" value="<?= $item->id; ?>" >
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
                    <option>- Select Status -</option>
                    <option><?= NOT_STARTED; ?></option>
                    <option><?= GOOD; ?></option>
                    <option><?= MISSING; ?></option>
                </select>
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'>Recorded Dates:</div>
            <div class='col-sm-12'>
            
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12 form-label'>&nbsp;</div>
            <div class='col-sm-12'>
                <button class="btn btn-primary btn-sm" type="button">Add Expiration Date</button>
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
});
</script>