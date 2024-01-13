<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('/partials/main_css')
    @stack('css-dependencies')
</head>

<body>
    
    <div class="body-background">
        @yield('content')
    </div>
</body>

</html>
