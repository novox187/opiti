@extends('software.layouts.software')
{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/software/inicio.css') }}">
@section('usuario')
    <b>{{ auth()->user()->user }}</b>
@endsection
@section('contenido')
    <div class="formulario">
        <h1 class="formulario__titulo">Reuniones pendientes con Nuevos clientes</h1>
        <form action="/admin/reuniones" method="GET">
            <div class="search">
                <input class="buscador" name="buscador" type="text" placeholder="Busqueda">
                <button class="boton_search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
        <div class="tabla">

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Fecha de la reunion</th>
                        <th>email</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            
                            <td>{{ $client->client->name }}</td>
                            <td>{{ $client->client->phone }}</td>
                            <td>{{ $client->date }}</td>
                            <td>{{ $client->client->email }}</td>
                            @if ($client->estado == false)
                            <form action="{{ route('admin.update') }}" method="POST">
                                @csrf
                                @method('put')
                                <td><button name="estado" type="submit" value="{{ $client->id }}">Pendiente</button></td>
                            </form>
                            
                            @elseif ($client->estado == true)
                            <form action="{{ route('admin.update') }}" method="POST">
                                @csrf
                                @method('put')
                                <td><button name="activo" type="submit" value="{{ $client->id }}">completado</button></td>
                            </form>
                            @endif
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
@endsection
