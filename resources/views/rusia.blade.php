@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/rusia.css?0.1') }}">
@endpush


@section('canonical')
    <link rel="canonical" href="https://opiti.test/rusia">
@endsection

@section('titulo')
    | Rusia
@endsection

@section('contenido')
    {{-- ------------ --}}
    {{--      MAP     --}}
    {{-- ------------ --}}
    <section class="mapa" id="mapa">
        <div id="particles-js"></div>
        <div class="map" id="map"></div>
    </section>
    {{-- ------------ --}}
    {{--  DESCRIPCION --}}
    {{-- ------------ --}}
    <section class="rusia__contenido" id="descripcion">
        <div class="contenedor__descripcion">
            <div class="rusia">
                <div class="rusia__eslogan">
                    <div class="rusia__slogan__center" data-aos="fade-right">
                        <h1 class="rusia__titulo">Conoce un poco de la belleza de Rusia.</h1>
                        <p class="rusia__descripcion">Rusia, el país más grande del mundo, ocupa una décima parte de toda la
                            tierra en la Tierra. Abarca 11
                            zonas horarias en dos continentes (Europa y Asia) y tiene costas en tres océanos (el Atlántico,
                            el
                            Pacífico y el Ártico). </br></br>
                            El paisaje ruso varía desde el desierto hasta la costa congelada, desde altas montañas hasta
                            pantanos gigantes. Gran parte de Rusia está formada por llanuras onduladas y sin árboles
                            llamadas
                            estepas. Siberia, que ocupa tres cuartas partes de Rusia, está dominada por extensos bosques de
                            pinos llamados taigas.</br></br>

                            Rusia tiene alrededor de 100.000 ríos, incluidos algunos de los más largos y poderosos del
                            mundo.
                            También tiene muchos lagos, incluidos los dos más grandes de Europa: Ladoga y Onega. El lago
                            Baikal
                            en Siberia contiene más agua que cualquier otro lago en la Tierra.
                        </p>
                    </div>
                </div>

                <div class="rusia__img__contenedor" data-aos="fade-left">
                    <img class="rusia__img" src="img/rusia/inicio2.webp" alt="imagen inicial">
                </div>
            </div>

        </div>
    </section>
    {{--    ------------   --}}
    {{--    GALERIA RUSIA  --}}
    {{--    ------------   --}}
    <section class="galeria">
        <center>
            <h1>Lugares top de Rusia</h1>
        </center>
        <div class="contenedor__galeria">
            <div class="hexagon-gallery">
                <div class="hexagon">
                    <div class="hex" data-aos="fade-down-right">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia1.webp') }}" alt="">
                        <h4 class="nombre">Catedral de San Basilio en Moscú</h4>
                    </div>
                    <div class="hex" data-aos="fade-down-left">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia2.webp') }}" alt="">
                        <h4 class="nombre">Moscú city en Moscú</h4>
                    </div>
                </div>
                <div class="hexagon">
                    <div class="hex" data-aos="fade-right">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia3.webp') }}" alt="">
                        <h4 class="nombre">Madre Patria en Volgogrado</h4>
                    </div>
                    <div class="hex" data-aos="zoom-in" data-aos-delay="200">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia4.webp') }}" alt="">
                        <h4 class="nombre">Museo del Hermitage en San Petersburgo</h4>
                    </div>
                    <div class="hex" data-aos="fade-left">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia5.webp') }}" alt="">
                        <h4 class="nombre">Centro Comercial Gum en Moscú</h4>
                    </div>
                </div>
                <div class="hexagon">
                    <div class="hex" data-aos="fade-up-right">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia7.webp') }}" alt="">
                        <h4 class="nombre">Puente del palacio en San Petersburgo</h4>
                    </div>
                    <div class="hex" data-aos="fade-up-left">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia8.webp') }}" alt="">
                        <h4 class="nombre">Parque 300 años en San Petersburgo</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="item__mobile" data-aos="fade-down-right">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia1.webp') }}" alt="">
                <h4 class="nombre__mobile">Catedral de San Basilio en Moscú</h4>
            </div>
            <div class="item__mobile" data-aos="fade-down-left">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia2.webp') }}" alt="">
                <h4 class="nombre__mobile">Moscú city en Moscú</h4>
            </div>
            <div class="item__mobile" data-aos="fade-right">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia3.webp') }}" alt="">
                <h4 class="nombre__mobile">Madre Patria en Volgogrado</h4>
            </div>
            <div class="item__mobile" data-aos="zoom-in" data-aos-delay="200">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia4.webp') }}" alt="">
                <h4 class="nombre__mobile">Museo del Hermitage en San Petersburgo</h4>
            </div>
            <div class="item__mobile" data-aos="fade-left">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia5.webp') }}" alt="">
                <h4 class="nombre__mobile">Centro Comercial Gum en Moscú</h4>
            </div>
            <div class="item__mobile" data-aos="fade-up-right">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia7.webp') }}" alt="">
                <h4 class="nombre__mobile">Puente del palacio en San Petersburgo</h4>
            </div>
            <div class="item__mobile" data-aos="fade-up-left">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia8.webp') }}" alt="">
                <h4 class="nombre__mobile">Parque 300 años en San Petersburgo</h4>
            </div>
        </div>
    </section>

    {{--  -------------------  --}}
    {{--  GALERIA GASTRONOMIA  --}}
    {{--  -------------------  --}}
    <section id="gastronomia">

        <h1 class="titulo__gastronomia">COMIDAS TIPICAS DE RUSIA</h1>

        <div class="contenedor__gastronomia">
            {{-- PELMENI --}}
            <div class="imagen__gastronomia" id="imagen__gastronomia1">

                <div class="expancion__img" id="expand1" onclick="cambiarTamano(1)"><i
                        class="fa-solid fa-maximize" id="icon__expand1"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia1.webp') }}"
                    alt="Пельмени / Pelmeni">
                <h4 class="nombre__gastronomia " id="nombre__gastronomia1" onclick="mostrarInformacion(1)"> Пельмени /
                    Pelmeni <span class="mas fa-fade"> mas..</span></h4>
                <p class="inf__gastronomia" id="inf__gastronomia1"><i
                        class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(1)"></i>
                    Пельмени / Pelmeni <br> <br>
                    No se conocen estudios serios
                    acerca del origen de este plato, pero es una creencia común que su origen se establece en Udmurtia es
                    donde se denominaban como pelnyan, literalmente "oreja de pan" en el idioma nativo de la comarca.</p>
            </div>
            {{-- ALFORFON --}}
            <div class="imagen__gastronomia" id="imagen__gastronomia2">

                <div class="expancion__img" id="expand2" onclick="cambiarTamano(2)"><i class="fa-solid fa-maximize" id="icon__expand2"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia2.webp') }}"
                    alt="Гречка / Alforfón">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia2" onclick="mostrarInformacion(2)"> Гречка /
                    Alforfón <span class="mas fa-fade"> mas..</span> </h4>
                <p class="inf__gastronomia" id="inf__gastronomia2"> <i
                        class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(2)"></i>
                    Гречка / Alforfón <br><br>
                    El alforfón, más conocido como trigo sarraceno, es una planta
                    herbácea de la familia de las poligonáceas que produce un tipo de grano de consumo humano y animal. Pese
                    a ser considerado un cereal, no pertenece a la familia de las gramíneas, aun cuando su nombre pueda
                    indicar lo contrario. Por tanto, no es un cereal. </p>
            </div>
            {{-- ENSALADA RUSA --}}
            <div class="imagen__gastronomia" id="imagen__gastronomia3">

                <div class="expancion__img" id="expand3" onclick="cambiarTamano(3)"><i class="fa-solid fa-maximize" id="icon__expand3"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia3.webp') }}"
                    alt="Оливье / Ensalada rusa">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia3" onclick="mostrarInformacion(3)"> Оливье /
                    Ensalada rusa <span class="mas fa-fade"> mas..</span></h4>
                <p class="inf__gastronomia" id="inf__gastronomia3"> <i
                        class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(3)"></i>
                    Оливье / Ensalada rusa <br><br>
                    La teoría que le otorga a Rusia el origen de este plato se basa en la figura poco rusa de Lucien Olivier
                    (1838-1883), un cocinero belga de origen francés, que se hizo famoso en Moscú gracias a dispensar una
                    ensalada en el restaurante -El Hermitage- que abrió en torno a 1860.
                </p>
            </div>
            <div class="imagen__gastronomia" id="imagen__gastronomia4">

                <div class="expancion__img" id="expand4" onclick="cambiarTamano(4)"><i class="fa-solid fa-maximize" id="icon__expand4"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia4.webp') }}"
                    alt="Квас / Kvas">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia4"onclick="mostrarInformacion(4)"> Квас / Kvas
                    <span class="mas fa-fade"> mas..</span>
                </h4>
                <p class="inf__gastronomia" id="inf__gastronomia4"> <i
                        class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(4)"></i>
                    Квас / Kvas <br><br>
                    Es una bebida tradicional eslava y báltica. La bebida es dulce-ácida y se elabora a base de harina y
                    malta (centeno, cebada) o de pan de centeno seco, a veces con la adición de hierbas buenas, miel,
                    especias, también se prepara con remolacha, fruta, flores, hierbas. El kvas no solo se utiliza como
                    bebida, sino que también es la base de las sopas frías clásicas de la cocina rusa, conocidas como
                    "okroshka".
                </p>
            </div>
            <div class="imagen__gastronomia" id="imagen__gastronomia5">

                <div class="expancion__img" id="expand5" onclick="cambiarTamano(5)"><i class="fa-solid fa-maximize" id="icon__expand5"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia5.webp') }}"
                    alt="Желе c мясом / Gelatina con carne">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia5"onclick="mostrarInformacion(5)"> Желе c мясом /
                    Gelatina con carne <span class="mas fa-fade"> mas..</span> </h4>
                <p class="inf__gastronomia" id="inf__gastronomia5"> <i
                        class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(5)"></i>
                    Желе c мясом / Gelatina con carne <br><br>
                    Es un plato sustancioso de caldo de carne que se espesa hasta obtener una masa gelatinosa al enfriarse
                    con trozos de carne . Conocido desde el siglo XVI . En la cocina rusa, es un aperitivo frío popular en
                    la mesa festiva. Por lo general, la jalea se sirve con rábano picante o mostaza .
                </p>
            </div>
            {{--             <div class="imagen__gastronomia">
                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia6.webp') }}"
                    alt="Борщ / Borch">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia6"onclick="mostrarInformacion(6)"> Борщ / Borch
                    <span class="mas fa-beat"> mas..</span> </h4>
                <p class="inf__gastronomia" id="inf__gastronomia6"> <i
                        class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(6)"></i>
                </p>
            </div> --}}
            <div class="imagen__gastronomia" id="imagen__gastronomia7">

                <div class="expancion__img" id="expand7" onclick="cambiarTamano(7)"><i class="fa-solid fa-maximize" id="icon__expand7"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia7.webp') }}"
                    alt="Сырники / Syrniki">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia7"onclick="mostrarInformacion(7)"> Сырники /
                    Syrniki <span class="mas fa-fade"> mas..</span> </h4>
                <p class="inf__gastronomia" id="inf__gastronomia7">
                    <i class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(7)"></i>
                    Сырники / Syrniki <br><br>
                    Los syrniki (сырники) son un tipo de panqueques de origen ruso y ucraniano, que tradicionalmente se
                    sirven para desayunar. También se pueden encontrar con el nombre de tvorozhniki (творо́жники) en
                    referencia al queso Tvaroh (Творо́г) que se utiliza para prepararlos.
                </p>
            </div>
            <div class="imagen__gastronomia" id="imagen__gastronomia8">

                <div class="expancion__img" id="expand8" onclick="cambiarTamano(8)"><i class="fa-solid fa-maximize" id="icon__expand8"></i></div>
            
                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia8.webp') }}"
                    alt="Солянка / Solyanka">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia8"onclick="mostrarInformacion(8)"> Солянка /
                    Solyanka <span class="mas fa-fade"> mas..</span> </h4>
                <p class="inf__gastronomia" id="inf__gastronomia8">
                    <i class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(8)"></i>
                    Солянка / Solyanka <br><br>
                    Solianka o soljanka (en ruso y ucraniano соля́нка) es una especie de sopa densa de carne o pescado con
                    vegetales encurtidos, muy especiada típica de la cocina rusa y de países de la ex-unión soviética como
                    Ucrania y Letonia. Puede que fuera popular en Ucrania ya en el siglo xvii.
                </p>
            </div>
            <div class="imagen__gastronomia" id="imagen__gastronomia9">

                <div class="expancion__img" id="expand9" onclick="cambiarTamano(9)"><i class="fa-solid fa-maximize" id="icon__expand9"></i></div>

                <img class="img__gastronomia" src="{{ asset('img/rusia/gastronomia/gastronomia9.webp') }}"
                    alt="Вяленая рыба / Pescado seco">
                <h4 class="nombre__gastronomia" id="nombre__gastronomia9"onclick="mostrarInformacion(9)"> Вяленая рыба /
                    Pescado seco <span class="mas fa-fade"> mas..</span> </h4>
                <p class="inf__gastronomia" id="inf__gastronomia9">
                    <i class="icon__inf fa-solid fa-xmark"onclick="ocultarInformacion(9)"></i>
                    Вяленая рыба / Pescado seco <br><br>
                    El pescado tradicional en la cocina rusa no es tanto del mar como del agua dulce: lucio, carpa,
                    esturión, perca, trucha, salmón.
                    los rusos acostumbran comer pescado seco mientras comparten en bares con amigos.
                </p>
            </div>
        </div>
    </section>

    @push('scripts')
        {{-- Libreria PARTICLES --}}
        <script src="{{ asset('js/librerias/particles/particles.min.js') }}"></script>
        <script src="{{ asset('js/librerias/particles/particulas.js') }}"></script>
        {{-- MAP --}}
        <script src="{{ asset('js/librerias/map/mapdata.js') }}"></script>
        <script src="{{ asset('js/librerias/map/worldmap.js') }}"></script>
    @endpush
@endsection
