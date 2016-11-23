

<!-- BEGIN FOOTER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
        <h2>About</h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs12 footer-block">
        <h2>Subscribe Email</h2>
        <div class="subscribe-form">
          <form action="javascript:;">
            <div class="input-group">
              <input type="text" placeholder="mail@email.com" class="form-control">
              <span class="input-group-btn">
              <button class="btn" type="submit">Submit</button>
              </span> </div>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
        <h2>Follow Us On</h2>
        <ul class="social-icons">
          <li> <a href="javascript:;" data-original-title="rss" class="rss"></a> </li>
          <li> <a href="javascript:;" data-original-title="facebook" class="facebook"></a> </li>
          <li> <a href="javascript:;" data-original-title="twitter" class="twitter"></a> </li>
          <li> <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a> </li>
          <li> <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a> </li>
          <li> <a href="javascript:;" data-original-title="youtube" class="youtube"></a> </li>
          <li> <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a> </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
        <h2>Contacts</h2>
        <address class="margin-bottom-40">
        Phone: 800 123 3456 <br>
        Email: <a href="#">info@example.com</a>
        </address>
      </div>
    </div>
  </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN INNER FOOTER -->
<div class="page-footer">
  <div class="container"> 2016 &copy; All right reserved.
                <a href="#">Company Name</a>
            </div>
</div>
<div class="scroll-to-top"> <i class="icon-arrow-up"></i> </div>
<!-- END INNER FOOTER -->
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<?php
  echo $this->Html->script('ems/assets/global/plugins/jquery.min.js');
  echo $this->Html->script('ems/assets/global/plugins/bootstrap/js/bootstrap.min.js');
  echo $this->Html->script('ems/assets/global/plugins/js.cookie.min.js');
  echo $this->Html->script('ems/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');
  echo $this->Html->script('ems/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');
  echo $this->Html->script('ems/assets/global/plugins/jquery.blockui.min.js');
  echo $this->Html->script('ems/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');
?>
<!-- END CORE PLUGINS -->
<?php
  echo $this->Html->script('ems/assets/global/scripts/datatable.js');
  echo $this->Html->script('ems/assets/global/plugins/datatables/datatables.min.js');
  echo $this->Html->script('ems/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js');
  echo $this->Html->script('ems/assets/pages/scripts/table-datatables-responsive.min.js');
?>

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<?php 
  echo $this->Html->script('ems/assets/global/scripts/app.min.js');
?>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<?php 
  echo $this->Html->script('ems/assets/layouts/layout3/scripts/layout.min.js');
  echo $this->Html->script('ems/assets/layouts/layout3/scripts/demo.min.js');
  echo $this->Html->script('ems/assets/layouts/global/scripts/quick-sidebar.min.js');
  echo $this->Html->script('validator.min.js');   
?>
<!-- END THEME LAYOUT SCRIPTS -->

<script type="text/javascript">
$(function(){
  $(".dt-buttons").append("<a class='dt-button buttons-pdf buttons-html5 btn default' href='<?php echo $this->Url->Build(['action' => 'add']); ?>'>Add New</a>");
});
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
       $('nav').addClass('fixed-header');
    }
    else {
       $('nav').removeClass('fixed-header');
    }
});
</script>
</body>
</html>