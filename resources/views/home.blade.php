@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/home.css?0.3') }}">
@endpush


@section('canonical')
    <link rel="canonical" href="https://opiti.test/">
@endsection

@section('titulo')
    | Estudia en Ruisa de la mano de los mejores
@endsection
@section('contenido')
    <main>
        {{-- -------------------- --}}
        {{--       INICIO         --}}
        {{-- -------------------- --}}

        <Section name='inicio'>
            <div id="particles-js"></div>

            <div class="inicio">
                <div class="inicio__eslogan">
                    <div class="inicio__eslogan__center" data-aos="fade-right">
                        <h1><span class="typed"> </span> </h1>
                        <p>Simplificamos el proceso de admisión y visado para que puedas cumplir tu sueño de estudiar en
                            Rusia</p>
                    </div>

                </div>

                <div class="inicio__img__home" data-aos="fade-left">
                    <img class="inicio__imagen__home" src="img/home/rusia.webp" alt="imagen inicial">
                </div>
            </div>

        </Section>

        {{-- -------------------- --}}
        {{--      Beneficios      --}}
        {{-- -------------------- --}}

        <section class="beneficios" name='beneficios'>
            <div class="contenedor__beneficios">
                {{-- Asesoría personalizada. --}}
                <div class="card__beneficio" data-aos="fade-right" data-aos-delay="300">
                    <div class="imagen__beneficio">
                        <img class="img__beneficio" src="img/home/acesoria.webp" alt="imagen inicial">
                    </div>
                    <div class="informacion__beneficio">
                        <h1 class="beneficio__titulo">Asesoría personalizada.</h1>
                        <p class="beneficio__decripcion">En Opiti te guiamos de forma personalizada para que puedas elegir
                            el programa académico que mejor se adapte a tus necesidades y requerimientos.</p>
                    </div>
                </div>
                {{-- Gestión del proceso de admisión. --}}
                <div class="card__beneficio" data-aos="fade-right" data-aos-delay="400">
                    <div class="imagen__beneficio">
                        <img class="img__beneficio" src="img/home/admision.webp" alt="imagen inicial">
                    </div>
                    <div class="informacion__beneficio">
                        <h1 class="beneficio__titulo">Gestión del proceso de admisión.</h1>
                        <p class="beneficio__decripcion">Nos encargamos de toda la documentación precisa para que puedas ser
                            admitido en una universidad rusa.</p>
                    </div>
                </div>
                {{-- Tramitación del visado. --}}
                <div class="card__beneficio" data-aos="fade-left" data-aos-delay="400">
                    <div class="imagen__beneficio">
                        <img class="img__beneficio" src="img/home/visado.webp" alt="imagen inicial">
                    </div>
                    <div class="informacion__beneficio">
                        <h1 class="beneficio__titulo">Tramitación del visado.</h1>
                        <p class="beneficio__decripcion">Garantizamos la visa estudiantil.</p>
                    </div>
                </div>
                {{-- Curso de ruso con profesores rusos. --}}
                <div class="card__beneficio" data-aos="fade-left" data-aos-delay="300">
                    <div class="imagen__beneficio">
                        <img class="img__beneficio" src="img/home/profesores.webp" alt="imagen inicial">
                    </div>
                    <div class="informacion__beneficio">
                        <h1 class="beneficio__titulo">Curso de ruso con profesores rusos.</h1>
                        <p class="beneficio__decripcion">Opiti cuenta con la opción de un curso del idioma ruso que te dará
                            las bases necesarias para emprender tu viaje..</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- -------------------- --}}
        {{--      Requisitos      --}}
        {{-- -------------------- --}}

        <section class="requisitos">
            <div class="contenedor__reqisitos">
                <h2 class="titulo__requisitos">
                    Papeles necesarios para iniciar el proceso
                </h2>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Que carrera quieres seguir.
                    </h3>
                    <p class="texto__requisito">
                        Debes tener una idea de que carrera quiere seguir, ya que de eso dependera el costo de su estudio.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        copia del documentos
                    </h3>
                    <p class="texto__requisito">
                        Necesitamos una copia de todas las sabanas de notas desde Octavo de colegio hasta tercero de
                        bachillerato.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Pasaporte
                    </h3>
                    <p class="texto__requisito">
                        Se requiere de un pasaporte con una fecha de caducidad minima de 3 años.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Pasaporte Escaneado
                    </h3>
                    <p class="texto__requisito">
                        Tambien necesitaremos el pasaporte escaneado para hacer la traduccion de el.
                    </p>
                </div>
            </div>
        </section>

        {{-- -------------------- --}}
        {{--       Contacto       --}}
        {{-- -------------------- --}}

        <section class="contacto">
            <div class="contenedor__contacto">
                <video onloadedmetadata="this.muted.true" autoplay loop muted class="video__contacto">
                    <source src="{{ asset('videos/contacto2.mp4') }}" type="video/mp4">
                </video>
                <div class="info__contatco">
                    <h2 class="titulo__contacto">Empieza una Tu carrera Universitaria en el extranjero</h2>
                    <p class="texto__contacto">ponte en contatco con nosotros</p>
                    <a class="boton__contacto" href="{{ route('contacto') }}">Contacto</a>
                </div>
            </div>
        </section>
        {{-- Libreria PARTICLES --}}
        <script src="{{ asset('js/librerias/particles/particles.min.js') }}"></script>
        <script src="{{ asset('js/librerias/particles/particulas.js') }}"></script>
        {{-- LIBRERIA TYPED --}}
        <script src="{{ asset('js/librerias/typed/typed.js') }}"></script>
        <script src="{{ asset('js/librerias/typed/typed_main.js?0.2') }}"></script>
    @endsection
