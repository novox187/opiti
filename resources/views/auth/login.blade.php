@extends('auth.layout.login_register')
@section('name')
    | Login
@endsection

@section('titulo')
    <h1 class="titulo">Inicia Sesion</h1>
@endsection
@section('formulario')
    <form action="{{ route('login') }}" method="post" novalidate>
        @csrf
        @if (session('mensaje'))
        <p class="error">{{ session('mensaje') }}</p>
        @endif
        <label for="user"> Ingrese su Usuario de administrador</label>
        <input type="text" name="user" placeholder="Usuario...">
        @error('user')
            <p class="error">{{ $message }}</p>
        @enderror
        <label for="password">Ingrese su Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraserña...">
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
        <div class="remember">
            <input type="checkbox" name="remember" id="remember" > <label for="remember">Mantener mi sesion abierta</label>
        </div>
        
        <input type="submit" value="Ingresar">
    </form>
    <span class="RegisterLogin">Aun no tienes un usuario? <a href="{{ route('register') }}">Registrate</a></span>
@endsection
