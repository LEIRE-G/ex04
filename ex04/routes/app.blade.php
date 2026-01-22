<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Tienda')</title>

    <!-- Styles -->
    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f9f9f9; }
        .container { max-width: 800px; margin: auto; padding: 1.5rem; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        header { background-color: #fff; padding: 1rem 2rem; border-bottom: 1px solid #eee; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 1.5rem; }
        nav a { text-decoration: none; color: #333; font-weight: 500; }
    </style>
</head>
<body>
    <header>
        @include('layouts.navigation')
    </header>
    <main style="padding: 2rem;">
        @yield('content')
    </main>
</body>
</html>
