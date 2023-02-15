<!DOCTYPE HTML>
<html>

<head>
    <title>Gestions des Conventions
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendors/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="assets/vendors/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- bootstrap icons -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fonts/font/bootstrap-icons.css"><!-- js-->
    <script src="assets/vendors/js/jquery-1.11.1.min.js"></script>
    <script src="assets/vendors/js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <!-- mask -->
    <script src="assets/vendors/js/jquery.mask.js"></script>
    <!-- Wow. js is a JavaScript library that generates CSS animations as you scroll along any webpage. -->
    <link href="assets/vendors/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="assets/vendors/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

    <!-- Underscore.js is a JavaScript library which provides utility functions for common programming tasks -->
    <script src="assets/vendors/js/underscore-min.js" type="text/javascript"></script>

    <!-- moment js library  which helps is parsing, validating, manipulating and displaying date/time in JavaScript in a very easy way  -->
    <script src="assets/vendors/js/moment-2.2.1.js" type="text/javascript"></script>

    <script src="assets/js/site.js" type="text/javascript"></script>

    <!-- Metis Menu -->
    <script src="assets/vendors/js/metisMenu.min.js"></script>
    <script src="assets/vendors/js/custom.js"></script>
    <link href="assets/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <!-- Date picker -->
    <script src="assets/vendors/js/moment.min.js"></script>
    <script src="assets/vendors/js/daterangepicker.js"></script>
    <link href="assets/vendors/css/daterangepicker.css" rel="stylesheet">

    <!-- datatable -->
    <link href="assets/vendors/css/jquery.dataTables.css" rel="stylesheet">
    <script src="assets/vendors/js/jquery.dataTables.js"></script>

    <!-- Jquery validate -->
    <script src="assets/vendors/js/jquery.validate.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/vendors/js/bootstrap.js"> </script>
    <!--  -->
    <!--  tostify -->
    <script src="assets/vendors/js/toastify-js.js"></script>
    <link href="assets/vendors/css/toastify.min.css" rel="stylesheet">
    
    @vite('resources/js/app.js')
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class=" sidebar" role="navigation">
            @include('includes.navigation')
        </div>

        <!-- header-starts -->

        <div class="sticky-header header-section ">
            @include('includes.header')
        </div>

        <div id="page-wrapper">
            <div class="main-page">
                @yield('content')
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            @include('includes.footer')
        </div>

    </div>
    <!-- Classie -->
    <script src="assets/vendors/js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };


        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!--scrolling js-->
    <!-- <script src="assets/js/jquery.nicescroll.js"></script> -->
    <script src="assets/js/scripts.js"></script>
    <!--//scrolling js-->
    

    <!-- My js file -->
    <script src="assets/js/project.add.js"></script>
    <script src="assets/js/project.list.js"></script>
    

    

</body>

</html>