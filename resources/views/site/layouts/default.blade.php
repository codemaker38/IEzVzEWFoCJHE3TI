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
                    <main class="main @yield('main', '') col">
                        @yield('content')
                    </main>
                </div>
            </div>

            @include('site.includes.footer')
        </div>
    </body>
</html>