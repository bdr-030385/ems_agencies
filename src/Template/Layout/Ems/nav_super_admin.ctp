<li class="menu-dropdown <?= $nav_selected["agencies"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'index']); ?>"> Agency List <span class="arrow"></span> </a> </li>
<!-- <li class="menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'user_entities', 'action' => 'index']); ?>"> Employee List <span class="arrow"></span> </a> </li> -->
<li class="menu-dropdown classic-menu-dropdown "> <a href="javascript:;"> Advance Tools <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="#" class="nav-link  "> Database Access </a> </li>
    <li class=" "> <a href="#" class="nav-link  "> Troubleshooting </a> </li>
    <li class=" "> <a href="#" class="nav-link  ">  Reports </a> </li>
  </ul>
</li>
<li class="menu-dropdown classic-menu-dropdown "> <a href="javascript:;"> Settings <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'member_types', 'action' => 'index']); ?>" class="nav-link  "> Member Types </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'vehicle_types', 'action' => 'index']); ?>" class="nav-link  "> Vehicle Types   </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'item_categories', 'action' => 'index']); ?>" class="nav-link  "> Item Categories </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'account_types', 'action' => 'index']); ?>" class="nav-link  "> Account Types </a> </li>
  </ul>
</li>     
