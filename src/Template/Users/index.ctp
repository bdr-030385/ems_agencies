<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script>

<section class="content-header">
    <h1>
        <?= __("Users") ?>
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">
                    <?= $this->Html->link(__('Add New User'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Group</th>
                                <th>Date Created</th>
                                <th>Date Modified</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $u) { ?>
                                <tr>
                                    <td><?= $u->username; ?></td>
                                    <td><?= $u->group->name; ?></td>
                                    <td><?= date("M d, Y", strtotime($u->created)); ?></td>
                                    <td><?= date("M d, Y", strtotime($u->modified)); ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

<?php //include("add.ctp"); ?>