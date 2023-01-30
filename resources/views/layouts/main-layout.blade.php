<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Comics</title>
    @Vite('resources/js/app.js')
</head>
<body>
    @include('components.header')
    @yield('comics_content')
    @yield('comic_content')
    @include('components.blue-cards')
    @include('components.footer')
</body>
</html>