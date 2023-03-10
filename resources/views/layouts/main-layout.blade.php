<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()-> getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css)}}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css)}}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container-fluid">
            @yield('content-area')
        </div>
    </body>
</html>