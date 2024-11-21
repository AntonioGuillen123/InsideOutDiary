<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mi Aplicacion')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app">
    <x-header></x-header>

    <div class="container">
    <x-aside></x-aside>
    <div class="containerMain">
    <main>
         @yield('content')
    </main>
</div>
    </div> 
    </div>
</body>
</html>