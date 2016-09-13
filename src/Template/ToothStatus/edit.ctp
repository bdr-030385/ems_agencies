
<div class="modal fade" id="editTreatmentModal-<?= $ts->id ?>" tabindex="-1" role="dialog" aria-labelledby="addTreatmentModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addTreatmentModalLabel">Edit Treatment</h4>
            </div>
            <?= $this->Form->create(null,['url' => '/tooth_status/update', 'id' => 'frm-treatment-add', 'data-toggle' => 'validator', 'role' => 'form']) ?>
                <input type="hidden" name="id" value="<?= $ts->id; ?>">
                <div class="modal-body">
                    <fieldset>        
                        <?php                                        
                            echo "<div class='row'><div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Procedure");
                                echo "</div>";
                                echo "<div class='col-sm-6'>";
                                    echo $this->Form->input('name', ['value' => $ts->name, 'class' => 'form-control', 'required' => 'required', 'id' => 'name', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div></div>"; 

                            echo "<div class='row'>";
                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Abbreviation");
                                echo "</div>";
                                echo "<div class='col-sm-6'>";
                                    echo $this->Form->input('code', ['value' => $ts->code, 'class' => 'form-control', 'required' => 'required', 'id' => 'code', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 
                            echo " </div>"; 

                            echo "<div class='row'>";
                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Cost");
                                echo "</div>";
                                echo "<div class='col-sm-6'>";
                                    echo $this->Form->input('cost', ['value' => $ts->cost, 'type' => 'number', 'step' => 'any', 'min' => 0, 'class' => 'form-control', 'required' => 'required', 'id' => 'code', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 
                            echo " </div>"; 

                            echo "<div class='row'>";
                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Has Surface");
                                echo "</div>";
                                echo "<div class='col-sm-6'>";
                                    echo $this->Form->input('has_surface', ['value' => $ts->has_surface, 'type' => 'radio', 'options' => array("1" => "Yes", "0" => "No"), 'class' => 'form-control', 'required' => 'required', 'id' => 'e_has_surface', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 
                            echo " </div>"; 
                        ?>
                    </fieldset>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
     