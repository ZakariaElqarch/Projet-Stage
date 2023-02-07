<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Gestions des Conventions
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->

    <!-- Wow. js is a JavaScript library that generates CSS animations as you scroll along any webpage. -->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

    <!-- Underscore.js is a JavaScript library which provides utility functions for common programming tasks -->
    <script src="assets/js/underscore-min.js" type="text/javascript"></script>

    <!-- moment js library  which helps is parsing, validating, manipulating and displaying date/time in JavaScript in a very easy way  -->
    <script src="assets/js/moment-2.2.1.js" type="text/javascript"></script>

    <script src="assets/js/site.js" type="text/javascript"></script>

    <!-- Metis Menu -->
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <link href="assets/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->


    <!-- vite hot reload -->
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
    <script src="assets/js/classie.js"></script>
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
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!--//scrolling js-->
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.js"> </script>
</body>

</html>