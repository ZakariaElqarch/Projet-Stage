<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des conventions</title>

    {{-- start css library --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\fonts\font\bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\toastify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\jquery-ui.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\animate.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\vendors\css\custom.css') }}">

    {{-- end css library --}}

    {{-- <script src="assets\vendors\js\wow.min.js"></script>
    <script>
        new WOW().init();
    </script> --}}

</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        @include('includes.header')

        @include('includes.nav')
        <div class="content">

            @yield('content')

        </div>


        @include('includes.footer')
    </div>




    {{-- start js library --}}
    <script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\bootstrap.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\classie.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\jquery.mask.js') }}"></script>
    {{-- <script src="{{ asset('assets\vendors\js\jquery.nicescroll.js') }}"></script> --}}
    <script src="{{ asset('assets\vendors\js\moment.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\jquery-ui.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\nav-push.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\datepicker.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\custom.js') }}"></script>
    {{-- <script src="{{ asset('assets\vendors\js\scripts.js') }}"></script> --}}
    <script src="{{ asset('assets\vendors\js\toastify.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\underscore-min.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\validator.min.js') }}"></script>
    <script src="{{ asset('assets\vendors\js\validate.js') }}"></script>
   
    
    {{-- end js library --}}

</body>

</html>