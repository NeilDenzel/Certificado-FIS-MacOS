@extends('layouts.admin')
@section('contenido')

    <head>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
    <div class="div-login">
        <div class="login-h1-y-p">
            <h1>Bienvenido</h1>
            <p>Ingrese su email y contraseña</p>
        </div>
        <form method="post">
            @csrf
            @isset($error)
                <div>
                    <p>{{ $error }}</p>
                </div>
            @endisset
            <div class="coolinput-login">
                <label class="text-login" for="email">
                    Email:
                </label>
                <input class="input-login" id="email" name="email" type="email">
                @error('email')
                    <p><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div class="coolinput-login">
                <label for="password" class="text-login">
                    Password:
                </label>
                <input class="input-login" id="password" name="password" type="password">
                @error('password')
                    <p><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div>
                <button type="submit" class="button2-login-ingresar">
                    Ingresar
                </button>
            </div>

        </form>
    </div>
@endsection
