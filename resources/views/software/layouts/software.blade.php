<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/software/layouts/software.css') }}">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/71a34700d9.js" crossorigin="anonymous"></script>
    {{-- ICON --}}
    <link rel="shortcut icon" href="{{ asset('img/layouts/logo3.png') }}" type="image/x-icon">
    <title>OPITI @yield('titulo')</title>
</head>

<body>
    <header class="nav">
        <div class="nav__contenedor">
            <div class="nav__logo">
                <a href="{{ route('admin') }}"><img class="img_logo" src="{{ asset('img/layouts/logo3.png') }}"
                        alt="Logo" />
                </a>
                <div class="logo__descriotion">
                    <p class="logo__nombre">OPITI</p>
                    <p class="logo__slogan">Experiencias de por vida</p>
                </div>
            </div>
            <div class="nav__slogan">
                <p>
                    Experiencias de por vida
                </p>
            </div>

            <div class="nav__user">
                <img class="user__img" src="{{ asset('img/software/user.png') }}" alt="">
                <p class="user__name">@yield('usuario')</p>
                <div class="nav__desplegable ">
                    <ul>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="separador"></div>
    <main>
        <div class="menu">
            <div class="menu__contenedor">
                <ul class="menu__opciones">
                    <li class="hidden"><a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a></li>
                    <li><img class="menu__centro" src="{{ asset('img/layouts/logo3.png') }}" alt=""></li>
                    <li class="hidden"><a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        {{--  <div class="semarador_menu"></div> --}}
        <div class="contenido">
            @yield('contenido')
        </div>

    </main>
{{--     <div class="color_palet">
        <div class="container rojo"></div>
        <div class="container naranja"></div>
        <div class="container amarillo"></div>
        <div class="container verde"></div>
        <div class="container azul"></div>
        <div class="container violeta"><img src="{{ asset('img/software/d.jpg') }}" alt=""></div>
    </div> --}}

    {{--     <footer>
        <p>Todos los derechos reservados 2023-2024</p>
    </footer> --}}
    <script src="{{ asset('js/software/layouts/software.js') }}"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>
