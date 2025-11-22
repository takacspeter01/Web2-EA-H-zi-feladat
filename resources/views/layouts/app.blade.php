<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Laravel'))</title>

        <!-- Flat + Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-alpha-2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/lindy-uikit.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    </head>
    <body>
        {{-- ==== NAVBAR ==== --}}

        <div class="hero-section-wrapper-2">

        <header class="header header-2">
            <div class="navbar-area">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">

                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="Logo"> 
                        </a>

                        <!-- Mobile Toggle -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <!-- Navigation -->
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent2">
                            <ul id="nav2" class="navbar-nav ml-auto align-items-center">

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('home') }}">Főoldal</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('database.index') }}">Adatbázis</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('trails.index') }}">Utak CRUD</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('diagram.index') }}">Diagram</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('contact.form') }}">Kapcsolat</a>
                                </li>

                                @can('is-admin')
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('admin.index') }}">Admin</a>
                                </li>
                                @endcan

                                @auth
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('messages.index') }}">Üzenetek</a>
                                </li>
                                @endauth

                                @guest
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('login') }}">Bejelentkezés</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="main-btn btn-hover">Regisztráció</a>
                                </li>
                                @endguest

                                @auth
                                <li class="nav-item d-flex align-items-center">
                                    <span class="nav-link text-muted mr-2">
                                        {{ auth()->user()->name }} ({{ auth()->user()->role }})
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="main-btn btn-hover" type="submit">
                                            Kijelentkezés
                                        </button>
                                    </form>
                                </li>
                                @endauth

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        {{-- ==== NAVBAR VÉGE ==== --}}

        <!-- Page Content -->
        <div class="hero-section-wrapper-2">
            @yield('content')
        </div>

        <!-- Flat JS -->
        <script src="{{ asset('assets/js/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
        <script src="{{ asset('assets/js/count-up.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
            new WOW().init();
        </script>
        <a href="#" class="scroll-top btn-hover">
            <i class="lni lni-chevron-up"></i>
        </a>
    </body>
</html>
