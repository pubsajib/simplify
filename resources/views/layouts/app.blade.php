<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $errorItem)
                    <li>{{ $errorItem }}</li>
                @endforeach
            </ul>
        @endif
        <div id="app">
            @include('inc.navbar')
            <div class="container">
                @if(Route::currentRouteName() == 'home')
                    @include('inc.showcase')
                @else
                    <br><br>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        @include('flash::message')
                    </div>
                </div>
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
        <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            $('#flash-overlay-modal').modal();
        </script>
    </body>
</html>
