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
        <!-- <li id="groups_nav" title="Groups" class="<?= $nav_selected["dashboard"] ?>">
            <?= $this->Html->link('<i class="fa fa-dashboard "></i><span>' . __("Dashboard") . "</span>",["controller" => "users", "action" => "dashboard"],["escape" => false]) ?>
        </li>   -->      
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["agencies"] ?>">
            <?= $this->Html->link('<i class="fa fa-suitcase"></i><span>' . __("Agencies") . "</span>",["controller" => "agencies", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["vehicles"] ?>">
            <?= $this->Html->link('<i class="fa fa-car"></i><span>' . __("Vehicles") . "</span>",["controller" => "vehicles", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["vehicle_compartments"] ?>">
            <?= $this->Html->link('<i class="fa fa-user-md"></i><span>' . __("Vehicle Compartments") . "</span>",["controller" => "vehicle_compartments", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="users_nav" title="Users" class="<?= $nav_selected["users"] ?>">
            <?= $this->Html->link('<i class="fa fa-users"></i><span>' . __("Users") . "</span>",["controller" => get_customer_directory()."/user_entities", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="users_nav" title="Users" class="<?= $nav_selected["vendors"] ?>">
            <?= $this->Html->link('<i class="fa fa-truck"></i><span>' . __("Vendors") . "</span>",["controller" => "vendors", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="users_nav" title="Users" class="<?= $nav_selected["vendor_items"] ?>">
            <?= $this->Html->link('<i class="fa fa-medkit"></i><span>' . __("Vendor Items") . "</span>",["controller" => "vendor_items", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["items"] ?>">
            <?= $this->Html->link('<i class="fa fa-newspaper-o"></i><span>' . __("Items") . "</span>",["controller" => "items", "action" => "index"],["escape" => false]) ?>
        </li>        
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["groups"] ?>">
            <?= $this->Html->link('<i class="fa fa-street-view"></i><span>' . __("Groups") . "</span>",["controller" => get_customer_directory()."/groups", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["member_types"] ?>">
            <?= $this->Html->link('<i class="fa fa-gear"></i><span>' . __("Member Types") . "</span>",["controller" => "member_types", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["vehicle_types"] ?>">
            <?= $this->Html->link('<i class="fa fa-gear"></i><span>' . __("Vehicle Types") . "</span>",["controller" => "vehicle_types", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["item_categories"] ?>">
            <?= $this->Html->link('<i class="fa fa-list-alt"></i><span>' . __("Item Categories") . "</span>",["controller" => "item_categories", "action" => "index"],["escape" => false]) ?>
        </li>        
        <li id="groups_nav" title="Groups" class="<?= $nav_selected["account_types"] ?>">
            <?= $this->Html->link('<i class="fa fa-gear"></i><span>' . __("Account Types") . "</span>",["controller" => "account_types", "action" => "index"],["escape" => false]) ?>
        </li>        
      </ul>
    </section>    
</aside>