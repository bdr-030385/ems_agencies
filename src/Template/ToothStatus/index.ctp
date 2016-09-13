<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script>

<section class="content-header">
    <h1>
        <?= __("Treatment Management") ?>
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Treatment Management</li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addTreatmentModal" title="Add New Treatment" ><i class="fa fa-plus"></i> Add New Treatment</button>
                    
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">

                    <table id="i_dt_default" class="display table table-bordered table-hover dt-list-default" >
                        <thead>
                            <tr>
                                <th>Procedure</th>
                                <th>Abbreviation</th>
                                <th>Cost</th>
                                <th>Has Surface</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($toothStatus as $ts) { ?>
                                <tr>
                                    <td><?= $ts->name; ?></td>
                                    <td><?= $ts->code; ?></td>
                                    <td><?= $ts->cost; ?></td>
                                    <td><?= ($ts->has_surface == 1 ? "<i class='fa fa-check-square-o'></i> " : "<i class='fa fa-square-o'></i> "); ?> Checkbox</td>
                                    
                                    <td>
                                        <?php include("edit.ctp"); ?>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#editTreatmentModal-<?= $ts->id; ?>" title="Edit Treatment" ><i class="fa fa-pencil"></i></a> &nbsp;
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteTreatmentModal-<?= $ts->id; ?>" title="Delete Treatment" ><i class="fa fa-trash"></i></a>

                                        <div class="modal fade" id="deleteTreatmentModal-<?= $ts->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                            <div class="modal-dialog " role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Delete Treatment</h4>
                                                  </div>

                                                  <div class="modal-body">
                                                    <p>Are you sure you want to delete selected entry?</p>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <?= $this->Form->postLink(
                                                            'Yes',
                                                            ['action' => 'delete', $ts->id],
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
                            <?php }?>
                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include("add.ctp"); ?>