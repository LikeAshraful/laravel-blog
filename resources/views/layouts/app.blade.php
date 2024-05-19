<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <style>
        body {
            font-family: "Raleway", sans-serif;
        }
    </style>

    @stack('css')

    @vite('resources/css/app.css')
    
    <title>
        LikeAshraful
    </title>
</head>

<body>
    <div id="app"></div>
    @vite('resources/js/app.js')
    
    @stack('scripts')
</body>

</html>
