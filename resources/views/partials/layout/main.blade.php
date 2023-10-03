<!doctype html>
<html lang="en">
<head>
   @include('partials.head')
</head>

<body>
    
    @yield('nav')
    
    @yield('content')
    
    
    @include('partials.footer')
    
    @include('partials.javascripts')
    
</body>
</html>