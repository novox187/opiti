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
    <section class="mapa" id="mapa">
        <div class="map" id="map"></div>
    </section>
    <section class="rusia__descripcion" id="descripcion">
        <div class="contenedor__descripcion">
            <p>Rusia, el país más grande del mundo, ocupa una décima parte de toda la tierra en la Tierra. Abarca 11 zonas
                horarias en dos continentes (Europa y Asia) y tiene costas en tres océanos (el Atlántico, el Pacífico y el
                Ártico).

                El paisaje ruso varía desde el desierto hasta la costa congelada, desde altas montañas hasta pantanos
                gigantes. Gran parte de Rusia está formada por llanuras onduladas y sin árboles llamadas estepas. Siberia,
                que ocupa tres cuartas partes de Rusia, está dominada por extensos bosques de pinos llamados taigas.

                Rusia tiene alrededor de 100.000 ríos, incluidos algunos de los más largos y poderosos del mundo. También
                tiene muchos lagos, incluidos los dos más grandes de Europa: Ladoga y Onega. El lago Baikal en Siberia
                contiene más agua que cualquier otro lago en la Tierra.
            </p>
        </div>
    </section>
    @push('scripts')
        <script src="{{ asset('js/librerias/map/mapdata.js') }}"></script>
        <script src="{{ asset('js/librerias/map/worldmap.js') }}"></script>
    @endpush
@endsection
