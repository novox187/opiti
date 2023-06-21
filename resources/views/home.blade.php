@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@section('contenido')
<main>

    <Section name='inicio'>

        <div class="inicio">
            <div class="inicio__eslogan">
                <div class="inicio__eslogan__center">
                    <h1>Estudia en corea con la ayuda de Opiti.</h1>
                    <p>Simplificamos el proceso de admisión y visado para que puedas cumplir tu sueño de estudiar en Rusia</p>
                </div>

            </div>

            <div class="inicio__img__home">
                <img class="inicio__imagen__home" src="img/home/rusia.jpg" alt="imagen inicial">
            </div>
        </div>

    </Section>

    <section name='beneficios'>
        <div class="beneficios">

            <!--Asesoría personalizada  -->
            <!-- IZQUIERDA -->

            <div class="beneficios__contenedor">
                <div class="beneficios__informacion">
                    <div class="beneficios__informacion__center">
                        <h1 class="beneficio__titulo">Asesoría personalizada.</h1>
                        <p class="beneficio__decripcion">En Opiti te guiamos de forma personalizada para que puedas elegir el programa académico que mejor se adapte a tus necesidades y requerimientos.</p>
                    </div>
                </div>

                <div class="beneficios__container__img">
                    <img class="beneficios__img" src="img/home/acesoria.jpg" alt="imagen inicial">
                </div>
            </div>

            <!-- Gestión del proceso de admisión. -->
            <!-- DERECHA -->

            <div class=" beneficios__contenedor beneficios__contenedor__derecha ">
                <div class="beneficios__informacion beneficios__informacion__derecha">
                    <div class="beneficios__informacion__center">
                        <h1 class="beneficio__titulo">Gestión del proceso de admisión.</h1>
                        <p class="beneficio__decripcion">Nos encargamos de toda la documentación precisa para que puedas ser admitido en una universidad rusa.</p>
                    </div>
                </div>

                <div class="beneficios__container__img beneficios__container__img__derecha">
                    <img class="beneficios__img" src="img/home/admision.jpg" alt="imagen inicial">
                </div>
            </div>

            <!--Tramitación del visado.  -->
            <!-- IZQUIERDA -->

            <div class="beneficios__contenedor">
                <div class="beneficios__informacion ">
                    <div class="beneficios__informacion__center">
                        <h1 class="beneficio__titulo">Tramitación del visado.</h1>
                        <p class="beneficio__decripcion">Garantizamos la visa estudiantil.</p>
                    </div>
                </div>

                <div class="beneficios__container__img">
                    <img class="beneficios__img" src="img/home/visado.jpg" alt="imagen inicial">
                </div>
            </div>

            <!-- Opción a un curso de ruso en español con profesores rusos. -->
            <!-- DERECHA -->

            <div class="beneficios__contenedor beneficios__contenedor__derecha">
                <div class="beneficios__informacion beneficios__informacion__derecha">
                    <div class="beneficios__informacion__center">
                        <h1 class="beneficio__titulo">Opción a un curso de ruso en español con profesores rusos.</h1>
                        <p class="beneficio__decripcion">Opiti cuenta con la opción de un curso del idioma ruso que te dará las bases necesarias para emprender tu viaje.</p>
                    </div>
                </div>

                <div class="beneficios__container__img beneficios__container__img__derecha">
                    <img class="beneficios__img" src="img/home/profesores.jpg" alt="imagen inicial">
                </div>
            </div>

            <!--¿Qué sigue?  -->
            <!-- IZQUIERDA -->

            <div class="beneficios__contenedor">
                <div class="beneficios__informacion ">
                    <div class="beneficios__informacion__center">
                        <h1 class="beneficio__titulo ">¿Qué sigue?</h1>
                        <p class="beneficio__decripcion">Ayudamos al estudiante a establecerse en la ciudad de destino y estaremos a su servicio incluso después de haber concluído todo el proceso.</p>
                    </div>
                </div>

                <div class="beneficios__container__img">
                    <img class="beneficios__img beneficios__img__center" src="img/home/quesigue.jpg" alt="imagen inicial">
                </div>
            </div>


        </div>
    </section>

</main>
@endsection