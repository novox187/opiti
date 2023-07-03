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
                    <h3 class="nosotros__nombre">Ases. Harrison Ochoa</h3>
                    <p class="nosotros__descripcion">
                        Mienbro y cofundador de Opiti.
                    </p>
                </div>
            </div>

            <div class="nosotros__tarjeta" data-aos="fade-up" data-aos-duration="2000">
                <div class="nosotros__imagen">
                    <img class="nosotros__img" src="{{ asset('img/nosotros/mileni.webp') }}" alt="Mileni">
                </div>
                <div class="nosotros__contenedor__descripcion">
                    <h3 class="nosotros__nombre">Lcda. Mileny Abarca </h3>
                    <p class="nosotros__descripcion">
                        Mienbro y cofundadora de Opiti.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
