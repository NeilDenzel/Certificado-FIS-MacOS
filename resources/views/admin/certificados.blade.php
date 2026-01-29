@extends('layouts.admin')
@section('contenido')
    <div>
        <h2>
            Certificados del evento {{ $evento->name }}
        </h2>
        <h3>
            Organizadores
        </h3>
        <div>
            <a href="{{ route('generar-organizadores', ['evento_id' => $evento_id]) }}">
                Generar certificados
            </a>
        </div>

        <ul>
            @foreach ($organizadores as $organizador)
                <li>
                    <p>
                        {{ $organizador->paternal_surname }} {{ $organizador->maternal_surname }}
                        {{ $organizador->name }}
                    </p>
                </li>
                @if ($organizador->pivot->certificado_creado)
                    @foreach ($certificados as $certificado)
                        @if ($certificado->tipo_id == 4 && $certificado->user_id == $organizador->id)
                            <a href="{{ route('documento', ['certificado_id' => $certificado->id]) }}"
                                target="_blank">
                                Ver certificado
                            </a>
                        @endif
                    @endforeach
                @else
                    <span>
                        No creado
                    </span>
                @endif
            @endforeach
        </ul>

        <hr>
        <h3>
            Ponentes
        </h3>
        <div>
            <a href="{{ route('generar-ponentes', ['evento_id' => $evento_id]) }}">
                Generar certificados
            </a>
        </div>
        <ul>
            @foreach ($ponentes as $p)
                <li>
                    <div>
                        <p>
                            {{ $p->paternal_surname }} {{ $p->maternal_surname }}
                            {{ $p->name }}
                        </p>
                        <p>
                            {{ $p->pivot->ponencia }}
                        </p>
                    </div>
                    <div>
                        @if ($p->pivot->certificado_creado)
                             @foreach ($certificados as $certificado)
                            @if ($certificado->tipo_id == 3 && $certificado->user_id == $p->id)
                                <a href="{{ route('documento',['certificado_id' => $certificado->id]) }}" target="_blank">
                                    Ver certificado
                                </a>
                                @break
                            @endif                    
                       @endforeach
                        @else
                            <span>
                                No creado
                            </span>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>


    </div>
@endsection