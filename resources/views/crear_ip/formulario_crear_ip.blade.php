@extends('layouts/principal')
@section('titulo_pagina', 'Agregar IP')
@section('contenedor_principal')
    <div class="container mt-5">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <form action="crear_ip/" method="GET" class="p-4 rounded shadow fondo-blur">
                    @csrf
                    <div class="mb-5">
                        <h1 class="fw-light fs-3 text-secondary"><i class="fa-solid fa-circle-plus me-2"></i>Agregar una IP</h1>
                        <hr class="bg-secondary">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0 shadow fondo-inputs" id="entrada_ip" name="entrada_ip" placeholder="" required pattern="^((25[0-5]|(2[0-4]|1\d|[1-9]|)\d)(\.(?!$)|$)){4}$">
                        <label for="entrada_ip" class="form-label"><i class="fa-solid fa-location-dot me-2"></i>Direccion IP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0 shadow fondo-inputs" id="entrada_nombre_dispositivo" name="entrada_nombre_dispositivo" placeholder="" required>
                        <label for="entrada_nombre_dispositivo" class="form-label"><i class="fa-solid fa-desktop me-2"></i>Dispositivo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control border-0 shadow fondo-inputs" id="entrada_fecha" name="entrada_fecha" placeholder="" required readonly>
                        <label for="entrada_fecha"" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha</label>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-secondary w-100"><i class="fa-solid fa-floppy-disk me-2"></i>Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
