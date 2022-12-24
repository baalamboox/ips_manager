@extends('layouts/principal')
@section('titulo_pagina', 'Editar IP')
@section('contenedor_principal')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="editar_ip/{{$ips->id}}" method="GET" class="bg-light p-4 rounded shadow">
                    @csrf
                    <div class="mb-5">
                        <h1 class="fw-light fs-3 text-secondary"><i class="fa-solid fa-pen me-2"></i>¿Editar esta IP?</h1>
                        <hr class="bg-secondary">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="entrada_ip" name="entrada_ip" placeholder="" required value="{{$ips->direccion_ip}}">
                        <label for="entrada_ip" class="form-label">Dirección IP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="entrada_nombre_dispositivo" name="entrada_nombre_dispositivo" placeholder="" required value="{{$ips->nombre_dispositivo}}">
                        <label for="entrada_nombre_dispositivo" class="form-label">Dispositivo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="entrada_fecha" name="entrada_fecha" placeholder="" required readonly value="{{$ips->fecha_creacion}}">
                        <label for="entrada_fecha" class="form-label">Fecha</label>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-secondary w-100"><i class="fa-solid fa-pen me-2"></i>Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
