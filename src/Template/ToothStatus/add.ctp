
<div class="modal fade" id="addTreatmentModal" tabindex="-1" role="dialog" aria-labelledby="addTreatmentModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addTreatmentModalLabel">Add Treatment</h4>
            </div>
            <?= $this->Form->create(null,['url' => '/tooth_status/add', 'id' => 'frm-treatment-add', 'data-toggle' => 'validator', 'role' => 'form']) ?>
                <div class="modal-body">
                    <fieldset>        
                        <?php                                        
                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Procedure");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('name', ['class' => 'form-control', 'required' => 'required', 'id' => 'name', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 

                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Abbreviation");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('code', ['class' => 'form-control', 'required' => 'required', 'id' => 'code', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 

                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Cost");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('cost', ['type' => 'number', 'step' => 'any', 'min' => 0, 'class' => 'form-control', 'required' => 'required', 'id' => 'code', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 

                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Has Surface");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('has_surface', ['type' => 'radio', 'options' => array("1" => "Yes", "0" => "No"), 'value' => 1, 'class' => 'form-control', 'required' => 'required', 'id' => 'code', 'label' => false]);      
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 
                        ?>
                    </fieldset>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
     