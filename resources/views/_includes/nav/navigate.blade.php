<nav class="navbar is-transparent p-t-10 is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ route('welcome')}}" class="navbar-item">
                <img src="{{ asset('images/logo-tc24.png') }}" alt="">
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
                                <span>Hey {{ Auth::user()->name }}</span>
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
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <span class="icon">
                                            <i class="fas fa-sign-out-alt m-r-5"></i>
                                        </span>
                                        <span>Logout</span>
                                    </a>
                                    @include('_includes.forms.logout')
                                </div>{{-- end of dropdown-content --}}
                                
                            </div>{{-- end of dropdown-menu --}}
                            
                        </div>{{-- end of dropdown --}}
                        
                    </div>{{-- end of dropdown navbar-item --}}    
                @endguest
            </div>{{-- end of navbar-end --}}
            
        </div>{{-- end of navbar-menu --}}
        
    </div>{{-- end of navbar container --}}
    
</nav>{{-- end of navbar --}}    