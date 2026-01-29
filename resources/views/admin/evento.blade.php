@extends('layouts.admin')
@section('contenido')
    <div>
        <h2>
            {{ $evento->name }}
        </h2>
        <div>
            @if ($evento->certificado_base != null)
                <a href="{{ route('admin-certificados', ['evento_id' => $evento_id]) }}">
                    Certificado
                </a>
            @endif

            <a href="{{ route('add-certificado-base', ['evento_id' => $evento_id]) }}">
                Certificado Base
            </a>
        </div>
        <hr>
        <h3>
            Organizadores
        </h3>
        <a href="{{ route('add-organizador', ['evento_id' => $evento_id]) }}">
            Agregar
        </a>
        <ul>
            @foreach ($organizadores as $organizador)
                <li>
                    <p>
                        {{ $organizador->paternal_surname }} {{ $organizador->maternal_surname }} {{ $organizador->name }}
                    </p>
                </li>
            @endforeach
        </ul>
        <hr>
        <h3>
            Ponentes
        </h3>
        <a href="{{ route('add-ponente', ['evento_id' => $evento_id]) }}">
            Agregar
        </a>
        <ul>
            @foreach ($ponentes as $p)
                <li>
                    <p>
                        {{ $p->paternal_surname }} {{ $p->maternal_surname }} {{ $p->name }}
                    </p>
                    <p>
                        {{ $p->pivot->ponencia }}
                    </p>
                </li>
            @endforeach
        </ul>
        <hr>
        <h3>
            Asistentes
        </h3>
        <ul>
            @foreach ($asistentes as $a)
                <li>
                    <p>
                        {{ $a->paternal_surname }} {{ $a->maternal_surname }} {{ $a->name }}
                    </p>
                </li>
            @endforeach
        </ul>
        <hr>
        <h3>
            Pre Inscritos
        </h3>
        <ul>
            @foreach ($preregistrados as $pre)
                <li>
                    <p>
                        {{ $pre->paternal_surname }} {{ $pre->maternal_surname }} {{ $pre->name }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection