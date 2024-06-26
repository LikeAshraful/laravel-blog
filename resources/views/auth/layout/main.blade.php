<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @stack('css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>
       LikeAshraful Blog
    </title>
</head>

<body>


    <main>
        @yield('content')
    </main>
    <!-- ===== Main Content End ===== -->

    @stack('scripts')
</body>

</html>
