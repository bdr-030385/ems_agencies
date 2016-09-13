
<?php if( $appointments->count() > 0 ){ ?>
    <table id="dt-appointment-list" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Time</th>
                <th>Date</th>
                <th>Patient</th>
                <th>Remarks</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $appointments as $appointment ){ ?>
                <tr>
                    <td><?php echo $appointment->start_time->format('h:i A') . ' - ' . $appointment->end_time->format('h:i A') ; ?></td>
                    <td><?php echo $appointment->appointment_date->format('F d, Y'); ?></td>
                    <td><?= $this->Html->link($appointment->patient->firstname . ' ' . $appointment->patient->lastname, ['controller' => get_customer_directory().'/patient', 'action' => 'profile', $appointment->patient->id],['escape' => false]) ?> (<?= $appointment->type; ?>)</td>
                    <td><?php echo $appointment->note; ?></td>
                    <td >  
                        <?php include("edit.ctp"); ?>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#editAppointmentModal-<?= $appointment->id; ?>" title="Edit Appointment" ><i class="fa fa-pencil"></i></a> &nbsp;
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteAppointmentModal-<?= $appointment->id; ?>" title="Delete Appointment" ><i class="fa fa-trash"></i></a>

                        <div class="modal fade" id="deleteAppointmentModal-<?= $appointment->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Delete Appointment</h4>
                                  </div>

                                  <div class="modal-body">
                                    <p>Are you sure you want to delete selected entry?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <?= $this->Form->postLink(
                                            'Yes',
                                            ['action' => 'delete', $appointment->id],
                                            ['class' => 'btn btn-danger', 'escape' => false]
                                        )
                                    ?>                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    
                </tr>

            <?php } ?>
        </tbody>
    </table>

<?php }else{ ?>
    <div class="text-center">You have no appointment on selected date (<span class="date-desc"></span>)</div>
<?php } ?>

<script>
$(function(){    
    $("#dt-appointment-list").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": true,
        "fnDrawCallback": function( oSettings ) {
          $('#dt-appointment-list_wrapper').removeClass("form-inline");
            <?php if($hdr_user_data['status'] == LICENSE_ARCHIVED) { ?>
                $("#dt-appointment-list th:last-child, #dt-appointment-list td:last-child").remove();
            <?php } ?>
        }
    });

    $(".dt-default").datepicker({
        inline: true,
        dateFormat: 'yy-mm-dd',

        //minDate:0,       
        beforeShow: function(input, inst)
        {
            inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth + 'px'});
        }
      }); 

      $(".default-timepicker").timepicker({
          showInputs: false
      });


})
</script>
