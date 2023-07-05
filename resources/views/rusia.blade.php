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
    {{-- ------------ --}}
    {{--    GALERIA   --}}
    {{-- ------------ --}}
    <section class="galeria">
        <center><h1>Lugares top de Rusia</h1></center>
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
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia3.webp') }}" alt="" >
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
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia7.webp') }}" alt="" >
                        <h4 class="nombre">Puente del palacio en San Petersburgo</h4>
                    </div>
                    <div class="hex" data-aos="fade-up-left">
                        <img class="img__galeria" src="{{ asset('img/rusia/rusia8.webp') }}" alt="" >
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
                <img class="img__mobile" src="{{ asset('img/rusia/rusia3.webp') }}" alt="" >
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
                <img class="img__mobile" src="{{ asset('img/rusia/rusia7.webp') }}" alt="" >
                <h4 class="nombre__mobile">Puente del palacio en San Petersburgo</h4>
            </div>
            <div class="item__mobile" data-aos="fade-up-left">
                <img class="img__mobile" src="{{ asset('img/rusia/rusia8.webp') }}" alt="" >
                <h4 class="nombre__mobile">Parque 300 años en San Petersburgo</h4>
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
