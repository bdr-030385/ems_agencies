<style>
#ui-datepicker-div { z-index: 99999 !important; }
.ui-autocomplete {z-index: 99999 !important;}
</style>
<div class="modal fade" id="editAppointmentModal-<?= $appointment->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Appointment</h4>
      </div>
      <?= $this->Form->create(null,['action' => 'edit', 'id' => 'frm-edit', 'data-toggle' => 'validator', 'role' => 'form']) ?>
      <div class="modal-body">
        
            <input type="hidden" value="<?= $appointment->id; ?>" name="id">
            <fieldset>        
                <?php
                    echo "
                    <div class='row'>
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Appointment Date') . "
                        </div>
                        <div class='col-sm-6'>";
                        echo "<div class='input-group date'>";
                            echo "<div class='input-group-addon'>
                                <i class='fa fa-calendar'></i>
                              </div>";
                            echo $this->Form->input('dt_appointment_date', ['value' => $appointment->appointment_date->format("Y-m-d"), 'required' => 'required', 'class' => 'form-control dt-default', 'id' => 'dt_appointment_date', 'label' => false]); 
                        echo "</div>";
                        echo "<div class='help-block with-errors'></div>";           
                    echo " </div></div></div>";    

                    echo "
                    <div class='row'>
                    <div class='form-group '>
                        <div class='col-sm-12 form-label'>
                            " . __('Start Time') . "
                        </div>
                        <div class='col-sm-6 bootstrap-timepicker'>";
                            echo "<div class='input-group date'>";
                            echo "<div class='input-group-addon'>
                                    <i class='fa fa-clock-o'></i>
                                  </div>";
                                    echo $this->Form->input('start_time', ['value' => $appointment->start_time->format('h:i A'),'type' => 'text', 'required' => 'required', 'class' => 'form-control default-timepicker', 'id' => 'start_time', 'label' => false]); 
                            echo "</div>"; 
                        echo "<div class='help-block with-errors'></div>";                
                    echo " </div></div></div>";    

                    echo "
                    <div class='row'>
                    <div class='form-group '>
                        <div class='col-sm-12 form-label'>
                            " . __('End Time') . "
                        </div>
                        <div class='col-sm-6 bootstrap-timepicker'>";
                            echo "<div class='input-group date'>";
                            echo "<div class='input-group-addon'>
                                    <i class='fa fa-clock-o'></i>
                                  </div>";
                                    echo $this->Form->input('end_time', ['value' => $appointment->end_time->format('h:i A'),'type' => 'text', 'required' => 'required', 'class' => 'form-control default-timepicker', 'id' => 'end_time', 'label' => false]); 
                            echo "</div>"; 
                        echo "<div class='help-block with-errors'></div>";                
                    echo " </div></div></div>";  

                    echo "
                    <div class='row'>
                    <div class='form-group'>";
                        echo "<div class='col-sm-12 form-label'>";
                            echo __("Type");
                        echo "</div>";
                        echo "<div class='col-sm-6'>";
                            echo $this->Form->input('type', ['value' => $appointment->type, 'type' => 'select', 'options' => $type, 'class' => 'form-control', 'id' => 'type', 'label' => false]);                
                        echo "</div>";
                    echo " </div></div>";     
                    
                    echo "
                    <div class='row'>
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Note') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('note', ['value' => $appointment->note, 'class' => 'form-control', 'id' => 'note', 'label' => false]);                
                    echo " </div></div></div>";    
                ?>
            </fieldset>            
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>