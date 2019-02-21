<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name') }}</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar is-transparent m-t-10" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('img/logo-tc24.png') }}" alt="">
                        </a>
                    </div> {{-- end of navbar-brand --}}
                    
                    <div class="navbar-menu">
                        <div class="navbar-start"></div>
                        <div class="navbar-end">
                            @if (Auth::guest())
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
                                <a href="#" class="button is-small is-link is-rounded">
                                    <span class="icon">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <strong>Signup</strong>
                                </a>
                            </div>
                            <div class="navbar-item">
                                <a href="#" class="button is-small is-link is-inverted is-rounded">
                                    <span class="icon">
                                            <i class="fas fa-sign-in-alt"></i>
                                    </span>
                                    <span>Login</span>
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
                            @endif
                        </div>{{-- end of navbar-end --}}
                        
                    </div>{{-- end of navbar-menu --}}
                    
                </div>{{-- end of navbar container --}}
                
            </nav>{{-- end of navbar --}}
            
        </header>{{-- end of header section --}}
    
        <section class="hero-section">
            <div class="hero is-link is-full-height">
                <div class="hero-body is-centered">
                    <div class="title">
                        <h1>Halo</h1>
                    </div>
                    <div class="subtitle">
                        <h4>World</h4>
                    </div>
                </div>
            </div>
        </section>
    </div>{{-- end of #app --}}
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>