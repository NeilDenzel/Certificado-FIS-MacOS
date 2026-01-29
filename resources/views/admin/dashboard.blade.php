@extends('layouts.admin')
@section('contenido')

    <head>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    <h1 class="dashboard-h1">Bienvenido Administrador</h1>
    <div class="dashboard-agregar-evento">
        <a href="{{ route('add-evento') }}">Agregar Evento</a>
    </div>
    
    <hr>
    <ul>
        @forelse ($eventos as $evento)
            <li>
                <a href="{{ route('evento', ['evento_id' => $evento->id]) }}">
                    {{ $evento->name }}
                </a>
            </li>
        @empty
            <div>
                <p>No hay eventos registrados actualmente.</p>
            </div>
        @endforelse
    </ul>
@endsection
