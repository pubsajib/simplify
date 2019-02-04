<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                @if (Request::is('/'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</span></a>
                    </li>
                @endif
                @if (Request::is('about'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('about') }}">About <span class="sr-only">(current)</span></a>
                    </li>
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                @endif
                @if (Request::is('contact'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('contact') }}">Contact <span class="sr-only">(current)</span></a>
                    </li>
                @else 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>