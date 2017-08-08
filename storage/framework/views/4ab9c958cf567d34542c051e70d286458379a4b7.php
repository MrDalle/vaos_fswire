<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VAOS Public Beta</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('crewops/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/simple-line-icons.css" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: Arial, sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            overflow-x: hidden;
            overflow: hidden;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 35px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 2%;

        }
        body {
            /* Credit to Vuk Martjin Radevic Wolf for BETA 3 Background Picture */
            background: url(http://i.imgur.com/7U0zKFE.png) no-repeat fixed;
            background-size: cover;
            width: 100%;
            height: 100%;
            padding: 0
            position: relative;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased; /* <-- macOS Only <-- */
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <?php if(Route::has('login')): ?>
        <div class="top-right links" color: white; style="padding-left: 7px;">
            <b style="color: white;">Flight Crew Operations Center <i style="margin-top: 4.3px;" class="icon-arrow-right"></i></b>
            <a style="color: white;" href="<?php echo e(url('/login')); ?>">Login </a>
        </div>
        <?php endif; ?>

        <div class="content">
            <div class="title m-b-md">
                <img src="http://i.imgur.com/0BEIm3k.png" style="max-width: 35%; min-height: : 25%; ">
            </div>

            <div class="links" style="color: white; margin: 0px; padding: 0px;">
                <b><?php echo e(config('app.version')); ?></b>
            </div>
        </div>
    </div>
    <script src="<?php echo e(URL::asset('crewops/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('crewops/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>

</html>
