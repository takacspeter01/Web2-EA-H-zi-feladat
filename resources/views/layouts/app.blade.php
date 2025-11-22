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
    </head>
    <body>
        {{-- ==== NAVBAR ==== --}}
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="Logo" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent2">
                <ul id="nav2" class="navbar-nav ml-auto">
                    {{-- Főoldal --}}
                    <li class="nav-item">
                        <a class="page-scroll" href="{{ route('home') }}">Főoldal</a>
                    </li>

                    {{-- Adatbázis --}}
                    <li class="nav-item">
                        <a class="page-scroll" href="{{ route('database.index') }}">Adatbázis</a>
                    </li>

                    {{-- Utak CRUD --}}
                    <li class="nav-item">
                        <a class="page-scroll" href="{{route('trails.index')}}">UtakCRUD</a>
                    </li>


                    {{-- Kapcsolat --}}
                    <li class="nav-item">
                        <a class="page-scroll" href="{{ route('contact.form') }}">Kapcsolat</a>
                    </li>

                    {{-- Üzenetek – csak belépve --}}
                    @auth
                        <li class="nav-item">
                            <a class="page-scroll" href="{{ route('messages.index') }}">Üzenetek</a>
                        </li>
                    @endauth

                    {{-- Admin – csak admin --}}
                    @can('is-admin')
                        <li class="nav-item">
                            <a class="page-scroll" href="{{ route('admin.index') }}">Admin</a>
                        </li>
                    @endcan

                    {{-- Login / Regisztráció --}}
                    @guest
                        <li class="nav-item">
                            <a class="page-scroll" href="{{ route('login') }}">Bejelentkezés</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="{{ route('register') }}">Regisztráció</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <span class="nav-link">
                                {{ auth()->user()->name }} ({{ auth()->user()->role }})
                            </span>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="button button-sm radius-10" type="submit">
                                    Kijelentkezés
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
        {{-- ==== NAVBAR VÉGE ==== --}}

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Flat JS -->
        <script src="{{ asset('assets/js/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
        <script src="{{ asset('assets/js/count-up.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
