@extends('layouts/principal')
@section('titulo_pagina', 'Clases de IP')
@section('contenedor_principal')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive p-4 rounded shadow fondo-blur">
                    <div class="mb-5">
                        <h1 class="fw-light fs-3 text-secondary"><i class="fa-solid fa-book me-2"></i>Tipos de clase de IP</h1>
                        <hr class="bg-secondary">
                    </div>
                    <table class="table table-striped table-hover" id="tabla_clases_ip">
                        <thead>
                            <th>Tipo de clase</th>
                            <th>Desde</th>
                            <th>Hasta</th>
                            <th>Dispositivos máximos</th>
                            <th>Redes máximas</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Clase A</td>
                                <td>0.0.0.0</td>
                                <td>126.255.255.255</td>
                                <td>126</td>
                                <td>16,777,214</td>
                            </tr>
                            <tr>
                                <td>Clase B</td>
                                <td>128.0.0.0</td>
                                <td>191.255.255.255</td>
                                <td>16,384</td>
                                <td>65,534</td>
                            </tr>
                            <tr>
                                <td>Clase C</td>
                                <td>192.0.0.0</td>
                                <td>223.255.255.255</td>
                                <td>2,097,154</td>
                                <td>254</td>
                            </tr>
                            <tr>
                                <td>Clase D</td>
                                <td>224.0.0.0</td>
                                <td>239.255.255.255</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Clase E</td>
                                <td>240.0.0.0</td>
                                <td>254.255.255.255</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection