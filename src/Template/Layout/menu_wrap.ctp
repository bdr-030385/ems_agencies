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
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
            <?= $this->Html->image('/images/user2-160x160.jpg',['class' => 'img-circle']) ?>
          
        </div>
        <div class="pull-left info">
          <p><?php echo($hdr_user_data->firstname . " " . $hdr_user_data->lastname); ?></p>
          <a href="#"><i class="fa fa-circle-o text-success"></i> <?= $hdr_user_data->customer_id; ?></a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id="calendar_appointment_nav" title="Calendar Appointment" class="<?= $nav_selected["appointments"] ?>">
            <?= $this->Html->link('<i class="fa fa-calendar"></i><span>' . __("Calendar of Appointment") . "</span>",["controller" => get_customer_directory()."/appointment", "action" => "index"],["escape" => false]) ?>
        </li>
        <li id="patient_nav" title="Patient's Record" class="<?= $nav_selected["patients"] ?>"><?= $this->Html->link('<i class="fa fa-users"></i><span>' . __("Patient's Record") . "</span>",["controller" => get_customer_directory()."/patient", "action" => "index"],["escape" => false]) ?></li>

        <li id="payment_history_nav" title="Payment History" class="<?= $nav_selected["payment_histories"] ?>"><?= $this->Html->link('<i class="fa fa-credit-card"></i><span>' . __("Payment History") . "</span> ",["controller" => get_customer_directory()."/payment_summary", "action" => "index"],["escape" => false]) ?></li>
        <li class="treeview <?= $nav_selected["settings"] ?>">
          <a href="#" class="<?= $nav_selected["settings"] ?>">
            <i class="fa fa-cog"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li title="Surface Management">
                    <?= $this->Html->link(__("<i class='fa fa-circle-o'> </i> Surface Management ") ,["controller" => get_customer_directory()."/tooth_position", "action" => "index"],["escape" => false]) ?>
                </li>

                <li title="Treatment Management">
                    <?= $this->Html->link(__("<i class='fa fa-circle-o'> </i> Treatment Management "),["controller" => get_customer_directory()."/tooth_status", "action" => "index"],["escape" => false]) ?>                        
                </li>

            <li title="Diagram Notation">
                <?= $this->Html->link(__("<i class='fa fa-circle-o'> </i> Diagram Notation "),["controller" => get_customer_directory()."/diagram_notation", "action" => "index"],["escape" => false]) ?>                        
            </li>

            <li title="Software Update" class="hidden">
                <?= $this->Html->link(__("<i class='fa fa-circle-o'> </i> Software Update "),["controller" => get_customer_directory()."/patient", "action" => "index"],["escape" => false]) ?>
            </li>
            <li title="About">
                <?= $this->Html->link(__("<i class='fa fa-circle-o'> </i> About "),["controller" => get_customer_directory()."/about", "action" => "index"],["escape" => false]) ?>                        
            </li>
            <li title="Send feedback / Bug report">
                <a href="http://sprintdesignsph.com/intellident/support"><?php echo __("<i class='fa fa-circle-o'> </i> Feedback and Bug Report "); ?></a>
            </li>  
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>