<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    {{-- LIBRERIA AOS --}}
    <link rel="stylesheet" href="{{ asset('css/librerias/AOS.css?0.1') }}">
    {{-- Quicksand --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/6092d0a250.js" crossorigin="anonymous"></script>
    {{-- CSS CHAT --}}
    <link rel="stylesheet" href="{{ asset('css/layouts/whats.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/whats2.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
    <!-- JsSCLAIDER -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    {{-- CSS APP --}}
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css?0.5') }}">
    {{-- ICON --}}
    <link rel="shortcut icon" href="{{ asset('img/favicon_io/favicon.ico') }}" type="image/x-icon">
    <title>Opiti @yield('titulo')</title>
    <meta name="application-name" content=" Esrudia en Rusia con la ayuda de Opiti">
    <meta name="audience" content="all">
    <meta name="category" content="studies">
    <meta itemprop="telephone" content="+7(996) 943 46-35">
    <meta name="title" content="Opiti Estudia en Ruisa de la mano de los mejores">
    <meta name="description"
        content="Simplificamos el proceso de admisión y visado para que puedas cumplir tu sueño de estudiar en Rusia">
    <meta name="keywords" content="Estudios en rusia, Universidades en rusia, opiti">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="2 days">
    <meta name="author" content="Harrison Ochoa">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://opiti.ru/" />
    <meta property="og:title" content="Opiti Estudia en Ruisa de la mano de los mejores
" />
    <meta property="og:description"
        content="Simplificamos el proceso de admisión y visado para que puedas cumplir tu sueño de estudiar en Rusia" />
    <meta property="og:image" content="https://opiti.ru/img/home/rusia.webp" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://opiti.ru/" />
    <meta property="twitter:title" content="Opiti Estudia en Ruisa de la mano de los mejores
" />
    <meta property="twitter:description"
        content="Simplificamos el proceso de admisión y visado para que puedas cumplir tu sueño de estudiar en Rusia" />
    <meta property="twitter:image" content="https://opiti.ru/img/home/rusia.webp" />

    @yield('canonical')
</head>

<body>

    <header>
        <nav class="info">
            <ul class="contenedor__info">
                <li class="inf__info"><i class="fa-solid fa-phone "></i> <a
                        href="https://wa.me/+79969434635" target="_blank" rel="noopener noreferrer"> +7 (996)
                        943-46-35</a>
                <li class="inf__info"><i class="fa-solid fa-envelope "></i> <a
                        href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwRrfkXNXCDgxMGhkZJPCRJWvlHSNQTQXMGtKbVFqsnQCsRrLPrdGpbxkXZxsvHTNzMLSGf "
                        target="_blank" rel="noopener noreferrer"> opiti.ru@gmail.com </a></li>
                <li class="inf__info"><i class="fa-solid fa-clock "></i> 08:00-16:00</li>
            </ul>
        </nav>
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
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </nav>
        <nav class="nav_mobile">
            <ul class="nav_mobile__contenedor">
                <li><a href="{{ route('inicio') }}">Home </a> </li>
                <li><a href="{{ route('rusia') }}">Rusia</a> </li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a> </li>
                <li><a href="{{ route('contacto') }}">Contacto <i class="fa fa-long-arrow-right"
                            aria-hidden="true"></i></a>
                </li>
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

                <p> <img src="img/secretary.webp" width="50"> Hola, ¿en que podemos ayudarle? </p>

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
        <div class="informacion">
            <ul class="contenedor__informacion">
                <h3>Contacto</h3>
                <li class="inf__informacion"> <a href="https://wa.me/+79969434635"
                        target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-phone "></i> +7 (996) 943-46-35</a>
                <li class="inf__informacion"><a
                        href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwRrfkXNXCDgxMGhkZJPCRJWvlHSNQTQXMGtKbVFqsnQCsRrLPrdGpbxkXZxsvHTNzMLSGf "
                        target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-envelope "></i>  opiti.ru@gmail.com </a></li>
                <li class="inf__informacion"><i class="fa-solid fa-clock "></i> 08:00-16:00</li>
            </ul>

            <ul class="contenedor__informacion">
                <h3>Paginas de interes</h3>
                <li class="inf__informacion"><a href="{{ route('inicio') }}"><i class="fa-solid fa-house"></i> Home </a> </li>
                <li class="inf__informacion"><a href="{{ route('rusia') }}"><i class="fa-solid fa-map"></i> Rusia</a> </li>
                <li class="inf__informacion"><a href="{{ route('nosotros') }}"><i class="fa-solid fa-users"></i> Nosotros</a> </li>
                <li class="inf__informacion"><a href="{{ route('contacto') }}"><i class="fa-solid fa-address-card"></i> Contacto</a></li>
            </ul>
        </div>
        <p>Todos los derechos reservados 2023-2024 <br> opiti.ru</p>
    </footer>
    @stack('scripts')
    <script src="{{ asset('js/app.js?0.4') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    {{-- LIBRERIA AOS --}}
    <script src="{{ asset('js/librerias/AOS/AOS.js?0.1') }}"></script>
    <script>
        AOS.init();
    </script>

    </main>
</body>

</html>
