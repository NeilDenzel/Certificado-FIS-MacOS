@extends('layouts.admin')
@section('contenido')
<form method="post" enctype="application/x-www-form-urlencoded">
    @csrf
    <legend>
        Agregando Organizador
    </legend>
    <div>
        <label for="organizador">
            Organizaador:     
        </label>
        <select  name="organizador" id="organizador">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">
                    {{ $user->paternal_surname }} {{ $user->maternal_surname }} {{ $user->name }}
                </option>
            @endforeach
        </select>
        @error('organizador')
        <p>
            {{$message}}
        </p>   
        @enderror
    </div>
    <button type ="submit">
        Agregar
    </button>
</form>
@endsection