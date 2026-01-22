
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title> </head>
<body>

    @include('layout.nave')

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
