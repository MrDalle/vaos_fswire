@extends('layouts.oneui')
@section('content')


                <!-- MAP -->
                <style type="text/css">
                .map-container {

                  border: none;
                }

                .map-container iframe{
                  height:1080px;
                	width:100%;
                

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
@endsection
</body>


</html>
