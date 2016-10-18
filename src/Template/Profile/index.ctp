
<section class="content-header">
    <h1><?= __('User Profile') ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= __('User Profile') ?></li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <div class="col-md-2">
            <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?= $this->Html->image('/images/user2-160x160.jpg',['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']) ?>              
              <br />
              <a href="#" class="btn btn-primary btn-block"><b>Change Avatar</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-10">

          <!-- Personal Info Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Personal Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Name</strong>
              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Gender</strong>
              <p class="text-muted">Male</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Birthdate</strong>
              <p class="text-muted">2016-09-16</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
              <p class="text-muted">Malibu, California</p>
              <hr>              
              <strong><i class="fa fa-pencil margin-r-5"></i> Contact Information</strong>
              <p>
                <span class="label label-danger">Phone : 3243</span>
                <span class="label label-success">Home : 21345</span>
                <span class="label label-info">Mobile : 345734534</span>
                <span class="label label-warning">Mobile Carrier : 345476673</span>                
              </p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
            <!-- Other Info Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Other Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Emergency Contact Person</strong>
              <p class="text-muted">
                Lorem ipsum dolor
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Emergency Contact Number</strong>
              <p class="text-muted">23423424</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Email</strong>
              <p class="text-muted">sample@gmail.com</p>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </div>
</section>