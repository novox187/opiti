@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/contacto.css?0.1') }}">

@section('titulo')
    | contacto
@endsection

@section('contenido')
    <div class="contacto">
        <div class="contacto__titulo">
            <h1>Coordina con nosotros</h1>
        </div>
        <div class="contacto__contenedor" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="contacto__social">
                <img class="contacto__img" src=" {{ asset('img/contacto/contacto.webp') }} " alt="">
            </div>
            <div class="contacto__formulario">
                <form action="/contacto" method="post" novalidate>
                    @csrf
                    {{-- <label for="name">Nombre</label> --}}
                    <input name="name" type="text"  placeholder="Ingrese sus dos nombres">
                    @error('name')
                        <p class="alert_error">{{ $message }}</p>
                    @enderror
                    {{-- <label for="lastname">Apellido</label> --}}
                    <input type="text" name="lastname"  placeholder="Ingrese sus dos apellidos">
                    @error('lastname')
                        <p class="alert_error">{{ $message }}</p>
                    @enderror
                    {{-- <label for="email">Email</label> --}}
                    <input type="email" name="email"  placeholder="correo electronico">
                    @error('email')
                        <p class="alert_error">{{ $message }}</p>
                    @enderror
                    {{-- <label for="asunto">Asunto</label> --}}
                    <input type="text" name="phone"  placeholder="Numero de telefono">
                    @error('phone')
                        <p class="alert_error">{{ $message }}</p>
                    @enderror
                    <label for="date">Agenda una reunion</label>
                    <input type="date" name="date"  min="{{$now}}">
                    {{-- <span class="alert"><b>Importante: </b>todas las reuniones seran apartir de las 8 de la mañana debido al cambio horerio</span> --}}
                    @error('date')
                        <p class="alert_error">{{ $message }}</p>
                    @enderror
                    <input type="submit" value="Enviar">
                </form>

            </div>
        </div>
    </div>
@endsection
