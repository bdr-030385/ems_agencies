<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script><!-- Main content -->

<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="index.html">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Dashboard</span>
    </li>
</ul>   

<div class="page-content-inner">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <div class="portlet light ">
        <div class="portlet-title">
          <div class="caption caption-md">
            <i class="icon-bar-chart font-dark hide"></i>
            <span class="caption-subject font-dark uppercase bold">Usage Graph</span>
            <span class="caption-helper hide">weekly stats...</span>
          </div>
          <div class="actions">
            <div class="btn-group btn-group-devided" data-toggle="buttons">
              <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                <input type="radio" name="options" class="toggle" id="option1">Today</label>
                <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                  <input type="radio" name="options" class="toggle" id="option2">Week</label>
                  <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                    <input type="radio" name="options" class="toggle" id="option2">Month</label>
                  </div>
                </div>
              </div>
              <div class="portlet-body">
                <div class="row list-separated">
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="font-grey-mint font-sm"> Total Sales </div>
                    <div class="uppercase font-hg font-red-flamingo"> 13,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="font-grey-mint font-sm"> Revenue </div>
                    <div class="uppercase font-hg theme-font"> 4,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="font-grey-mint font-sm"> Expenses </div>
                    <div class="uppercase font-hg font-purple"> 11,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="font-grey-mint font-sm"> Growth </div>
                    <div class="uppercase font-hg font-blue-sharp"> 9,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </div>
                </div>
                <ul class="list-separated list-inline-xs hide">
                  <li>
                    <div class="font-grey-mint font-sm"> Total Sales </div>
                    <div class="uppercase font-hg font-red-flamingo"> 13,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </li>
                  <li> </li>
                  <li class="border">
                    <div class="font-grey-mint font-sm"> Revenue </div>
                    <div class="uppercase font-hg theme-font"> 4,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </li>
                  <li class="divider"> </li>
                  <li>
                    <div class="font-grey-mint font-sm"> Expenses </div>
                    <div class="uppercase font-hg font-purple"> 11,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </li>
                  <li class="divider"> </li>
                  <li>
                    <div class="font-grey-mint font-sm"> Growth </div>
                    <div class="uppercase font-hg font-blue-sharp"> 9,760
                      <span class="font-lg font-grey-mint">$</span>
                    </div>
                  </li>
                </ul>
                <div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 267px"> </div>
              </div>
            </div>
          </div>



          <div class="col-md-6 col-sm-6">
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption caption-md">
                  <i class="icon-bar-chart font-dark hide"></i>
                  <span class="caption-subject font-dark bold uppercase">Announcement Message</span>
                  <span class="caption-helper">45 pending</span>
                </div>
                <div class="inputs">
                  <div class="portlet-input input-inline input-small ">
                    <div class="input-icon right">
                      <i class="icon-magnifier"></i>
                      <input type="text" class="form-control form-control-solid input-circle" placeholder="search..."> </div>
                    </div>
                  </div>
                </div>
                <div class="portlet-body">
                  <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                    <div class="general-item-list">
                      <div class="item">
                        <div class="item-head">
                          <div class="item-details">
                            <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                            <a href="" class="item-name primary-link">Nick Larson</a>
                            <span class="item-label">3 hrs ago</span>
                          </div>
                          <span class="item-status">
                            <span class="badge badge-empty badge-success"></span> Open</span>
                          </div>
                          <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                        </div>
                        <div class="item">
                          <div class="item-head">
                            <div class="item-details">
                              <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                              <a href="" class="item-name primary-link">Mark</a>
                              <span class="item-label">5 hrs ago</span>
                            </div>
                            <span class="item-status">
                              <span class="badge badge-empty badge-warning"></span> Pending</span>
                            </div>
                            <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                          </div>
                          <div class="item">
                            <div class="item-head">
                              <div class="item-details">
                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                <a href="" class="item-name primary-link">Nick Larson</a>
                                <span class="item-label">8 hrs ago</span>
                              </div>
                              <span class="item-status">
                                <span class="badge badge-empty badge-primary"></span> Closed</span>
                              </div>
                              <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                            </div>
                            <div class="item">
                              <div class="item-head">
                                <div class="item-details">
                                  <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                  <a href="" class="item-name primary-link">Nick Larson</a>
                                  <span class="item-label">12 hrs ago</span>
                                </div>
                                <span class="item-status">
                                  <span class="badge badge-empty badge-danger"></span> Pending</span>
                                </div>
                                <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                              </div>
                              <div class="item">
                                <div class="item-head">
                                  <div class="item-details">
                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                    <a href="" class="item-name primary-link">Richard Stone</a>
                                    <span class="item-label">2 days ago</span>
                                  </div>
                                  <span class="item-status">
                                    <span class="badge badge-empty badge-danger"></span> Open</span>
                                  </div>
                                  <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                </div>
                                <div class="item">
                                  <div class="item-head">
                                    <div class="item-details">
                                      <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                      <a href="" class="item-name primary-link">Dan</a>
                                      <span class="item-label">3 days ago</span>
                                    </div>
                                    <span class="item-status">
                                      <span class="badge badge-empty badge-warning"></span> Pending</span>
                                    </div>
                                    <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                  </div>
                                  <div class="item">
                                    <div class="item-head">
                                      <div class="item-details">
                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                        <a href="" class="item-name primary-link">Larry</a>
                                        <span class="item-label">4 hrs ago</span>
                                      </div>
                                      <span class="item-status">
                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                      </div>
                                      <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                          </div>
                          <div class="col-md-6 col-sm-6">

                            <div class="portlet light portlet-fit bordered">
                              <div class="portlet-title">
                                <div class="caption">
                                  <i class="icon-microphone font-dark hide"></i>
                                  <span class="caption-subject bold font-dark uppercase">Upcoming Aspiration</span>
                                  <span class="caption-helper">default option...</span>
                                </div>
                                <div class="actions">
                                  <div class="btn-group">
                                    <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                      <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                      <li>
                                        <a href="javascript:;"> Option 1</a>
                                      </li>
                                      <li class="divider"> </li>
                                      <li>
                                        <a href="javascript:;">Option 2</a>
                                      </li>
                                      <li>
                                        <a href="javascript:;">Option 3</a>
                                      </li>
                                      <li>
                                        <a href="javascript:;">Option 4</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="portlet-body">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="mt-widget-3">
                                      <div class="mt-head bg-blue-hoki">
                                        <div class="mt-head-icon">
                                          <i class=" icon-social-twitter"></i>
                                        </div>
                                        <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ... </div>
                                        <span class="mt-head-date"> 25 Jan, 2015 </span>
                                        <div class="mt-head-button">
                                          <button type="button" class="btn btn-circle btn-outline white btn-sm">Add</button>
                                        </div>
                                      </div>
                                      <div class="mt-body-actions-icons">
                                        <div class="btn-group btn-group btn-group-justified">
                                          <a href="javascript:;" class="btn ">
                                            <span class="mt-icon">
                                              <i class="glyphicon glyphicon-align-justify"></i>
                                            </span> </a>
                                            <a href="javascript:;" class="btn ">
                                              <span class="mt-icon">
                                                <i class="glyphicon glyphicon-camera"></i>
                                              </span> </a>
                                              <a href="javascript:;" class="btn ">
                                                <span class="mt-icon">
                                                  <i class="glyphicon glyphicon-calendar"></i>
                                                </span> </a>
                                                <a href="javascript:;" class="btn ">
                                                  <span class="mt-icon">
                                                    <i class="glyphicon glyphicon-record"></i>
                                                  </span> </a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="mt-widget-3">
                                              <div class="mt-head bg-red">
                                                <div class="mt-head-icon">
                                                  <i class="icon-user"></i>
                                                </div>
                                                <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ... </div>
                                                <span class="mt-head-date"> 12 Feb, 2016 </span>
                                                <div class="mt-head-button">
                                                  <button type="button" class="btn btn-circle btn-outline white btn-sm">Add</button>
                                                </div>
                                              </div>
                                              <div class="mt-body-actions-icons">
                                                <div class="btn-group btn-group btn-group-justified">
                                                  <a href="javascript:;" class="btn ">
                                                    <span class="mt-icon">
                                                      <i class="glyphicon glyphicon-align-justify"></i>
                                                    </span> </a>
                                                    <a href="javascript:;" class="btn ">
                                                      <span class="mt-icon">
                                                        <i class="glyphicon glyphicon-camera"></i>
                                                      </span> </a>
                                                      <a href="javascript:;" class="btn ">
                                                        <span class="mt-icon">
                                                          <i class="glyphicon glyphicon-calendar"></i>
                                                        </span> </a>
                                                        <a href="javascript:;" class="btn ">
                                                          <span class="mt-icon">
                                                            <i class="glyphicon glyphicon-record"></i>
                                                          </span> </a>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="mt-widget-3">
                                                      <div class="mt-head bg-green">
                                                        <div class="mt-head-icon">
                                                          <i class=" icon-graduation"></i>
                                                        </div>
                                                        <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ... </div>
                                                        <span class="mt-head-date"> 3 Mar, 2015 </span>
                                                        <div class="mt-head-button">
                                                          <button type="button" class="btn btn-circle btn-outline white btn-sm">Add</button>
                                                        </div>
                                                      </div>
                                                      <div class="mt-body-actions-icons">
                                                        <div class="btn-group btn-group btn-group-justified">
                                                          <a href="javascript:;" class="btn ">
                                                            <span class="mt-icon">
                                                              <i class="glyphicon glyphicon-align-justify"></i>
                                                            </span> </a>
                                                            <a href="javascript:;" class="btn ">
                                                              <span class="mt-icon">
                                                                <i class="glyphicon glyphicon-camera"></i>
                                                              </span> </a>
                                                              <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                  <i class="glyphicon glyphicon-calendar"></i>
                                                                </span> </a>
                                                                <a href="javascript:;" class="btn ">
                                                                  <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                  </span> </a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <!-- END PAGE CONTENT INNER -->
                                            </div>