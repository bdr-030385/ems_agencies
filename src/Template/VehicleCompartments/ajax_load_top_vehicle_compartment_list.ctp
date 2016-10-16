<script>var base_url = '<?= $base_url; ?>';</script>
<ul class="sidebar-menu" style="margin:10px;">                                    
    <?= recursiveVehicleCompartments($vehicleCompartments) ?>                                
</ul>
<div id="modal-delete-compartment" class="modal fade">
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
                echo $this->Form->create(null,['url' => ['action' => 'delete_compartment']],['id' => 'frm-delete-vehicle-compartment']);
                echo $this->Form->hidden('vehile_compartment_id',['id' => 'vehile_compartment_id', 'value' => ""]);
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
    $(".compartment-add-items").click(function(){
        var vehicle_compartment_id = $(this).attr("data-vehicle-compartment-id");
        $('#main-compartment-container').html("<div class='text-center' style='padding:20px'><i class='fa fa-spin fa-spinner'></i> Loading...</div>");
        $.post(base_url+'vehicle_compartments/ajax_load_main_compartment',{vehicle_compartment_id:vehicle_compartment_id},function(o){
          $('#main-compartment-container').html(o);
        });
    });

    $(".compartment-edit").click(function(){
        var vehicle_compartment_id = $(this).attr("data-vehicle-compartment-id");
        window.location = base_url + 'vehicle_compartments/edit/' + vehicle_compartment_id;
    });

    $(".compartment-delete").click(function(){
        var vehicle_compartment_id = $(this).attr("data-vehicle-compartment-id");
        $("#vehile_compartment_id").val(vehicle_compartment_id);
        $('#modal-delete-compartment').modal('show');
    });

    $(".compartment-tree-item").click(function(){
        console.log($(this).find('i.c-icon'));
        if($(this).attr("data-is-collapsed") == 'false') {
            $(this).attr("data-is-collapsed",'true');
            $(this).find('i.c-icon').removeClass('fa-plus-circle');
            $(this).find('i.c-icon').addClass('fa-minus-circle');
        }else{
            $(this).attr("data-is-collapsed",'false');
            $(this).find('i.c-icon').removeClass('fa-minus-circle');
            $(this).find('i.c-icon').addClass('fa-plus-circle');
        }
    });
});
</script>