<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('public/css/auth.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('public/js/auth.js') }}" defer></script>

    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>
