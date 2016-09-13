<style>
#ui-datepicker-div { z-index: 99999 !important; }
.ui-autocomplete {z-index: 99999 !important;}
</style>
<div class="modal fade" id="addAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add Appointment</h4>
      </div>
      <div class="modal-body">
        <?= $this->Form->create(null,['url' => 'add', 'id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form']) ?>
            <fieldset>        
                <?php
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Appointment Date') . "
                        </div>
                        <div class='col-sm-6'>";
                        echo "<div class='input-group date'>";
                            echo "<div class='input-group-addon'>
                                <i class='fa fa-calendar'></i>
                              </div>";
                            echo $this->Form->input('dt_appointment_date', ['value' => $selected_date, 'required' => 'required', 'class' => 'form-control dt-default', 'id' => 'dt_appointment_date', 'label' => false]); 
                        echo "</div>";
                        echo "<div class='help-block with-errors'></div>";           
                    echo " </div></div>";    

                    echo "
                    <div class='form-group '>
                        <div class='col-sm-12 form-label'>
                            " . __('Start Time') . "
                        </div>
                        <div class='col-sm-6 bootstrap-timepicker'>";
                            echo "<div class='input-group date'>";
                            echo "<div class='input-group-addon'>
                                    <i class='fa fa-clock-o'></i>
                                  </div>";
                                    echo $this->Form->input('start_time', ['type' => 'text', 'required' => 'required', 'class' => 'form-control default-timepicker', 'id' => 'start_time', 'label' => false]); 
                            echo "</div>"; 
                        echo "<div class='help-block with-errors'></div>";                
                    echo " </div></div>";    

                    echo "
                    <div class='form-group '>
                        <div class='col-sm-12 form-label'>
                            " . __('End Time') . "
                        </div>
                        <div class='col-sm-6 bootstrap-timepicker'>";
                            echo "<div class='input-group date'>";
                            echo "<div class='input-group-addon'>
                                    <i class='fa fa-clock-o'></i>
                                  </div>";
                                    echo $this->Form->input('end_time', ['type' => 'text', 'required' => 'required', 'class' => 'form-control default-timepicker', 'id' => 'end_time', 'label' => false]); 
                            echo "</div>"; 
                        echo "<div class='help-block with-errors'></div>";                
                    echo " </div></div>";  

                    echo "<div class='form-group'>";
                        echo "<div class='col-sm-12 form-label'>";
                            echo __("Type");
                        echo "</div>";
                        echo "<div class='col-sm-6'>";
                            echo $this->Form->input('type', ['type' => 'select', 'options' => $type, 'class' => 'form-control', 'id' => 'type', 'label' => false]);                
                        echo "</div>";
                    echo " </div>";     
                    
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Firstname') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('firstname', ['class' => 'form-control autocomplete-patient-by-firstname', 'required' => 'required', 'id' => 'firstname', 'label' => false]);   
                        echo "<div class='help-block with-errors'></div>";             
                    echo " </div></div>";    
                    
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Lastname') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('lastname', ['class' => 'form-control autocomplete-patient-by-lastname', 'required' => 'required', 'id' => 'lastname', 'label' => false]);   
                        echo "<div class='help-block with-errors'></div>";             
                    echo " </div></div>";    
                    
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Middlename') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('middlename', ['class' => 'form-control', 'id' => 'middlename', 'label' => false]);                
                    echo " </div></div>";    
                ?>

                <div id="more-details-container" style="display: none;">
                <?php 
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Contact Number') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('contact_number', ['class' => 'form-control', 'id' => 'contact_number', 'label' => false]);                
                    echo " </div></div>";    
                    
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Address') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('address', ['class' => 'form-control', 'id' => 'address', 'label' => false]);                
                    echo " </div></div>";

                    echo "<div class='form-group'>";
                        echo "<div class='col-sm-12 form-label'>";
                            echo __("Province");
                        echo "</div>";
                        echo "<div class='col-sm-12'>";
                            echo $this->Form->input('province', ['class' => 'form-control autocomplete-province', 'id' => 'province', 'label' => false
                                ]);                
                        echo "</div>";
                    echo " </div>";     

                    /*echo "<div class='form-group'>";
                        echo "<div class='col-sm-12 form-label'>";
                            echo __("Province");
                        echo "</div>";
                        echo "<div class='col-sm-12'>";
                            echo $this->Form->input('province', ['type' => 'select', 'options' => $provinces, 'class' => 'form-control', 'id' => 'province', 'label' => false]);                
                        echo "</div>";
                    echo " </div>";   */

                    
                        echo "<div class='form-group'>";
                            echo "<div class='col-sm-12 form-label'>";
                                echo __("City");
                            echo "</div>";
                            echo "<div class='col-sm-12'>";
                                echo "<div class='city_container'>";
                                echo $this->Form->input('city', ['type' => 'select', 'options' => array('' => 'Select City'), 'class' => 'form-control', 'id' => 'city', 'label' => false, 'placeholder' => 'Select City']);                
                            echo "</div>";
                        echo " </div>";
                    echo "</div>"; 
                    
                    echo "
                    <div class='form-group'>
                        <div class='col-sm-12 form-label'>
                            " . __('Note') . "
                        </div>
                        <div class='col-sm-12'>";
                        echo $this->Form->input('note', ['class' => 'form-control', 'id' => 'note', 'label' => false]);                
                    echo " </div></div>";    
                ?>
                </div>

                <div class='form-group' >
                    <div class='col-sm-12'>
                        <button type="button" data-show="false" style="margin-top:15px;" type"button" class="btn btn-info btn-sm btn-block btn-hide-show-appointment-form"><i class="fa fa-plus-square"></i> View more</button>
                    </div>
                </div>
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