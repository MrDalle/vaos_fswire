<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>

    <style type="text/css">
    .side-header img {
        display: inline-block;
        margin-left: -6px;
    }
    #header-navbar {
    min-height: 40px;
    background-color: #2C343F;
}

</style>



    <body>
        <!-- Page Container -->

    <!--
        Available Classes:

        'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

        'sidebar-l'                  Left Sidebar and right Side Overlay
        'sidebar-r'                  Right Sidebar and left Side Overlay
        'sidebar-mini'               Mini hoverable Sidebar (> 991px)
        'sidebar-o'                  Visible Sidebar by default (> 991px)
        'sidebar-o-xs'               Visible Sidebar by default (< 992px)

        'side-overlay-hover'         Hoverable Side Overlay (> 991px)
        'side-overlay-o'             Visible Side Overlay by default (> 991px)

        'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

        'header-navbar-fixed'        Enables fixed header
    -->


        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="side-header side-content bg-white-op">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                        <div class="btn-group pull-right">
                            <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                <i class="si si-drop"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                <li>
                                    <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <a class="h5 text-white" href="http://vaos.fswire.net/flightops">
                            <img src="assets/img/favicons/favicon.png" alt=""> <span class="h4 font-w600 sidebar-mini-hide"> FSWire</span>
                        </a>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content side-content-full">
                        <ul class="nav-main">
                            <li>
                                <a class="active" href="http://vaos.fswire.net/flightops"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>

                            <li>
                                <a class="active" href=" <?php echo e(url('/map/')); ?>"><i class="si si-map"></i><span class="sidebar-mini-hide">RADAR</span></a>
                            </li>
                            <li>
                                <a class="active" href="  <?php echo e(url('/flightops/logbook')); ?>"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Logbook</span></a>
                            </li>
                            <?php if(Auth::user()->admin): ?>
                                <li>
                                  <a class="active" href="<?php echo e(url('/admin')); ?>">
                                    <i class="si si-wrench"></i><span class="sidebar-mini-hide">Admin Panel</a></li>
                            <?php endif; ?>
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Dispatch</span></li>
                            <li>
                                <a class="active" href="  <?php echo e(url('/flightops/schedule')); ?>"><i class="si si-layers"></i><span class="sidebar-mini-hide">Shedule</span></a>
                            </li>
                            <li>
                                <a class="active" href="  <?php echo e(url('/flightops/bids')); ?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Bids</span></a>
                            </li>

                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Community</span></li>
                            <li>
                                <a class="active" href="  <?php echo e(url('/forum')); ?>"><i class="si si-users"></i><span class="sidebar-mini-hide">Forum</span></a>
                            </li>




                        </ul>
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>
        <!-- END Sidebar -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="base_pages_dashboard.html">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="frontend_home.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Page Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_dashboard_v2.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (CountTo plugin)
                App.initHelpers('appear-countTo');
            });
        </script>
        </body>
        </html>
