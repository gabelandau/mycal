<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyCal</title>

        <link rel="stylesheet" href="{{ url(mix('css/base.css')) }}">
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        <script src="{{ url(mix('js/app.js')) }}"></script>
    </head>
    <body>
        @yield('body')
    </body>
</html>
