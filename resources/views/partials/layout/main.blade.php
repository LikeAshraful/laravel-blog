<!doctype html>
<html lang="en">
<head>
   @include('partials.head')
   @vite('resources/css/app.css')
</head>

<body>
    
    @yield('nav')
    
    @yield('content')
    
    
    @include('partials.footer')
    
    @include('partials.javascripts')
    
</body>
</html>