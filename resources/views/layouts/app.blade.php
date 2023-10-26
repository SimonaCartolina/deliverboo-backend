<!doctype html>
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
            <nav class="navbar navbar-expand-md shadow-sm">
                <div class="container">
                    <a class="navbar-brand fs-3 logo" href="{{ url('http://localhost:5174/') }}">
                        Deliverboo
                    </a>
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
                            <li class="nav-item fw-bold fs-5">
                                <a href="http://localhost:5174/AboutUs">About Us</a>
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
                                <a href="{{route('admin.index')}}" class="nav-link" role="button">Ristorante</a>

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
    a {
        font-size: 1rem;
        font-weight: bolder;
        margin-right: 0.50rem;
        color: #E7A85C;
        padding: 0.50rem;
        margin-right: 0.50rem;
    }

    a:hover {
        color: #E7A85C;
        border-radius: 15px;
        background-color: #ace9c8ea;
    }

    nav.li {
        font-weight: bolder;
    }
</style>