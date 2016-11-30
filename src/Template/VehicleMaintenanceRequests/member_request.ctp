
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
        <?= $this->Form->create(null,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => '']) ?>
            <input type="hidden" name="agency_id" value="<?= $hdr_user_data->agency_id; ?>">
            <input type="hidden" name="user_entity_id" value="<?= $hdr_user_data->id; ?>">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Complaint happened when</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-truck" aria-hidden="true"></i>  </span>
                                <select class="form-control input-circle-right">
                                    <option> Driving / Parked Engine On </option>
                                    <option> Parked Engine Off</option>
                                    <option> Always </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>If happened while driving </label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-dashboard" aria-hidden="true"></i> </span>
                                <input type="text" class="form-control input-circle-right" placeholder=" Enter approximate speed">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-bug" aria-hidden="true"></i>  </span>
                                <input type="text" class="form-control input-circle-right" placeholder="Describe complaint and presumptive problem" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Note</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> <i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                <input type="text" class="form-control input-circle-right" placeholder="Enter Notes if any ">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date and Timestamp</label>
                            <div class="input-group"> <span class="input-group-addon input-circle-left"> </span>
                                </label>
                                <div class="input-group date form_datetime" style="color: #000">
                                    <input type="text" size="16" readonly class="form-control" placeholder="Date and Timestamp">
                                    <span class="input-group-btn">
                                    <button class="btn default date-set" type="button"> <i class="fa fa-calendar"></i> </button>
                                    </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" align="center">
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <a href="<?= $base_url; ?>agencies" type="button" class="btn default">Cancel</a>
                    </div>
                </div>
            </div>
        <?= $this->Form->end() ?>            

        <!-- END FORM-->
      </div>
    </div>
    <!-- Form Here -->
    <center >
        Submitted by Rubin Breuer, Unit S-6
    </center>
  </div>
  <!-- second partition ==-->
  </div>

</div>

