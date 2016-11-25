
<div class="cd-tabs">
<style>
.fixed-header {
  position: fixed;
  top:0; left:0;
  width: 100%; 
}
nav { 
  background: #444d58;
  postion:fixed;
  z-index:10;
}

    </style>

  <!-- second partition -->
  <div class="col-md-12" style="color: #000">
  <!-- form here -->
  <div class="portlet light " style="width:100%; float:left;">
    <div class="portlet-title">
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($vehicleType,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>
            <div class="form-body">                
                <div class="col-md-12">                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Vehicle Type</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                </span>
                                <input name="name" id="name" value="<?php echo $vehicleType->name; ?>" type="text" class="form-control input-circle-right" placeholder="Name" required="required"> 
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-12" align="center">
                    <div class="form-actions">
                        <button type="submit" class="btn blue" name="save" value="save">Submit</button>
                        <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'btn default', 'escape' => false]) ?>                        
                    </div>
                </div>
            </div>
        <?= $this->Form->end() ?>            

        <!-- END FORM-->
      </div>
    </div>
    <!-- Form Here -->
  </div>
  <!-- second partition ==-->
  </div>

</div>
