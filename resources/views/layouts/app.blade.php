<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mi Aplicacion')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css) }}">
</head>
<body>
    <div class="app">
        <x-header />

        <main>
            @yield('content')
        </main>

        <x-footer />
    </div>
</body>
</html>