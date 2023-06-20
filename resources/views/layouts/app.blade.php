<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Quicksand --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/71a34700d9.js" crossorigin="anonymous"></script>
    {{-- CSS CHAT --}}
    <link rel="stylesheet" href="{{ asset('css/layouts/whats.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/whats2.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- JsSCLAIDER -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    {{-- CSS APP --}}
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}">
    {{-- ICON --}}
    <link rel="shortcut icon" href="{{ asset('img/layouts/logo3.png') }}" type="image/x-icon">
    <title>OPITI @yield('titulo')</title>
</head>

<body>

    <header>
{{--         <div class="publicidad">
            <div class="info" >
                <p><i class="fa fa-phone" aria-hidden="true"></i>+79969434635</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i>opiti@gmail.com</p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>Rusia kurks</p>
            </div>

            <div class="auth">
                <div class="login"><a href="">Registrate  </a></div>
                <div class="register"><a href=""> Ingresa</a></div>
            </div>
        </div> --}}


        <nav class="nav">

            <div class="logo">
                <a href="/"><img class="img_logo" src="{{ asset('img/layouts/logo3.png') }}" alt="Logo" />
                    {{-- <span>OPITI</span>  --}}

                </a>
                <div class="logo__descriotion">
                    <div>
                        <p class="logo__nombre">OPITI</p>
                        <p class="logo__slogan">Experiencias de por vida</p>
                    </div>
                </div>

            </div>
            <div class="slogan">
                <p>
                    Experiencias de por vida
                </p>
            </div>
            <div class="option">
                <div class="option__contenedor">
                    <ul class="option_ul">
                        <li><a href="{{ route('inicio') }}">Home </a> </li>
                        <li><a href="{{ route('rusia') }}">Rusia</a> </li>
                        <li><a href="{{ route('nosotros') }}">Nosotros</a> </li>
                        <li><a href="{{ route('contacto') }}">Contacto <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>

        </nav>
        <nav class="nav_mobile">
            <ul class="nav_mobile__contenedor">
                <li><a href="/rusia">Rusia</a> </li>
                <li><a href="/nosotros">Nosotros</a> </li>
                <li><a href="/contacto">Contacto <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </li>
            </ul>
        </nav>
    </header>
    <div class="separador"></div>


    {{-- CONTENIDO --}}
    @yield('contenido')


    {{-- CHAT --}}
    <div class="nav-bottom">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                </button>

                <p> <img src="img/secretary.png" width="50"> Hola, ¿en que podemos ayudarle? </p>

            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />




                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">send</i>
                </button>

            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <div class="float">
                <i class="fa fa-whatsapp my-float"></i>
            </div>
        </button>
        <div class="circle-anime"></div>
    </div>

    <footer>
        <p>Todos los derechos reservados 2023-2024</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/rusia.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>
