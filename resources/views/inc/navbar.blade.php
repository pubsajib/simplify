<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                @if (Route::currentRouteName() == 'home')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</span></a>
                    </li>
                @endif
                @if (Request::is('about'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
                    </li>
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                @endif
                @if (Request::is('contact'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact <span class="sr-only">(current)</span></a>
                    </li>
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                @endif
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/messages') }}">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout') }}">Log out</a>
                    </li>
                @else
                    @if (Request::is('login'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('login') }}">Log in <span class="sr-only">(current)</span></a>
                        </li>
                    @else 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Log in</a>
                        </li>
                    @endif
                    @if (Request::is('register'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('register') }}">Register <span class="sr-only">(current)</span></a>
                        </li>
                    @else 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register') }}">Register</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>