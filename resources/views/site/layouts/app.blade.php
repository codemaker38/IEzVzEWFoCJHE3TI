<!-- {{ number_format((microtime(true) - LARAVEL_START), 2, '.', '') }} secs -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Home') | {{ config('app.name') }}</title>
        <link rel="icon" type="image/ico" href="{{ url('favicon.ico') }}">
        @section('styles')
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @show
    </head>
    <body>
        <div class="app" id="app">
            @include('site.includes.header')

            <div class="container-fluid">
                <div class="row">
                    <nav class="sidebar col-sm-3 col-md-2 d-none d-sm-block">
                        @include('site.includes.sidebar')
                    </nav>

                    <main class="main @yield('main', '') col-sm-9 ml-sm-auto col-md-10">
                        @yield('content')
                    </main>
                </div>
            </div>

            @include('site.includes.footer')
        </div>

        @section('scripts')
            <script>
                var APP_URL = '{{ url('/') }}';
            </script>
            <script src="{{ asset('js/app.js') }}"></script>
        @show
    </body>
</html>