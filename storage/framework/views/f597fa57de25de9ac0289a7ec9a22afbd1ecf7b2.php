<div id="page-container" class="sidebar-l sidebar-o sidebar-mini side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                <span>
<a href="<?php echo e(url('/flightops/profile/'.Auth::user()->id)); ?>">
                      <img class="img-avatar img-avatar32" src="<?php echo e(Auth::user()->avatar_url); ?>" onerror="this.src='http://identicon.org?t=<?php echo e(Auth::user()->username); ?>&s=400'" alt="Avatar"></a>
                    <span class="font-w600 push-10-l"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></span>
                </span>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content remove-padding-t">
                <!-- Side Overlay Tabs -->
                <div class="block pull-r-l border-t">
                    <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                        <li class="active">
                            <a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Overview</a>
                        </li>
                        <li>
                            <a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Sales</a>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <!-- Overview Tab -->
                        <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">

                                                          <a class="block block-link-hover2" href="javascript:void(0)">
                                                              <div class="block-content block-content-full bg-primary clearfix">
                                                                  <i class="si si-clock fa-2x text-white pull-right"></i>
                                                                  <span class="h4 font-w700 text-white"><?php echo e(Auth::user()->totalhours); ?></span> <span class="h4 text-white-op">Hours flown</span>
                                                              </div>
                                                          </a>

                                                          <a class="block block-link-hover2" href="javascript:void(0)">
                                                              <div class="block-content block-content-full bg-danger clearfix">
                                                                  <i class="si si-plane fa-2x text-white pull-right"></i>
                                                                  <span class="h4 font-w700 text-white"><?php echo e(\App\PIREP::where('user_id', Auth::user()->id)->count()); ?></span> <span class="h4 text-white-op">Total flights</span>
                                                              </div>
                                                          </a>

                                                          <a class="block block-link-hover2" href="javascript:void(0)">
                                                              <div class="block-content block-content-full bg-success clearfix">
                                                                  <i class="si si-plane fa-2x text-white pull-right"></i>
                                                                  <span class="h4 font-w700 text-white"><?php echo e(\App\PIREP::where('user_id', Auth::user()->id)->avg('landingrate')); ?></span> <span class="h4 text-white-op">AVG LDG RTE</span>
                                                              </div>
                                                          </a>




                            <!-- Quick Settings -->
                            <div class="block pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Quick Actions</h3>
                                </div>

                                <div class="block-content">
                                    <!-- Quick Settings Form -->


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">Online Status</div>
                                                    <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">Auto Updates</div>
                                                    <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">Notifications</div>
                                                    <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
<div class="row" >
<div class="col-xs-8">
                                  <a href="<?php echo e(url('/flightops/profile/'.Auth::user()->id)); ?>">
                                    <div class=" form-group col-xs-8 btn btn-primary">User Profile</div>
                                  </a>
</div></div>
<div class="row" >
<div class="col-xs-8">
                                    <div class=" form-group col-xs-8  btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log Out</div>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                    <form class="form-bordered" action="http://vaos.fswire.net/flightops" method="post" onsubmit="return false;">
</div></div>
                                    <!-- END Quick Settings Form -->
                                </div>
                            </div>
                            <!-- END Quick Settings -->
                        </div>
                        <!-- END Overview Tab -->

                        <!-- Sales Tab -->
                        <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                            <div class="block pull-r-l">
                                <!-- Stats -->
                                <div class="block-content pull-t">
                                    <div class="row items-push">
                                        <div class="col-xs-6">
                                            <div class="font-w700 text-gray-darker text-uppercase">Sales</div>
                                            <a class="h3 font-w300 text-primary" href="javascript:void(0)">22030</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="font-w700 text-gray-darker text-uppercase">Balance</div>
                                            <a class="h3 font-w300 text-primary" href="javascript:void(0)">$ 4.589,00</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Stats -->

                                <!-- Today -->
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span class="font-w600 font-s13 text-gray-darker text-uppercase">Today</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span class="font-s13 text-muted">$996</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-activity pull-r-l">
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $249</div>
                                            <div><small class="text-muted">3 min ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $129</div>
                                            <div><small class="text-muted">50 min ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $119</div>
                                            <div><small class="text-muted">2 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $499</div>
                                            <div><small class="text-muted">3 hours ago</small></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Today -->

                                <!-- Yesterday -->
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span class="font-w600 font-s13 text-gray-darker text-uppercase">Yesterday</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span class="font-s13 text-muted">$765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-activity pull-r-l">
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $249</div>
                                            <div><small class="text-muted">26 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-danger"></i>
                                            <div class="font-w600">Product Purchase - $50</div>
                                            <div><small class="text-muted">28 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $119</div>
                                            <div><small class="text-muted">29 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-danger"></i>
                                            <div class="font-w600">Paypal Withdrawal - $300</div>
                                            <div><small class="text-muted">37 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $129</div>
                                            <div><small class="text-muted">39 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $119</div>
                                            <div><small class="text-muted">45 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $499</div>
                                            <div><small class="text-muted">46 hours ago</small></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Yesterday -->

                                <!-- More -->
                                <div class="text-center">
                                    <small><a href="javascript:void(0)">Load More..</a></small>
                                </div>
                                <!-- END More -->
                            </div>
                        </div>
                        <!-- END Sales Tab -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">

            <li>
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                    <i class="fa fa-tasks"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>
            <li>
                <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                    <i class="si si-grid"></i>
                </button>
            </li>


        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->
