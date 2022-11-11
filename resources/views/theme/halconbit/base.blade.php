<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Structure Base [Laravel]</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="{{asset('libs/bootstrap/version/5.2.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">       
       
    </head>
    <body>
        @yield('content')
        <!-- Bootstrap Bundle with Popper -->
       <script src="{{asset('libs/bootstrap/version/5.2.2/dist/js/bootstrap.min.js')}}"></script>
    </body>
</html>
