<nav class="navbar has-shadow">
    <div class="container">
        <div id="topNav" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="navbar-burger burger" data-target="navMenuExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <a class="navbar-item is-tab" href="{{ url('/') }}">
                Bureau
            </a>
            <a class="navbar-item is-tab" href="{{ url('/') }}">
                Articles
            </a>
            <a class="navbar-item is-tab" href="{{ url('/') }}">
                Pages
            </a>
        </div>

        <div class="navbar-end">
            @if (Auth::guest())
                <a class="navbar-item" href="{{ route('login') }}">Connexion</a>
                <a class="navbar-item" href="{{ route('register') }}">S'enregistrer</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link  is-active">
                        Hello, {{ Auth::user()->name }}
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item " href="#">
                            Profile
                        </a>
                        <hr class="navbar-divider">
                        <div class="navbar-item">
                            <a href="{{ route('logout') }}" class="navbar-link"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Déconnexion <span class="icon"><i class="fa fa-power-off"></i></span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
</nav>