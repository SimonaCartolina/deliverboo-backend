<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="shortcut icon" href="https://www.pngmart.com/files/23/Food-Icon-PNG-Photo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Aoboshi+One&family=Geologica:wght@100;200;400;500;600&family=Montserrat:wght@700&family=PT+Sans&family=Raleway:wght@200;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <section class="background">
        <div id="app">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" style="fill:#00C2B2">
                            <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                        </svg>
                        <span>
                            <a class="navbar-brand fs-3" href="{{ url('http://localhost:5174/') }}">
                                DELIVERBOO
                            </a>
                        </span>

                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto align-items-center">
                            <!-- Authentication Links -->
                            @guest

                            <li class="nav-item fw-bold fs-5">
                                <a href="http://localhost:5174/">Home</a>
                            </li>

                            @if (Route::has('login'))
                            <li class="nav-item fw-bold fs-5">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item fw-bold fs-5">
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else



                            <li>

                                <a href="{{route('admin.home')}}" class="nav-link" role="button">Home</a>
                            </li>

                            <li>
                                <a href="{{route('admin.index')}}" class="nav-link" role="button">Profile</a>

                            </li>

                            <li>
                                <a href="" class="nav-link me-3" role="button"> Ordini </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item fw-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                            @endguest
                        </ul>


                    </div>
                </div>
            </nav>

            <main class="py-4 d-flex col-12">
                @yield('content')
            </main>
        </div>
    </section>

</body>

</html>

<style scoped>
    a.nav-link,
    a {
        font-size: 1rem !important;
        font-weight: bolder !important;
        margin-right: 0.50rem;
        color: #00C2B2 !important;
        padding: 0.50rem !important;
        margin-right: 0.50rem !important;
    }

    a.nav-link:hover {
        color: #00C2B2;
        border-radius: 15px;
        background-color: darkslategrey !important;
    }

    nav.li {
        font-weight: bolder !important;
    }
</style>