<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ips;

class IpsController extends Controller
{

    function agregar_ip(Request $request) {
        return view('crear_ip/formulario_crear_ip');
    }
    function crear_ip(Request $request) {
        $ip = new Ips;
        $ip->direccion_ip=$request->entrada_ip;
        $ip->nombre_dispositivo=$request->entrada_nombre_dispositivo;
        $ip->fecha_creacion=$request->entrada_fecha;
        $ip->save();
        return redirect()->route('mostrar_ip')->with('mensaje', ['success', '¡Genial!', 'La IP se ha guardado correctamente.']);//entonces eso cuando termine de llenar el forulario
        //y enviarse en automatico nos manda a index :O
    }
    
    //  Funciones identificables.
    function mostrar_ips(Request $request)
    {
        $ips = Ips::all();
        return view('mostrar_ip/tabla_mostrar_ips', compact('ips'));
    }
    function mostrar_ip_eliminar(Request $request, $id){
        $ips = Ips::find($id);
        return view('eliminar_ip/formulario_eliminar_ip', compact('ips'));
    }
    function eliminar_ip(Request $request, $id){
        $ips = Ips::find($id);
        $ips->delete();
        return redirect()->route('mostrar_ip')->with('mensaje', ['success', '¡Genial!', 'La IP se ha eliminado correctamente.']);
    }
    function mostrar_ip_actualizar(Request $request, $id){
        $ips = Ips::find($id);
        return view('editar_ip/formulario_editar_ip', compact('ips'));
    }
    function editar_ip(Request $request, $id){
        $ips = Ips::find($id);
        $ips->direccion_ip=$request->entrada_ip;
        $ips->nombre_dispositivo=$request->entrada_nombre_dispositivo;
        $ips->fecha_creacion=$request->entrada_fecha;
        $ips->save();
        return redirect()->route('mostrar_ip')->with('mensaje', ['success', '¡Genial!', 'La IP se ha editado correctamente.']);
    }
    function mostrar_clases_ip(Request $request) {
        return view('clases_ip/tabla_clases_ip');
    }
}
