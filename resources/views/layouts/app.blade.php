<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title> Exciting partner tours for milenials | {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <header>
                    <nav class="navbar is-transparent p-t-10 is-fixed-top" role="navigation" aria-label="main navigation">
                        <div class="container">
                            <div class="navbar-brand">
                                <a href="#" class="navbar-item">
                                    <img src="{{ asset('img/logo-tc24.png') }}" alt="">
                                </a>
                            </div> {{-- end of navbar-brand --}}
                            
                            <div class="navbar-menu">
                                <div class="navbar-start"></div>
                                <div class="navbar-end">
                                    @guest
                                        <div class="navbar-item has-dropdown is-hoverable">
                                            <a class="navbar-link">
                                                <div class="icon"><i class="fas fa-language"></i></div>
                                                <span>id</span>
                                            </a>
                                            <div class="navbar-dropdown is-right">
                                                <a href="#" class="navbar-item is-active">bahasa</a>
                                                <a href="#" class="navbar-item">english</a>
                                            </div>
                                        </div>
                                        <a href="#" class="navbar-item">
                                            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                                            <span>My Order</span>
                                        </a>
                                        <div class="navbar-item">
                                            <a href="{{ route('register') }}" class="button is-small is-link is-rounded">
                                                <span class="icon">
                                                    <i class="fas fa-user-plus"></i>
                                                </span>
                                                <strong>Daftar</strong>
                                            </a>
                                        </div>
                                        <div class="navbar-item">
                                            <a href="{{ route('login') }}" class="button is-small is-link is-inverted is-rounded">
                                                <span class="icon">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                </span>
                                                <span>Masuk</span>
                                            </a>
                                        </div>
                                    @else
                                        <div class="navbar-item has-dropdown is-hoverable">
                                            <a class="navbar-link">
                                                <div class="icon"><i class="fas fa-language"></i></div>
                                                <span>id</span>
                                            </a>
                                            <div class="navbar-dropdown is-right">
                                                <a href="#" class="navbar-item is-active">bahasa</a>
                                                <a href="#" class="navbar-item">english</a>
                                            </div>
                                        </div>
                                        <a href="#" class="navbar-item">
                                            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                                            <span>My Order</span>
                                        </a>
                                        <div class="navbar-item">
                                            <div class="dropdown is-right">
                                                <div class="dropdown-trigger">
                                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                                    <span>Hey {{ config('app.name') }}</span>
                                                    <span class="icon">
                                                        <i class="fas fa-caret-down"></i>
                                                    </span>
                                                </button>{{-- end of dropdown button --}}
                                                </div>{{-- end-of dropdown-trigger --}}
                                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item">
                                                            <span class="icon">
                                                                <i class="fas fa-id-card"></i>
                                                            </span>
                                                            <span>Profile</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <span class="icon">
                                                                <i class="fas fa-cog"></i>
                                                            </span>
                                                            <span>Settings</span>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <span class="icon">
                                                                <i class="fas fa-sign-out-alt"></i>
                                                            </span>
                                                            <span>Logout</span>
                                                        </a>
                                                    </div>{{-- end of dropdown-content --}}
                                                    
                                                </div>{{-- end of dropdown-menu --}}
                                                
                                            </div>{{-- end of dropdown --}}
                                            
                                        </div>{{-- end of dropdown navbar-item --}}    
                                    @endguest
                                </div>{{-- end of navbar-end --}}
                                
                            </div>{{-- end of navbar-menu --}}
                            
                        </div>{{-- end of navbar container --}}
                        
                    </nav>{{-- end of navbar --}}
                    
                </header>{{-- end of header section --}}
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
