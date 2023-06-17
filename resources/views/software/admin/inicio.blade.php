@extends('software.layouts.software')
{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/software/inicio.css') }}">
@section('usuario')
    <b>{{ auth()->user()->user }}</b>
@endsection
@section('contenido')
    <div class="formulario">
        <h1 class="formulario__titulo">Reuniones pendientes con Nuevos clientes</h1>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>email</th>
                        <th>Fecha de la reunion</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->client->name }}</td>
                            <td>{{ $client->client->phone }}</td>
                            <td>{{ $client->client->email }}</td>
                            <td>{{ $client->date }}</td>
                            <td><button>Pendiente</button></td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
@endsection
