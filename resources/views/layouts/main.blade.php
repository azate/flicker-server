<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta content="{{ csrf_token() }}" name="csrf-token">
        <meta content="height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
        <title>@yield('title')</title>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <script async src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>