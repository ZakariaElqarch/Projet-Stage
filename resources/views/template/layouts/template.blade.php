<!DOCTYPE html>
<html lang="en">
@include('template.includes.head')
<body class="cbp-spmenu-push">
    <div class="main-content">
        @include('template.includes.header')
  
        @include('template.includes.nav')
        <div class="content">
            @yield('content')

        </div>
  

        @include('template.includes.footer')
    </div>

   
        
   
    @include('template.includes.js-file')
</body>
</html>