@extends('layouts.admin')
@section('contenido')
    <form method="post">
        @csrf
        <div>
            <label for="email">
                Email:
            </label>
            <input id="email" name="email" type="email">
        </div>
        <div>
            <label for="password">
                Password:
            </label>
            <input id="password" name="password" type="password">
        </div>
        <input type="submit" value="Ingresar">
    </form>
@endsection