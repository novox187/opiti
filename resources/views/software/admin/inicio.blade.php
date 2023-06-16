@extends('software.layouts.software')
@section('usuario')<b>{{ auth()->user()->user }}</b>@endsection
@section('contenido')

<div class="formulario">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>email</th>
            <th>Fecha de la reunion</th>
        </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->client->name }}</td>
                    <td>{{ $client->client->phone }}</td>
                    <td>{{ $client->client->email }}</td>
                    <td>{{ $client->date }}</td>
                </tr>
            @endforeach
    
        </tbody>
    
    </table>
</div>

@endsection


