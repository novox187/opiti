@extends('auth.layout.login_register')

@section('name')
    | Register
@endsection

@section('titulo')
    <h1 class="titulo">Registrate</h1>
@endsection

@section('formulario')
    <form action="{{ route('register') }}" method="post" novalidate>
        @csrf
        <label for="user"> Ingrese un usuario</label>
        <input type="text" name="user" id="user" placeholder="Usuario..." value="{{ old('user') }}">
        @error('user')
            <p class="error">{{ $message }}</p>
        @enderror
        <label for="password">Ingrese una Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraserña...">
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
        <label for="password_confirmation">Repita la contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repita la contraseña">
        <input type="submit" value="Registrar">
    </form>
    <span class="RegisterLogin">ya tienes un usuario? <a href="{{ route('login') }}">inicia sesion</a></span>
@endsection
