<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["agencies"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Home <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Equipment Check <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown "> <a href="javascript:;"> Equipment Check <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> My Checks </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>" class="nav-link  "> New Checks   </a> </li>
  </ul>
</li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Phonebook <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Fuel Log <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["users"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'setup']); ?>"> Vehicle Maintenance<span class="arrow"></span> </a> </li>

