<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('/partials/main_css')
    @stack('css-dependencies')
</head>

<body>
    <header class="page__header">
        @include('/partials/sidebar')
    </header>
    <div class="page__main">
        <div class="container__main">
            @yield('content-home')
        </div>
    </div>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    @stack('script-dependencies')
</body>
