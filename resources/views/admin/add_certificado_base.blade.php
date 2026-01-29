@extends('layouts.admin')
@section('contenido')

<a href="{{ route('evento', ['evento_id' => $evento_id]) }}">
    Atras
</a>

<form method="post" enctype="multipart/form-data">
    @csrf

    <legend>
        Certificado Base
    </legend>

    <div>
        <label for="base">
            Certificado Base:
        </label>
        <input 
            required 
            type="file" 
            id="base" 
            name="base"
        >
        @error('base')
            <p>{{ $message }}</p>   
        @enderror
    </div>

    <button type="submit">
        subir
    </button>
</form>

@endsection