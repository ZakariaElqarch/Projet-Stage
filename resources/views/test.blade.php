<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery and Bootstrap</title>
    
    <link href="/bootstrap-5.2.3-dist/css/bootstrap.css" rel="stylesheet">
    
    
</head>

<body>
    <h1>Hello World!</h1>
    {{-- Test Bootstrap css  --}}
    <div class="alert alert-success mt-5" role="alert">
        Boostrap 5 is working using laravel 8 mix!
        You're a guest. <a href="{{ route('login') }}">Log in</a></p>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="/bootstrap-5.2.3-dist/js/bootstrap.js"></script>
    <script>
        //Test jQuery
        $(document).ready(function() {
            console.log('jQuery works!');

        
        });

        
    </script>

</body>

</html>