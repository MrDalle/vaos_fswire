<head>
<?php echo $__env->make('layouts.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.oneui', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>


                <!-- MAP -->
                <style type="text/css">
                .map-container {

                  border: none;
                }

                .map-container iframe{
                  height:1080px;
                	width:100%;
                  margin-top: 60px;

                	position: relative; /* IE needs a position other than static */
                }

                </style>


<body>


                <!-- MAP -->
                <div class="map-container">
                <iframe scrolling="no" frameBorder="0" src="http://forum.fswire.net"></iframe>
                </div>
                <!-- END MAP -->

                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->


        <!-- END Page Container -->

</body>
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>
