@extends('layouts/principal')
@section('titulo_pagina', 'Lista de IPs')
@section('contenedor_principal')
    <div class="container mt-5">
        @if($mensaje = Session::get('mensaje'))
            <script>
                Swal.fire({
                    icon: '{{ $mensaje[0] }}',
                    title: '{{ $mensaje[1] }}',
                    text: '{{ $mensaje[2] }}'
                });
            </script>
        @endif
        <div class="row">
            <div class="col-md-12">   
                <div class="table-responsive fondo-blur p-4 rounded shadow">
                    <div class="mb-5">
                        <h1 class="fw-light fs-3 text-secondary"><i class="fa-solid fa-rectangle-list me-2"></i>Lista de IPs</h1>
                        <hr class="bg-secondary">
                    </div>
                    <table class="table table-striped table-hover" id="tabla_mostrar_ips">
                        <thead>
                            <tr>
                                <th>Direccion IP</th>
                                <th>Nombre del Dispositivo</th>
                                <th>Fecha</th>
                                <th class="text-center">
                                    Editar
                                </th>
                                <th class="text-center">
                                    Eliminar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ips as $items)
                                <tr>
                                    <td>{{ $items->direccion_ip }}</td>
                                    <td>{{ $items->nombre_dispositivo }}</td>
                                    <td>{{ $items->fecha_creacion }}</td>
                                    <td class="text-center">
                                        <a href="mostrar_ip_editar/{{$items->id}}" class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="mostrar_ip_eliminar/{{$items->id}}" class="btn"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection