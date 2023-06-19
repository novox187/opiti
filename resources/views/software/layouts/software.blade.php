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
                        <form action="#">
                            @csrf
                            <li><button>Perfil</button></li>
                        </form>
                        
                        <form action="{{ route('logout') }}" method='POST'>
                            @csrf
                            <li> <button type="submit">Cerrar sesion</button></li>
                        </form>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="separador"></div>
    <main>
        <div class="contenido">
            @yield('contenido')
        </div>

        <div class=" menu ">
            <ul class=" menu__opciones ">
                {{-- IZQUIERDA --}}
                <li class="opciones"><a href="{{ route('clientes') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                
                </li>
                {{-- IMAGEN CENTRAL --}}
                <li><img class="menu__centro" src="{{ asset('img/layouts/logo3.png') }}" alt=""></li>
                {{-- DERECHA --}}
                <li class="opciones"><a href="{{ route('admin') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </main>

        <footer>
        <p>Todos los derechos reservados 2023-2024</p>
    </footer>
    <script src="{{ asset('js/software/layouts/software.js') }}"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>
