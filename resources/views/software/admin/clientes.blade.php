@extends('software.layouts.software')
{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/software/clientes.css') }}">
@section('usuario')
    <b>{{ auth()->user()->user }}</b>
@endsection
@section('contenido')
    <div class="formulario">
        <h1 class="formulario__titulo">Clientes registrados</h1>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>lastname</th>
                        <th>Telefono</th>
                        <th>email</th>
                        <th>Fecha de registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->client->name }}</td>
                            <td>{{ $client->client->lastname }}</td>
                            <td>{{ $client->client->phone }}</td>
                            <td>{{ $client->client->email }}</td>
                            <td>{{ $client->client->created_at }}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
@endsection
