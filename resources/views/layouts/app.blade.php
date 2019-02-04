<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div id="app">
        @include('inc.navbar')

            <div class="container">
                @if(Request::is('/'))
                    @include('inc.showcase')
                @else
                    <br><br>
                @endif
                <div class="row">
                  <div class="col-md-8 col-lg-8">
                    @yield('content')
                  </div>
                  <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                  </div>
                </div>
            </div>
            <br><br>
            <footer id="footer" class="bg-dark text-center">
                <p>Copyright {!! date('Y') !!} &copy; {{ env('APP_NAME') }}</p>
            </footer>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
