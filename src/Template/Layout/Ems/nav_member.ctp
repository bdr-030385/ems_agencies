<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["home"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'users', 'action' => 'dashboard']); ?>"> Home <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["equipment_checks"] ?>"> <a href="javascript:;"> Equipment Check <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'equipment_checks', 'action' => 'my_checks']); ?>" class="nav-link  "> My Checks </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'equipment_checks', 'action' => 'my_checks']); ?>" class="nav-link  "> New Checks   </a> </li>
  </ul>
</li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Phonebook <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Fuel Log <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Vehicle Maintenance<span class="arrow"></span> </a> </li>

