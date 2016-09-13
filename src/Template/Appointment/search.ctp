<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script>
<style>
.appointment-right-widget{
    border:1px #B9BEBE solid;
    min-height: 753px;
    padding: 0px;
}
</style>
<div id="main-app-title">
    <div class="app-page-title">
        <div class="row">
            <div class="col-sm-6 left-options">
                <h1 class="app-title"><i class="fa fa-users icon"></i><a href="#"><?= __("Appointments List") ?></a></h1>
            </div>
            <div class="col-sm-6 right-options">
                <div class="text-right">                    
                    <?= $this->Form->create(null,[
                                'type' => 'get',                                
                                'action' => 'appointment_search',
                                'class' => 'form-inline search-form'
                            ]
                        ) 
                    ?>
                      <div class="form-group">
                        <input type="text" class="form-control" name="str_query" id="" placeholder="Search">
                      </div>
                      <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    <?= $this->Form->end() ?>     
                    <a href="javascript:void(0);" class="btn btn-lg btn-primary btn-add btn-add-appointment"><i class="fa fa-plus"></i></a>                    
                </div>
            </div>            
        </div>
    </div>
</div>
<div id="app-main-content">
    <?php echo $this->Form->hidden('selected_appointment_date',['id' => 'selected_appointment_date', 'value' => date("Y-m-d")]); ?>
    <div id="app-main-content">
        <div class="col-sm-8">
            <div id='loading'>loading...</div>
            <div id='calendar'></div>
        </div>
        <div class="col-sm-4 appointment-right-widget">
            <h2 style="background-color:#54DAF2;color:#ffffff;padding:10px;text-align:center;margin-top:0px;">
                Appointment                                 
            </h2>            
            <div class="clearfix"></div>
            <div class="appointment-list"></div>
        </div>
    </div>      
</div>