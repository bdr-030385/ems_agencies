<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["home"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'dashboard']); ?>"> Home <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["equipment_checks"] ?>"> <a href="javascript:;"> Equipment Check <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'equipment_checks', 'action' => 'my_checks']); ?>" class="nav-link  "> My Checks </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'equipment_checks', 'action' => 'my_checks']); ?>" class="nav-link  "> New Checks   </a> </li>
  </ul>
</li>

<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Phonebook <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Fuel Log <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'vehicle_maintenance_requests', 'action' => 'add']); ?>"> Vehicle Maintenance<span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["administrator"] ?>"> <a href="javascript:;"> Administrator <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'index']); ?>" class="nav-link  "> Agency Setup </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Member List   </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'contacts', 'action' => 'index']); ?>" class="nav-link  "> Contact List </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Agency Vehicles </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'messages', 'action' => 'index']); ?>" class="nav-link  "> eMail/Text </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Front Page Setup </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Front Page Setup </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Changes & Uploads </a> </li>
    <li class="divider"></li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Vendor List </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Item List </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Purchasing </a> </li>
    <li class="divider"></li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Compartment Setup </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Vehicle Maintenance Log </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Reports </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Settings </a> </li>
    <li class="divider"></li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'add']); ?>" class="nav-link  "> New Agency </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> Advance Tools </a> </li>
  </ul>
</li> 

