

<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>EMS</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<?php
    echo $this->Html->css('ems/assets/global/plugins/font-awesome/css/font-awesome.min.css');
    echo $this->Html->css('ems/assets/global/plugins/simple-line-icons/simple-line-icons.min.css');
    echo $this->Html->css('ems/assets/global/plugins/bootstrap/css/bootstrap.min.css');
    echo $this->Html->css('ems/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');
    echo $this->Html->css('ems/assets/global/plugins/simple-line-icons/simple-line-icons.min.css');
?>
<!-- END GLOBAL MANDATORY STYLES -->

<?php 
    echo $this->Html->css('ems/assets/global/plugins/datatables/datatables.min.css');
    echo $this->Html->css('ems/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');
?>

<!-- BEGIN THEME GLOBAL STYLES -->
<?php
    echo $this->Html->css('ems/assets/global/css/components.min.css');
    echo $this->Html->css('ems/assets/global/css/plugins.min.css');
?>
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<?php
    echo $this->Html->css('ems/assets/layouts/layout3/css/layout.min.css');
    echo $this->Html->css('ems/assets/layouts/layout3/css/themes/default.min.css');
    echo $this->Html->css('ems/assets/layouts/layout3/css/custom.min.css');
    if( isset($load_form_css) ){
      echo $this->Html->css('ems/assets/layouts/layout3/css/reset.css');
      echo $this->Html->css('ems/assets/layouts/layout3/css/tab.css');
    }

?>
<!-- END THEME LAYOUT STYLES -->
<!-- <link rel="shortcut icon" href="favicon.ico" /> -->

<style>
.fixed-header {
  position: fixed;
  top:0; left:0;
  width: 100%; 
}
nav { 
  background: #444d58;
  postion:fixed;
  z-index:10;
}

    </style>
</head>
<!-- END HEAD -->
<body class="page-container-bg-solid">
