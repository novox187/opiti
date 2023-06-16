<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    {{-- ICON --}}
    <link rel="shortcut icon" href="{{ asset('img/layouts/logo3.png') }}" type="image/x-icon">
    <title>OPITI @yield('name')</title>
</head>

<body>
    <div class="login_register">
        <img class="login_register__fondo" src="{{ asset('img/auth/login.jpg') }}" alt="Fondo de la paguina">
        <div class="login_register__container">
            <div class="login_register__imagen">
                <img class="login_register__img" src="{{ asset('img/layouts/logo3.png') }}" alt="">
                <span class="login_register__name">Opiti</span>
            </div>
            <div class="login_register__formulario">
                @yield('titulo')
                @yield('formulario')
            </div>
        </div>
    </div>
</body>

</html>
