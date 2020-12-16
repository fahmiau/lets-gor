<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Fonts -->
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css?v=1.0')}}">
        <link rel="stylesheet" href="{{asset('css/home.css?v=1.0')}}">
        <link rel="stylesheet" href="{{asset('css/login.css?v=1.0')}}">
        <link rel="stylesheet" href="{{asset('css/gor.css?v=1.0')}}">
        
    </head>
    <body>
        @yield('header')
        @yield('content')
        <div class="container text-center py-1 mt-5">
            Copyright 2020 LetsGOR Team
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $('#groupTab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('show')
                });
            console.log('asdasd');
        });
    </script>
</html>