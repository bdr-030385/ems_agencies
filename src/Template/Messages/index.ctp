<script>
var base_url = "<?= $base_url; ?>";
</script>
<div class="page-content-inner">
  <div class="inbox">
    <div class="row">
      <div class="col-md-3">
        <div class="inbox-sidebar">
          <a href="javascript:;" data-title="Compose" class="btn red compose-btn btn-block">
            <i class="fa fa-edit"></i> Compose </a>
            <ul class="inbox-nav">
              <li class="active">
                <a href="javascript:;" data-type="inbox" data-title="Inbox"> Inbox
                  <span class="badge badge-success">3</span>
                </a>
              </li>
              <li>
                <a href="javascript:;" data-type="important" data-title="Inbox"> Important </a>
              </li>
              <li>
                <a href="javascript:;" data-type="sent" data-title="Sent"> Sent </a>
              </li>
              <li>
                <a href="javascript:;" data-type="draft" data-title="Draft"> Draft
                  <span class="badge badge-danger">8</span>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="javascript:;" class="sbold uppercase" data-title="Trash"> Trash
                  <span class="badge badge-info">23</span>
                </a>
              </li>
              <li>
                <a href="javascript:;" data-type="inbox" data-title="Promotions"> Promotions
                  <span class="badge badge-warning">2</span>
                </a>
              </li>
              <li>
                <a href="javascript:;" data-type="inbox" data-title="News"> News </a>
              </li>
            </ul>
            <ul class="inbox-contacts">
              <li class="divider margin-bottom-30"></li>
              <li>
                <a href="javascript:;">
                  <img class="contact-pic" src="../assets/pages/media/users/avatar4.jpg">
                  <span class="contact-name">Adam Stone</span>
                  <span class="contact-status bg-green"></span>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <img class="contact-pic" src="../assets/pages/media/users/avatar2.jpg">
                  <span class="contact-name">Lisa Wong</span>
                  <span class="contact-status bg-red"></span>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <img class="contact-pic" src="../assets/pages/media/users/avatar5.jpg">
                  <span class="contact-name">Nick Strong</span>
                  <span class="contact-status bg-green"></span>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <img class="contact-pic" src="../assets/pages/media/users/avatar6.jpg">
                  <span class="contact-name">Anna Bold</span>
                  <span class="contact-status bg-yellow"></span>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <img class="contact-pic" src="../assets/pages/media/users/avatar7.jpg">
                  <span class="contact-name">Richard Nilson</span>
                  <span class="contact-status bg-green"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="inbox-body">
            <div class="inbox-header">
              <h1 class="pull-left">Inbox</h1>
              <form class="form-inline pull-right" action="index.html">
                <div class="input-group input-medium">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button type="submit" class="btn green">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </form>
            </div>
            <div class="inbox-content"> </div>
          </div>
        </div>
    </div>
  </div>
</div>