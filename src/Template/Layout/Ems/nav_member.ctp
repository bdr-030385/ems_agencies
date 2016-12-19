<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["home"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'dashboard']); ?>"> Home <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["equipment_checks"] ?>"> <a href="javascript:;"> Equipment Check <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'equipment_checks', 'action' => 'my_checks']); ?>" class="nav-link  "> My Checks </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'equipment_checks', 'action' => 'my_checks']); ?>" class="nav-link  "> New Checks   </a> </li>
  </ul>
</li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["phonebook"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'phonebook', 'action' => 'index']); ?>"> Phonebook <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["fuel_logs"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'fuel_logs', 'action' => 'member']); ?>"> Fuel Log <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["vehicle_maintenance_requests"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'vehicle_maintenance_requests', 'action' => 'member_request']); ?>"> Vehicle Maintenance<span class="arrow"></span> </a> </li>

<!-- <li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["home"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'dashboard']); ?>"> Home <span class="arrow"></span> </a> </li>
	<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["personal_info"] ?>"> <a href="javascript:;"> Personal Info <span class="arrow"></span> </a>
	<ul class="dropdown-menu pull-left">
	  <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'personal_info']); ?>" class="nav-link  "> Personal Info </a> </li>
	  <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Changes </a> </li>
	  <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> View Certs </a> </li>
	  <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Upload Certs </a> </li>
	</ul>
</li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full <?= $nav_selected["equipment_checks"] ?>"> <a href="javascript:;"> Equipment <span class="arrow"></span> </a> </li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Agency Phonebook <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["fuel_logs"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'fuel_logs', 'action' => 'member']); ?>"> Fuel Log <span class="arrow"></span> </a>
<ul class="dropdown-menu pull-left">
  <li class="dropdown-submenu "> <a href="javascript:;" class="nav-link nav-toggle "> <i class="icon-settings"></i> Fuel Log <span class="arrow"></span> </a>
    <ul class="dropdown-menu">
      <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link "> List of all agencies <br>
        Controls </a> </li>
    </ul>
  </li>
</ul>
</li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full <?= $nav_selected["vehicle_maintenance_requests"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'vehicle_maintenance_requests', 'action' => 'member_request']); ?>"> Vehicle Maintenance <span class="arrow"></span> </a> </li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Reports <span class="arrow"></span> </a> </li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Settings <span class="arrow"></span> </a> </li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Administrator <span class="arrow"></span> </a> </li> -->

