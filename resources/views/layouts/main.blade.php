<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Автотабель</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/AdminLte.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/welcome.css') }}" rel="stylesheet">
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
{{--                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>--}}
{{--                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>--}}
{{--                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>--}}
{{--                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>--}}
{{--                <li><a href="#" class="nav-link px-2 text-white">About</a></li>--}}
            </ul>

            <div class="text-end">
                @guest
                <a href="/login" class="btn btn-outline-light me-2">Авторизация</a>
                <a href="/register" class="btn btn-warning me-2">Регистрация</a>
                @else
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn">Выход</button>
                                </form>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</header>

    <main>
        @yield('content')
    </main>
</body>
</html>
