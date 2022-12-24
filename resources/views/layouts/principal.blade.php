<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo_pagina')</title>
        <link rel="stylesheet" href="{{ asset('static/lib/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/lib/fontawesome-free-6.1.1-web/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/lib/DataTables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
        <script src="{{ asset('static/lib/sweetalert-2.11/sweetalert2.all.min.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light shadow fondo-blur">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('mostrar_ip') }}"><i class="fa-solid fa-face-sad-cry fa-2x text-dark"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('mostrar_ip') }}"><i class="fa-solid fa-rectangle-list me-2"></i>Lista de IPs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agregar_ip') }}"><i class="fa-solid fa-circle-plus me-2"></i>Agregar IP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clases_ip') }}"><i class="fa-solid fa-book me-2"></i>Clases de IP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('contenedor_principal');
        <script src="{{ asset('static/lib/DataTables/jQuery-3.6.0/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('static/lib/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('static/lib/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('static/js/main.js') }}"></script>
    </body>
</html>