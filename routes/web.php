<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IpsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[IpsController::class,'mostrar_ips'])->name('mostrar_ip'); //esto maneja los datos
Route::get('/agregar_ip', [IpsController::class, 'agregar_ip'])->name('agregar_ip');
Route::get('/crear_ip',[IpsController::class,'crear_ip'])->name('crear_ip'); //esto maneja los datos
Route::get('/mostrar_ip_eliminar/{id}',[IpsController::class,'mostrar_ip_eliminar'])->name('mostrar_ip_eliminar');//esto elimina datos
Route::get('/mostrar_ip_eliminar/eliminar_ip/{id}',[IpsController::class,'eliminar_ip'])->name('eliminar_ip');
Route::get('/mostrar_ip_editar/{id}',[IpsController::class,'mostrar_ip_actualizar'])->name('mostrar_ip_editar');//esto actualiza datos
Route::get('/mostrar_ip_editar/editar_ip/{id}',[IpsController::class,'editar_ip'])->name('editar_ip');
Route::get('/clases_ip', [IpsController::class, 'mostrar_clases_ip'])->name('clases_ip');
