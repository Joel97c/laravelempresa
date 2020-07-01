<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .active a{
        color: brown;
        }
        a{
            text-decoration: none;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>

    <nav>
        <ul>
        <li class="{{setActive ('home') }}"> <a href="/">Home</a></li>
        <li class="{{setActive ('clientes') }}"> <a href="/clientes">Clientes</a></li>
        </ul>
    </nav>
        @yield('content')
</body>
</html>
