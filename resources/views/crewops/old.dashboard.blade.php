

<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>FSWire - next level va experience</title>

        <meta name="description" content="FSWire - next level va experience ">
        <meta name="author" content="MrDalle">
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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->

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
     @include('layouts.oneui')

    </head>







            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="background-image: url('assets/img/photos/bg.png');">
                    <div class="push-50-t push-150">
                        <h1 class="h1 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content bg-grey-lighter border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Hours Flown</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-clock"></i> in air time</small></div>
                            <a class="h2 font-w500 text-primary animated flipInX" href="base_comp_charts.html">{{ Auth::user()->totalhours }}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Total Flights</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w500 text-primary animated flipInX" href="base_comp_charts.html">{{ \App\PIREP::where('user_id', Auth::user()->id)->count() }}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">AVG LDG RTE</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w500 text-primary animated flipInX" href="base_comp_charts.html">{{ \App\PIREP::where('user_id', Auth::user()->id)->avg('landingrate') }}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Pilot Wallet</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w500 text-primary animated flipInX" href="base_comp_charts.html">0</a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Main Dashboard Chart -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Weekly Overview</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter text-center">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                                    <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                                </div>
                                <div class="block-content text-center">
                                    <div class="row items-push text-center">
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 205 Sales</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-10"><i class="si si-users fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 25% Clients</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 visible-lg">
                                            <div class="push-10"><i class="si si-star fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 10 Ratings</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 visible-lg">
                                            <div class="push-10"><i class="si si-share fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 35 Followers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Main Dashboard Chart -->
                        </div>

                            <!-- END Content Grid -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->


        </div>
        <!-- END Page Container -->

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
                                    <a class="block block-rounded" href="http://vaos.fswire.net/flightops">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="http://fswire.net/">
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
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
        @include('includes.footer')
    </body>
</html>

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#airline').select2();
            $('#depapt').select2();
            $('#arrapt').select2();
            $('#aircraft').select2();
        });
    </script>
@endsection
