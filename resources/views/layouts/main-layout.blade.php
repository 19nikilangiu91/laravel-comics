<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href={{ Vite::asset('resources/img/favicon.ico') }}>
    <title>Laravel - Comics</title>
    @Vite('resources/js/app.js')
    @yield('head')
</head>
<body>
    @include('components.header')
    @include('components.jumbotron')
    @yield('comics_content')
    @yield('comic_content')
    @include('components.blue-cards')
    @include('components.footer')
</body>
</html>