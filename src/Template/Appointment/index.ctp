<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script>
<section class="content-header">
    <h1>
        <?= __("Calendar of Appointment") ?>
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar of Appointment</li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-5 ">
            <div class="box " style="min-height: 343px;">
                <div class="box-header">
                    <i class="fa fa-calendar text-black" ></i>

                    <h3 class="box-title text-black" >Calendar</h3>
                </div>
            <div class="box-body no-padding">
              <div id="calendar" style="width: 100%"></div>
            </div>
          </div>
        </section>

        <section class="col-lg-7 ">
          <div class="box" style="min-height: 343px;">
            <div class="box-header">
                <i class="fa fa-list-alt text-black" ></i>
                <h3 class="box-title text-black">List of Appointment</h3>

                <div style="display: inline-flex; margin-left: 5px;">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addAppointmentModal  " title="Add Appointment" ><i class="fa fa-plus"></i> Add Appointment</button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body ">       
                <div class="appointment-list" style="overflow-y: auto;"></div>
            </div>
        </div>

        </section>
    </div>
</section>
<?php echo $this->Form->hidden('selected_appointment_date',['id' => 'selected_appointment_date', 'value' => date("Y-m-d")]); ?>

<!-- MODAL FORMS -->
<?php include("add.ctp"); ?>
