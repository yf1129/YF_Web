<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
        {{--vue代码--}}
        <h2 class="navbar-laravel">测试</h2>
        </div>
        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
