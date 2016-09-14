<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addUserModalLabel">Add User</h4>
            </div>
            <?= $this->Form->create(null,['url' => '/users/add', 'id' => 'frm-user-add', 'data-toggle' => 'validator', 'role' => 'form']) ?>
                <div class="modal-body">
                    <fieldset>        
                        <?php                                        
                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Username");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('username',['class' => 'form-control', 'type' => 'email', 'id' => 'username', 'label' => false]);    
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 

                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Password");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('password',['class' => 'form-control', 'id' => 'password','type' => 'password' , 'label' => false]);   
                                echo "<div class='help-block with-errors'></div> </div>";                
                            echo " </div>"; 

                            echo "<div class='form-group'>";
                                echo "<div class='col-sm-12 form-label'>";
                                    echo __("Group");
                                echo "</div>";
                                echo "<div class='col-sm-12'>";
                                    echo $this->Form->input('group_id', ['class' => 'form-control', 'id' => 'role', 'label' => false, 'options' => $groups]);     
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
