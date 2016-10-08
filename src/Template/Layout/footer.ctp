    </div><!-- #wrapper -->

    <div class="modal fade" id="messageNotifierModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="messageModalLabel">Notice</h4>
              </div>

              <div class="modal-body">
                <p id="msg-notifier-container"></p>
              </div>
              <div class="modal-footer">                                 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> <!-- <?= CURRENT_VERSION; ?> -->
    </div>
    <strong>Copyright &copy; 2016 <a href="#">EMS</a>.</strong> All rights
    reserved.
  </footer>

<?php   
  echo $this->Html->script('plugins/jQuery/jquery-2.2.3.min.js');
  echo $this->Html->script('app/jquery.min.js'); 
?>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<?php 
  echo $this->Html->script('bootstrap/js/bootstrap.min.js');
  echo $this->Html->script('app/raphael.min.js'); 
  echo $this->Html->script('plugins/morris/morris.min.js');
  echo $this->Html->script('plugins/sparkline/jquery.sparkline.min.js');
  echo $this->Html->script('plugins/datepicker/bootstrap-datepicker.js');

  echo $this->Html->script('plugins/slimScroll/jquery.slimscroll.min.js');
  echo $this->Html->script('plugins/fastclick/fastclick.js');
  echo $this->Html->script('dist/js/app.min.js');
  echo $this->Html->script('dist/js/demo.js');
  echo $this->Html->script('plugins/datatables/jquery.dataTables.min.js');
  echo $this->Html->script('plugins/datatables/dataTables.bootstrap.min.js');
  echo $this->Html->script('plugins/input-mask/jquery.inputmask.js');
  echo $this->Html->script('plugins/input-mask/jquery.inputmask.date.extensions.js');
  echo $this->Html->script('plugins/input-mask/jquery.inputmask.extensions.js');
  echo $this->Html->script('plugins/iCheck/icheck.min.js');
  echo $this->Html->script('app/star-rating.js'); 

  if(!empty($load_css_script)) {
    if( $load_css_script == "users" ){
      echo $this->Html->script('app/users.js');  
    }elseif( $load_css_script == "groups" ){
      echo $this->Html->script('app/groups.js');  
    }elseif( $load_css_script == "items" ){
      echo $this->Html->script('app/items.js');  
    }
  }
  
  echo $this->Html->script('validator.min.js');   
?>

<script type="text/javascript">  
var base_url = "<?= $base_url; ?>";
$(function(){

  $('.global-datatable').DataTable({"responsive" : true});

  //Date picker       
  $('.default-datepicker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
  });


  $('.has-ck-finder').click(function(){
    openKCFinder_textbox($(this));
  });

  $(".compartment-add-items").click(function(){
    var vehicle_compartment_id = $(this).attr("data-vehicle-compartment-id");
    $('#main-compartment-container').html("<div class='text-center' style='padding:20px'><i class='fa fa-spin fa-spinner'></i> Loading...</div>");
    $.post(base_url+'vehicle_compartments/ajax_load_main_compartment',{vehicle_compartment_id:vehicle_compartment_id},function(o){
      $('#main-compartment-container').html(o);
    });
  });

  $("#is_part_800").change(function(){
    var selected = $(this).val();    
    if( selected == 1 ){
      $(".part-800-group").removeClass("hidden");      
    }else{
      $(".part-800-group").addClass("hidden");      
    }
  });

  //Sidebar widget settings
  $("#side-widget-push-notification").click(function(){
    if( $(this).is(':checked') ){
      var enable_push_notification = 1;
    }else{
      var enable_push_notification = 0;
    }
      $.ajax({
             type: "POST",                  
             url: base_url + 'user_settings/ajax_update_member_push_notification',      
             data: {enable_push_notification:enable_push_notification},    
             dataType: "JSON",                                         
             success: function(o)
             {
                                                          
             }
      });
  });

  $(".todo-list").sortable({
    placeholder: "sort-highlight",
    handle: ".handle",
    forcePlaceholderSize: true,
    zIndex: 999999
  });

  $(".btn-show-main-compartment").click(function(){
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

});


/*CKEDITOR.replace( 'ckeditor', {
      width: '600'
    });*/

function openKCFinder_textbox(field) {    

  window.KCFinder = {
      callBack: function(url) {
        var filename= url.split('/').pop()
        var clean_filename = filename.replace(new RegExp("%20", 'g')," ");

        var extension = clean_filename.split('.').pop().toUpperCase();
        /*if (extension == "PNG" || extension == "JPG" || extension == "JPEG" || extension == "BMP"){
          $(".img-attachment").attr("src",url);
        }else{
          $(".img-attachment").attr("src",DEFAULT_IMG);
        }*/

        $("#logo").val(clean_filename);            
        field.val(url);
      }
  };
  window.open(base_url+'js/kcfinder/browse.php?dir=files', 'kcfinder_textbox',
      'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
      'resizable=1, scrollbars=0, width=800, height=600'
  );
}

</script>

</body>
</html>