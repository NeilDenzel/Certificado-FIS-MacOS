@extends('layouts.admin')
@section('contenido')
<form method="post" enctype="application/x-www-form-urlencoded">
    @csrf
    <legend>
        Agregando Ponente
    </legend>
    <div>
        <label for="ponente">
            Ponente:     
        </label>
        <select  name="ponente" id="ponente">
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
    <div>
        <label for="ponencia">
            Ponencia:
        </label>
        <input required type="text" placeholder="Titulo de la ponencia" id="ponencia" name="ponencia">
    </div>
    <button type ="submit">
        Agregar
    </button>
</form>
@endsection