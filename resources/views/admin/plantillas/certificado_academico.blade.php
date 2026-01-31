<!DOCTYPE html>
<html lang="ee">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            width: 1400px;
        }

        .certificado_base {
            position: absolute;
            top: 0;
            left: 0;
            width: 1400px;
            height: 992px;
            z-index: 10;
        }

        * {
            font-family: Arial;
        }

        .contenido_certificado {
            position: absolute;
            border: solid red 1px;
            left: 200px;
            top: 340px;
            width: 1100px;
            z-index: 20;
        }

        p {
            padding: 5px;
            margin: 0;
        }

        .p1 {
            width: 100%;
            text-align: justify;
            font-size: 24px;
            font-style: italic
        }

        .p2 {
            width: 100%;
            font-size: 54px;
            text-align: center;
            font-weight: bold;
        }

        .p3 {
            text-align: justify;
            font-size: 24px;
            line-height: 1.3;
        }

        .p4 {
            text-align: right;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .qr {
            position: absolute;
            bottom: 450px;
            right: 0px;
            width: 200px;
            z-index: 50;
        }
    </style>
</head>

<body>
    <img class="certificado_base" src="{{ $base64 }}">
    <div class="contenido_certificado">
        <p class="p1">
            Otorgado a:
        </p>
        <p class="p2">
            {{ $user->paternal_surname }} {{ $user->maternal_surname }} {{ $user->name }}
        </p>
        <p class="p3">
            Por su destacada participación en calidad de <strong>{{ $tipo->tipo }}</strong> en
            las Conferencias del <strong>{{ $evento->name }}</strong>, que se desarrolló el dia
            {{ $dia }} de {{ $meses[$fecha->month] }} de {{ $fecha->year }},
            organizado por la Facultad de Ingieria de Sistemas de la Universidad Nacional del centro del
            Perú,
            con una duracion de veinte (20) horas académicas.
        </p>
        <p class="p4">
            Huancayo, {{ $dia }} de {{ $meses[$fecha->month] }} de {{ $fecha->year }}.
        </p>
        <p class="p3">
            Para la validacion ingresar a la url:
            <br>
            {{ $url_certificado }}
        </p>
        <img src="{{ $qr_data }}" class="qr">
    </div>

</body>

</html>
