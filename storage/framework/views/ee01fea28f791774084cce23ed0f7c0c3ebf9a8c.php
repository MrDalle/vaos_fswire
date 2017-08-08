<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('/bower_components/materialize/dist/css/materialize.css')); ?>"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->

    <title>Crew Operations</title>
    <?php echo $__env->yieldContent('customcss'); ?>
</head>
<body class="grey lighten-3">
<nav class="grey darken-3 z-depth-2">
    <div class="container" style="width: 90%">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo" style="display: inline-flex; vertical-align: middle;">
                <?php echo e(config('app.name')); ?> Operations Center</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a id="slide-button" href="#" data-activates="slide-out"><?php echo e(Auth::user()->username); ?><i class="material-icons right">arrow_drop_down</i></a></li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- Personal Menu Side Popout -->
<!--
<div class="blue darken-4 z-depth-2" style="width: 250px; height: 64px; padding-left: 1rem; position: absolute; top: 0px; z-index: 955">



</div>
-->
<ul id="slide-out" class="side-nav">
    <li>
        <div class="user-view">
            <?php if(Auth::user()->admin): ?>
                <span class="red darken-3 white-text" style="position: absolute;bottom: 7px;right: 0;line-height: 20px;padding: 0 10px;">STAFF</span>
            <?php endif; ?>
            <div class="background">
                <img src="<?php echo e(Auth::user()->cover_url); ?>" onerror="this.src='http://i.imgur.com/7U0zKFE.png'" style="width:100%;">
            </div>
            <a href="<?php echo e(url('/flightops/profile/'.Auth::user()->id)); ?>"><img class="circle" src="<?php echo e(Auth::user()->avatar_url); ?>" onerror="this.src='http://identicon.org?t=<?php echo e(Auth::user()->username); ?>&s=400'"></a>
            <a href="<?php echo e(url('/flightops/profile/'.Auth::user()->id)); ?>"><span class="white-text name"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></span></a>
            <a href="<?php echo e(url('/flightops/profile/'.Auth::user()->id)); ?>"><span class="white-text email"><?php echo e(Auth::user()->username); ?></span></a>
        </div>
    </li>

        <li><a href="<?php echo e(url('/flightops/community/')); ?>">Community Center</a></li>
        <li><a href="<?php echo e(url('/flightops/map/')); ?>">Flight Map</a></li>
        <li><div class="divider"></div></li>
        <li><a href="<?php echo e(url('/flightops/freeflight')); ?>">Free Flight</a></li>
        <li><a href="<?php echo e(url('/flightops/schedule')); ?>">Schedule</a></li>
        <li><a href="#filePIREP">File PIREP</a></li>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-image" style="height:100px; overflow: hidden;">
                    <img src="http://flyjetconnect.org/img/712_1.png">
                    <span class="card-title">Bids: <?php echo e(\App\Bid::where('user_id', Auth::user()->id)->count()); ?></span>
                </div>
                <div class="card-action">
                    <a href="<?php echo e(url('/flightops/bids')); ?>">View Bids</a>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card">
                <div class="card-image" style="height:100px; overflow: hidden;">
                    <img src="https://raw.githubusercontent.com/CardinalHorizon/VAOS/master/public/img/login.png">
                    <span class="card-title">Flights: <?php echo e(\App\PIREP::where('user_id', Auth::user()->id)->count()); ?></span>
                </div>
                <div class="card-action">
                    <a href="<?php echo e(url('/flightops/logbook')); ?>">View Logbook</a>
                </div>
            </div>
        </div>
    </div>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo e(url('/flightops/settings')); ?>">User Settings</a></li>
    <?php if(Auth::user()->admin): ?>
        <li><a class="waves-effect" href="<?php echo e(url('/admin')); ?>">Admin Panel</a></li>
    <?php endif; ?>
    <li><a class="waves-effect" href="#!">About</a></li>
    <li><a class="waves-effect" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Log Out</a></li>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo e(csrf_field()); ?>

    </form>
</ul>
<!-- Main Sidebar Static -->

<?php echo $__env->yieldContent('content'); ?>

<div id="filePIREP" class="modal">
    <form action="<?php echo e(url('/flightops/filepirep')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="modal-content">
            <h4>Manually File PIREP</h4>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="bid">
                                <option value="" disabled selected>Select Bid</option>
                                <?php $__currentLoopData = App\Bid::where('user_id', Auth::user()->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($bid->id); ?>"><?php echo e($bid->airline->icao); ?><?php echo e($bid->flightnum); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            <label>Bid</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="Placeholder" name="onlineID" id="onlineID" type="text" class="validate">
                            <label for="onlineID">Online Network ID</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button href="#!" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">File PIREP</button>
        </div>
    </form>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('/bower_components/materialize/dist/js/materialize.js')); ?>"></script>
<script>
    $("#slide-button").sideNav();
    $('.modal').modal();
    $('select').material_select();
</script>
</body>
</html>
