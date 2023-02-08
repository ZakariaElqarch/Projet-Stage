<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des conventions</title>
    {{--
  






        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ mix('assets/css/bootstrap.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/bootstrap.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\form.css') }}">
    <script src="assets\js\wow.min.js"></script>
    

    <script>
        new WOW().init();
    </script> 
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        @include('template.includes.header')

        @include('template.includes.nav')
        <div class="content">

            @yield('content')

        </div>


        @include('template.includes.footer')
    </div>
    <script src="{{ asset('assets\js\jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets\js\bootstrap.js') }}"></script>
    <script src="{{ asset('assets\js\classie.js') }}"></script>
    {{-- <script src="{{ asset('assets\js\jquery-1.11.1.min.js') }}"></script> --}}
   
    <script src="{{ asset('assets\js\metisMenu.min.js') }}"></script>
<script src="{{ asset('assets\js\nav-push.js') }}"></script>
    <script src="{{ asset('assets\js\custom.js') }}"></script>
    <script src="{{ asset('assets\js\underscore-min.js') }}"></script>
    <script src="{{ asset('assets\js\validator.min.js') }}"></script>
























    {{-- <script src="{{ asset('assets1/js/jquery.js') }}"></script>
    <script src="{{ asset('assets1/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js\custom.js') }}"></script>
    {{-- <script src="{{ asset('assets\js\self-script.js') }}"></script> --}}
    {{-- <script src="{{asset(mix('/assets/js/underscorejs')) }}"></script>
    <script src="{{ asset(mix('/assets/js/validator.js')) }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets1\js\classie.js') }}"></script>
    <script src="{{ asset('assets1\js\metisMenu.min.js') }}"></script>  --}}

 
    {{-- @env('local')
    <script src="http://localhost:35729/livereload.js"></script>
@endenv --}}
</body>

</html>