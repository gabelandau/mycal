<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <h5 class="title is-5">MyCal</h5>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item {{ Route::current()->getName() === 'home' ? 'is-active' : ''}}" href="{{ route('home') }}">
                Home
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    {{ Auth::user()->name }}
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Profile
                    </a>
                    <a class="navbar-item">
                        Settings
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="{{ route('logout') }}">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
