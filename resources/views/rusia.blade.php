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
    <Section name='rusia'>
        <div class="rusia">
            <div class="rusia__eslogan">
                <div class="rusia__slogan__center" data-aos="fade-right">
                    <h1 class="rusia__titulo">Conoce un poco de la belleza de Rusia.</h1>
                    <p class="rusia__descripcion">Rusia, el país más grande del mundo, ocupa una décima parte de toda la
                        tierra en la Tierra. Abarca 11
                        zonas horarias en dos continentes (Europa y Asia) y tiene costas en tres océanos (el Atlántico, el
                        Pacífico y el Ártico). </br></br>
                        El paisaje ruso varía desde el desierto hasta la costa congelada, desde altas montañas hasta
                        pantanos gigantes. Gran parte de Rusia está formada por llanuras onduladas y sin árboles llamadas
                        estepas. Siberia, que ocupa tres cuartas partes de Rusia, está dominada por extensos bosques de
                        pinos llamados taigas.</br></br>

                        Rusia tiene alrededor de 100.000 ríos, incluidos algunos de los más largos y poderosos del mundo.
                        También tiene muchos lagos, incluidos los dos más grandes de Europa: Ladoga y Onega. El lago Baikal
                        en Siberia contiene más agua que cualquier otro lago en la Tierra.
                    </p>
                </div>

            </div>

            <div class="rusia__img__contenedor" data-aos="fade-left">
                <img class="rusia__img" src="img/rusia/inicio2.webp" alt="imagen inicial">
            </div>
        </div>
    </Section>

    <section>
        <div class="contenedor">
            <!-- RUSIA -->
            <div class="carousel  izquierda"data-aos="fade-up">

                <div class="carousel__contenedor rusia__contenedor">

                    <button aria-label="Anterior" class="carousel__anterior rusia__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div class="carousel__lista rusia__lista">
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia1.webp" alt="Catedral de San Basilio en Moscú">
                            <p>Catedral de San Basilio en Moscú</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia2.webp" alt="Moscú city en Moscú">
                            <p>Moscú city en Moscú</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia3.webp" alt="Madre Patria en Volgogrado">
                            <p>Madre Patria en Volgogrado</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia4.webp" alt="Museo del Hermitage en San Petersburgo">
                            <p>Museo del Hermitage en San Petersburgo</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia5.webp" alt="Centro Comercial Gum en Moscú">
                            <p>Centro Comercial Gum en Moscú</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia7.webp" alt="Puente del palacio en San Petersburgo">
                            <p>Puente del palacio en San Petersburgo</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia8.webp" alt="Parque 300 años en San Petersburgo">
                            <p>Parque 300 años en San Petersburgo</p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia9.webp" alt="Mezquita Kul Sharif en Kazan">
                            <p>Mezquita Kul Sharif en Kazan </p>
                        </div>
                        <div class="carousel__elemento rusia__elemento">
                            <img src="img/rusia/rusia10.webp" alt="Parque nacional Ládoga Skerries en Karelia">
                            <p>Parque nacional Ládoga Skerries en Karelia</p>
                        </div>
                    </div>
                    <div role="tablist" class="carousel__indicadores rusia__indicadores"></div>

                    <button aria-label="Siguiente" class="carousel__siguiente rusia__siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>


                </div>

                <div class=" carousel__info ">
                    <div class="carousel__center_informacion ">
                        <h1>Lugares destacados de Rusia</h1>
                        <p>Rusia se destaca por ser el país más extenso del mundo y se ubica entre el continente europeo y
                            asiático. El idioma oficial es el ruso y se maneja el rublo como moneda. Su capital es Moscú y
                            cuenta con una gran diversidad de nacionalidades que migran al país anualmente por lo que el
                            idioma inglés es bastante común entre sus habitantes.
                        </p>
                    </div>
                </div>

            </div>

            <!-- GASTRONOMIA -->
            <!-- DERECHA -->
            <div class="carousel gastronomia derecha" data-aos="fade-up">
                <div class="carousel__contenedor gastronomia__contenedor">
                    <button aria-label="Anterior" class="carousel__anterior gastronomia__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div class="carousel__lista gastronomia__lista">
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia1.webp" alt="Пельмени / Pelmeni">
                            <p>Пельмени / Pelmeni</p>
                        </div>
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia2.webp" alt="Гречка / Alforfón">
                            <p>Гречка / Alforfón</p>
                        </div>
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia3.webp" alt="Оливье / Ensalada rusa">
                            <p>Оливье / Ensalada rusa</p>
                        </div>
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia4.webp" alt="Квас / Kvas">
                            <p>Квас / Kvas</p>
                        </div>

                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia5.webp" alt="Желе c мясом / Gelatina con carne">
                            <p>Желе c мясом / Gelatina con carne</p>
                        </div>

                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia6.webp" alt="Борщ / Borch">
                            <p>Борщ / Borch</p>
                        </div>
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia7.webp" alt="Сырники / Syrniki">
                            <p>Сырники / Syrniki</p>
                        </div>
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia8.webp" alt="Солянка / Solyanka">
                            <p>Солянка / Solyanka</p>
                        </div>
                        <div class="carousel__elemento gastronomia__elemento">
                            <img src="img/rusia/gastronomia/gastronomia9.webp" alt="Вяленая рыба / Pescado seco">
                            <p>Вяленая рыба / Pescado seco</p>
                        </div>
                    </div>

                    <div role="tablist" class="carousel__indicadores gastronomia__indicadores"></div>

                    <button aria-label="Siguiente" class="carousel__siguiente gastronomia__siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>


                </div>

                <div class=" carousel__info carousel__info_derecha">
                    <div class="carousel__center_informacion carousel__center_informacion_derecha">
                        <h1>Gastronomia Rusa</h1>
                        <p>Al ser un pais multicultural se puede probar platos diversos, y muchas de las veces
                            bastante exóticos, de muchos pueblos: empezando con el dulce tártaro, chak-chak (postre de
                            masa con miel) hasta la stroganina de Yakutia (pescado o carne recién congelados). Pero en
                            cualquier rincón del país puedes encontrar los platos típicos de la cocina rusa.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- CLIMA -->
        <!-- DERECHA -->
        <div class="carousel clima " data-aos="fade-up">
            <div class="carousel__contenedor clima__contenedor">
                <button aria-label="Anterior" class="carousel__anterior clima__anterior">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="carousel__lista clima__lista">
                    <div class="carousel__elemento clima__elemento">
                        <img src="img/rusia/clima/clima1.webp" alt="Зима / Invierno">
                        <p>Зима / Invierno</p>
                    </div>
                    <div class="carousel__elemento clima__elemento">
                        <img src="img/rusia/clima/clima2.webp" alt="Весна / Primavera">
                        <p>Весна / Primavera</p>
                    </div>
                    <div class="carousel__elemento clima__elemento">
                        <img src="img/rusia/clima/clima4.webp" alt="Лето / Verano">
                        <p>Лето / Verano</p>
                    </div>
                    <div class="carousel__elemento clima__elemento">
                        <img src="img/rusia/clima/clima3.webp" alt="Осень / Otoño">
                        <p>Осень / Otoño</p>
                    </div>
                </div>

                <button aria-label="Siguiente" class="carousel__siguiente clima__siguiente">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <div role="tablist" class="carousel__indicadores clima__indicadores"></div>
            </div>

            <div class=" carousel__info ">
                <div class="carousel__center_informacion">
                    <h1>Clima</h1>
                    <p>La mayor parte del país tiene el clima moderado que se caracteriza por un tiempo bastante agradable.
                        Según el informe del Centro Hidrometeorológico de Rusia, en su mayoría las temperaturas de Rusia van
                        subiendo, por ejemplo, las famosas heladas en la parte Central del país últimamente no son muy
                        frecuentes.</p>
                </div>
            </div>

        </div>

        <!-- TRANSPORTE -->
        <!-- IZQUIERDA -->
        <div class="carousel transporte derecha" data-aos="fade-up">

            <div class="carousel__contenedor transporte__contenedor">

                <button aria-label="Anterior" class="carousel__anterior transporte__anterior">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="carousel__lista transporte__lista">
                    <div class="carousel__elemento transporte__elemento">
                        <img src="img/rusia/transporte/transporte1.webp" alt="Поезд / Tren">
                        <p>Поезд / Tren</p>
                    </div>
                    <div class="carousel__elemento transporte__elemento">
                        <img src="img/rusia/transporte/transporte2.webp" alt="Автобус / Bus">
                        <p>Автобус / Bus</p>
                    </div>
                    <div class="carousel__elemento transporte__elemento">
                        <img src="img/rusia/transporte/transporte3.webp" alt="Такси / Taxi">
                        <p>Самокат / Scooter</p>
                    </div>
                    <div class="carousel__elemento transporte__elemento">
                        <img src="img/rusia/transporte/transporte4.webp" alt="Такси / Taxi">
                        <p>Такси / Taxi</p>
                    </div>
                    <div class="carousel__elemento transporte__elemento">
                        <img src="img/rusia/transporte/transporte5.webp" alt="Поезд / Tren">
                        <p>Поезд / Tren</p>
                    </div>
                </div>

                <button aria-label="Siguiente" class="carousel__siguiente transporte__siguiente">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <div role="tablist" class="carousel__indicadores transporte__indicadores"></div>

            </div>

            <div class=" carousel__info carousel__info_derecha">
                <div class="carousel__center_informacion carousel__center_informacion_derecha">
                    <h1>Transporte</h1>
                    <p>El transporte en Rusia es confortable y moderno, pero sobretodo cuenta con la facilidad de realizar
                        el pago online o personalmente con tarjeta y cuenta con aplicaciones para posibilitar el traslado de
                        la persona, claro que pagar en efectivo sigue siendo una opción descartable.</p>
                </div>
            </div>

        </div>
    </section>
@endsection
