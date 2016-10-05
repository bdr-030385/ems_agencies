<script>var base_url = '<?= $base_url; ?>';</script>
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
                <select class="form-control" style="width:20%; display:inline-flex">
                    <option value="">- Select Vehicle -</option>
                    <?php foreach($copyable_vehicles as $cv) { ?>
                        <option value="<?= $cv->id ?>"><?= $cv->number_vehicle ?></option>
                    <?php } ?>
                </select>
                <select class="form-control" style="width:20%; display:inline-flex">
                    <option value="">- Select Compartment -</option>
                </select>
                <button type="button" class="btn" style="display:inline-flex; margin-bottom:5px">Copy Existing Compartment</button>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select id="item_category" class="form-control" style="width:20%; display:block">
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
            </div>
        </div>
    </div>
</div>

<script>
$(function(){

    function loadItemsByCategory(item_category_id) {
        $('#item-list-container').html('<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading...</div>');
        $.post(base_url+'vehicle_compartments/ajax_load_items_by_category',{item_category_id:item_category_id},
            function(o){
                $('#item-list-container').html(o);
        });
    }
    
    $('#item_category').change(function(){
        var item_category_id = $(this).val();
        loadItemsByCategory(item_category_id);
    });
    loadItemsByCategory($('#item_category').val());

});
</script>