<?php 
  $nav_selected = $this->NavigationSelector->selectedMainNavigation($nav_selected[0]);
  if (!empty($sub_nav_selected)) {
    $sub_nav_selected = $this->NavigationSelector->selectedSubNavigation($sub_nav_selected['parent'],$sub_nav_selected['child']);
  }else{
    $sub_nav_selected = array();
  }
  
?>
<div class="page-header">
  <!-- BEGIN HEADER TOP -->
  <div class="page-header-top">
    <div class="container">
      <!-- BEGIN LOGO -->
      <div class="page-logo"> <a href="<?php echo $this->Url->Build("/"); ?>"> <img src="<?php echo $this->Url->build("/webroot/css/ems/assets/logoo.png"); ?>" alt="logo" class="logo-default"> </a> </div>
      <!-- END LOGO -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="menu-toggler"></a>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          <!-- END INBOX DROPDOWN -->
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <?php 
            if( $hdr_user_data->photo != '' ){
                $hdr_user_photo = $this->Url->build("/webroot/upload/users/" . $hdr_user_data->id . "/" . $hdr_user_data->photo);            
            }else{
                $hdr_user_photo = $this->Url->build("/webroot/images/default_profile.jpg");
            }
          ?>
          <li class="dropdown dropdown-user dropdown-dark"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img alt="" class="img-circle" src="<?= $hdr_user_photo; ?>"> <span class="username username-hide-mobile"><?php echo $hdr_user_data->firstname . " " . $hdr_user_data->lastname; ?></span> </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li> 
                <?php if( $hdr_user_data->user->group_id == 1 || $hdr_user_data->user->group_id == 2 ){ ?>
                  <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'personal_info']); ?>"> <i class="icon-user"></i> My Profile </a> 
                <?php }else{ ?>
                  <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'member_info']); ?>"> <i class="icon-user"></i> My Profile </a> 
                <?php } ?>
              </li>
              <li> <a href="#"> <i class="icon-rocket"></i> Alerts <span class="badge badge-success"> 7 </span> </a> </li>
              <li class="divider"> </li>
              <li> <a href="#"> <i class="icon-lock"></i> Lock Screen </a> </li>
              <li> <a href="<?= $base_url ?>users/logout"> <i class="icon-key"></i> Log Out </a> </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
          <!-- BEGIN QUICK SIDEBAR TOGGLER -->
          <li class="dropdown dropdown-extended quick-sidebar-toggler"> <span class="sr-only">Toggle Quick Sidebar</span> <i class="icon-logout"></i> </li>
          <!-- END QUICK SIDEBAR TOGGLER -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
  </div>
  <!-- END HEADER TOP -->
  <!-- BEGIN HEADER MENU -->
  <div class="page-header-menu">
    <div class="container">
      <!-- BEGIN HEADER SEARCH BOX
                    <form class="search-form" action="page_general_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    END HEADER SEARCH BOX -->
      <!-- BEGIN MEGA MENU -->
      <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
      <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
      <nav>
        <div class="container">
          <div class="hor-menu" style="width:100%;">
            <ul class="nav navbar-nav">
            	<?php if($hdr_user_data->user->group_id == 1) { ?>
            		<?php include('nav_super_admin.ctp'); ?>
            	<?php }elseif($hdr_user_data->user->group_id == 2){ ?>
            		<?php include('nav_agency_admin.ctp'); ?>
            	<?php }else{ ?>
                <?php include('nav_member.ctp'); ?>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END MEGA MENU -->
    </div>
  </div>
  <!-- END HEADER MENU -->
</div>