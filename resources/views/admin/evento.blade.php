@extends('layouts.admin')
@section('contenido')
<h2>
    {{$evento->name}}
</h2>
<hr>
<h3>
    Organizadores
</h3>
<ul>
    @foreach ($organizadores as $organizador)
    <li>
        <p>
            {{$organizador->paternal_surname}} {{$organizador->maternal_surname}} {{$organizador->name}}
        </p>
    </li>
    @endforeach
</ul>
<hr>
<h3>
    Ponentes
</h3>
<ul>
    @foreach ($ponentes as $p)
        <li>
            <p>
                {{$p->paternal_surname}} {{$p->maternal_surname}} {{$p->name}}
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
                {{$a->paternal_surname}} {{$a->maternal_surname}} {{$a->name}}
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
                {{$pre->paternal_surname}} {{$pre->maternal_surname}} {{$pre->name}}
            </p>
        </li>
    @endforeach
</ul>
@endsection