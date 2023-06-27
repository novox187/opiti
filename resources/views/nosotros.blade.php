@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/nosotros.css?0.1') }}">

@section('canonical')
<link rel="canonical" href="https://opiti.test/nosotros">
@endsection

@section('titulo')
    | Nosotros
@endsection

@section('contenido')
    <div class="nosotros">
        <div class="nosotros__resumen">
            <h1>¿Quienes somos?</h1>
            <p>
                Somos OPITI, una compañía fundada en Kursk con la misión emprendedora de
                compartir nuestra experiencia al estudiar en el extranjero y facilitar la admisión del
                aplicante.
                Iniciamos nuestras labores a partir del año 2023 y desde entonces brindamos a
                nuestros clientes asistencias profesionales con altos estándares de calidad y
                efectividad.
            </p>
        </div>
        <div class="nosotros__contenedor">
            <div class="nosotros__tarjeta"data-aos="fade-up" data-aos-duration="2000">
                <div class="nosotros__imagen">
                    <img class="nosotros__img" src="{{ asset('img/nosotros/harrison.webp') }}" alt="Harrison">
                </div>
                <div class="nosotros__contenedor__descripcion">
                    <p class="nosotros__descripcion">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta earum ipsum, non, iusto reiciendis
                        quas eaque fuga magnam expedita obcaecati tempora harum tenetur ut minima velit, atque neque
                        quisquam maiores?
                    </p>
                </div>
            </div>

            <div class="nosotros__tarjeta" data-aos="fade-up" data-aos-duration="2000">
                <div class="nosotros__imagen">
                    <img class="nosotros__img" src="{{ asset('img/nosotros/mileni.webp') }}" alt="Mileni">
                </div>
                <div class="nosotros__contenedor__descripcion">
                    <p class="nosotros__descripcion">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nulla excepturi animi saepe odit
                        cupiditate laboriosam quam expedita maiores. Iure enim explicabo iusto ducimus placeat tempore
                        pariatur eaque cum quae.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
