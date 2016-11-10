<li class="menu-dropdown classic-menu-dropdown <?= $nav_selected["agencies"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'agencies', 'action' => 'index']); ?>"> Home <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown "> <a href="javascript:;"> Personal Info <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="#" class="nav-link  "> Personal Info </a> </li>
    <li class=" "> <a href="#" class="nav-link  "> Changes </a> </li>
    <li class=" "> <a href="#" class="nav-link  "> View Certs </a> </li>
    <li class=" "> <a href="#" class="nav-link  "> Upload Certs </a> </li>
  </ul>
</li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full <?= $nav_selected["items"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'items', 'action' => 'index']); ?>"> Equipment <span class="arrow"></span> </a> </li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Agency Phonebook <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown "> <a href="javascript:;"> Fuel Log <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class="dropdown-submenu "> <a href="javascript:;" class="nav-link nav-toggle "> <i class="icon-settings"></i> Fuel Log <span class="arrow"></span> </a>
      <ul class="dropdown-menu">
        <li class=" "> <a href="#" class="nav-link "> List of all agencies <br>
          Controls </a> </li>
      </ul>
    </li>
  </ul>
</li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full <?= $nav_selected["vehicles"] ?>"> <a href="<?php echo $this->Url->Build(['controller' => 'vehicles', 'action' => 'index']); ?>"> Vehicle Maintenance <span class="arrow"></span> </a> </li>
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Reports <span class="arrow"></span> </a> </li>
<li class="menu-dropdown classic-menu-dropdown "> <a href="javascript:;"> Settings <span class="arrow"></span> </a>
  <ul class="dropdown-menu pull-left">
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'member_types', 'action' => 'index']); ?>" class="nav-link  "> Member Types </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'vehicle_types', 'action' => 'index']); ?>" class="nav-link  "> Vehicle Types   </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'item_categories', 'action' => 'index']); ?>" class="nav-link  "> Item Categories </a> </li>
    <li class=" "> <a href="<?php echo $this->Url->Build(['controller' => 'account_types', 'action' => 'index']); ?>" class="nav-link  "> Account Types </a> </li>
  </ul>
</li>              
<li class="menu-dropdown mega-menu-dropdown  mega-menu-full"> <a href="javascript:;"> Administrator <span class="arrow"></span> </a> </li>