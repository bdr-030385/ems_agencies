<?php use Cake\Utility\Inflector; ?>
<?php 
    $nav_selected = $this->NavigationSelector->selectedMainNavigation($nav_selected[0]);
    if (!empty($sub_nav_selected)) {
        $sub_nav_selected = $this->NavigationSelector->selectedSubNavigation($sub_nav_selected['parent'],$sub_nav_selected['child']);
    }else{
        $sub_nav_selected = array();
    }
    
?>

<aside class="main-sidebar">    
    <section class="sidebar">      
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id="users_nav" title="Users" class="<?= $nav_selected["users"] ?>">
            <?= $this->Html->link('<i class="fa fa-users"></i><span>' . __("Users") . "</span>",["controller" => get_customer_directory()."/user_entities", "action" => "agency_users"],["escape" => false]) ?>
        </li>
        <li id="users_nav" title="Users" class="<?= $nav_selected["vendors"] ?>">
            <?= $this->Html->link('<i class="fa fa-truck"></i><span>' . __("Vendors") . "</span>",["controller" => "vendors", "action" => "index"],["escape" => false]) ?>
        </li>        
        <li id="users_nav" title="Users" class="<?= $nav_selected["vehicles"] ?>">
            <?= $this->Html->link('<i class="fa fa-car"></i><span>' . __("Vehicles") . "</span>",["controller" => "vehicles", "action" => "agency_vehicles"],["escape" => false]) ?>
        </li>        
        <li id="users_nav" title="Users" class="<?= $nav_selected["announcements"] ?>">
            <?= $this->Html->link('<i class="fa fa-bullhorn"></i><span>' . __("Announcements") . "</span>",["controller" => "announcements", "action" => "index"],["escape" => false]) ?>
        </li>        
      </ul>
    </section>    
</aside>