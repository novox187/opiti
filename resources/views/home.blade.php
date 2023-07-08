@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css?addColor') }}">
@endpush


@section('canonical')
    <link rel="canonical" href="https://opiti.test/">
@endsection

@section('titulo')
    Estudia en Ruisa de la mano de los mejores
@endsection
@section('contenido')
    <main>
        <h1 hidden> Estudios en rusia</h1>
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
                <div class="card__beneficio" data-aos="fade-up">
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
                <div class="card__beneficio" data-aos="fade-up" data-aos-delay="300">
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
                <div class="card__beneficio" data-aos="fade-up" data-aos-delay="400">
                    <div class="imagen__beneficio">
                        <img class="img__beneficio" src="img/home/visado.webp" alt="imagen inicial">
                    </div>
                    <div class="informacion__beneficio">
                        <h1 class="beneficio__titulo">Tramitación del visado.</h1>
                        <p class="beneficio__decripcion">Garantizamos la visa estudiantil.</p>
                    </div>
                </div>
                {{-- Curso de ruso con profesores rusos. --}}
                <div class="card__beneficio" data-aos="fade-up" data-aos-delay="500">
                    <div class="imagen__beneficio">
                        <img class="img__beneficio" src="img/home/profesores.webp" alt="imagen inicial">
                    </div>
                    <div class="informacion__beneficio">
                        <h1 class="beneficio__titulo">Curso de ruso con profesores nativos.</h1>
                        <p class="beneficio__decripcion">Opiti cuenta con la opción de un curso del idioma ruso que te dará
                            las bases necesarias para emprender tu viaje..</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- -------------------- --}}
        {{--      Beneficios      --}}
        {{-- -------------------- --}}

        <section class="requisitos">
            <div class="contenedor__reqisitos">
                <h2 class="titulo__requisitos">
                    Papeles necesarios para iniciar el proceso
                </h2>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                         Educación de alta calidad.
                    </h3>
                    <p class="texto__requisito">
                        Rusia es conocida por su sistema educativo riguroso y de alta calidad. Sus universidades y escuelas técnicas superiores se encuentran entre las mejores del mundo, ofreciendo programas académicos reconocidos internacionalmente.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Variedad de programas de estudio.
                    </h3>
                    <p class="texto__requisito">
                        Rusia cuenta con una amplia gama de programas de estudio en diferentes disciplinas, desde ciencias y tecnología hasta artes y humanidades. Esto permite a los estudiantes encontrar un programa que se ajuste a sus intereses y metas profesionales.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Costo de vida asequible.
                    </h3>
                    <p class="texto__requisito">
                         Aunque las tasas de matrícula pueden variar dependiendo de la universidad y el programa, en general, el costo de vida en Rusia es más bajo en comparación con otros países europeos o norteamericanos. Esto hace que sea más accesible para los estudiantes internacionales.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Experiencia multicultural.
                    </h3>
                    <p class="texto__requisito">
                         Estudiar en Rusia brinda la oportunidad de sumergirse en una cultura rica y diversa. Los estudiantes internacionales tienen la oportunidad de interactuar con personas de diferentes países y culturas, lo que les permite desarrollar habilidades interculturales y ampliar su perspectiva global.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Oportunidades laborales
                    </h3>
                    <p class="texto__requisito">
                        Rusia es un país con una economía en crecimiento y ofrece diversas oportunidades laborales para los graduados internacionales. Estudiar en Rusia puede proporcionar una ventaja competitiva en el mercado laboral global.
                    </p>
                </div>
                <div class="reqisito__requisitos" data-aos="fade-down">
                    <h3 class="titulo__requisito">
                        Patrimonio cultural e histórico
                    </h3>
                    <p class="texto__requisito">
                        Rusia es conocida por su rica historia y patrimonio cultural. Estudiar en este país brinda la oportunidad de explorar lugares históricos, visitar museos y experimentar la cultura rusa de primera mano.
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

        {{-- -------------------- --}}
        {{--         Gastos       --}}
        {{-- -------------------- --}}

        <section class="gastos">
            <h2 class="titulo__gastos" data-aos="fade-right">Gastos para vivir en Rusia.</h2>
            <div class="contenedor__gastos">
                <div class="gasto__gastos" data-aos="zoom-in">
                    <i class="icon__gastos fa-solid fa-house"></i>
                    <p class="descripcion__gastos"> Costo promedio vivienda mensual</p>
                    <strong class="precio__gastos">10$ dolares</strong>
                </div>
                <div class="gasto__gastos" data-aos="zoom-in">
                    <i class="icon__gastos fa-solid fa-burger "></i>
                    <p class="descripcion__gastos">Costo promedio alimentacion mensual</p>
                    <strong class="precio__gastos">150$ dolares</strong>
                </div>
                <div class="gasto__gastos" data-aos="zoom-in">
                    <i class="icon__gastos fa-solid fa-building-columns"></i>
                    <p class="descripcion__gastos">Costo promedio semestral de carrera</p>
                    <strong class="precio__gastos">980$ dolares</strong>
                </div>
                <div class="gasto__gastos" data-aos="zoom-in">
                    <i class="icon__gastos fa-solid fa-staff-snake"></i>
                    <p class="descripcion__gastos">Costo promedio seguro médico anual</p>
                    <strong class="precio__gastos">80$ dolares</strong>
                </div>
                <div class="gasto__gastos" data-aos="zoom-in">
                    <i class="icon__gastos fa-solid fa-building-user"></i>
                    <p class="descripcion__gastos">Costo promedio de apartamento</p>
                    <strong class="precio__gastos">120$ dolares</strong>
                </div>
                <div class="gasto__gastos" data-aos="zoom-in">
                    <i class="icon__gastos fa-solid fa-ruble-sign"></i>
                    <p class="descripcion__gastos">Los precios barian dependiendo de la ciudad y del cambio de la moneda(rublo)</p>
                </div>

            </div>
            
        </section>
        @push('scripts')
            {{-- Libreria PARTICLES --}}
            <script src="{{ asset('js/librerias/particles/particles.min.js') }}"></script>
            <script src="{{ asset('js/librerias/particles/particulas.js') }}"></script>
            {{-- LIBRERIA TYPED --}}
            <script src="{{ asset('js/librerias/typed/typed.js') }}"></script>
            <script src="{{ asset('js/librerias/typed/typed_main.js?0.2') }}"></script>
        @endpush
    @endsection
