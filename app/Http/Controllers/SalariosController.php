<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class SalariosController extends Controller
{
    public function show(): View
    {
    // El ID que recibes desde tu formulario o API
    $idTrabajadorBuscado = 2; 

    $nominas = DB::table('recibos')
    ->select('anio', 'mes', 'semana_quincena', 'numero_nomina')
    ->selectRaw("SUM(CASE WHEN descripcion = 'SUELDO BASICO' THEN monto_asigna ELSE 0 END) as sueldo_basico")
    ->selectRaw("SUM(CASE WHEN descripcion != 'SUELDO BASICO' THEN monto_asigna ELSE 0 END) as total_asignaciones")
    ->selectRaw('SUM(monto_deduce) as total_deducciones')
    ->selectRaw('SUM(monto_asigna) - SUM(monto_deduce) as neto_a_pagar')
    ->where('id_trabajador', $idTrabajadorBuscado) 
    ->groupBy('anio', 'mes', 'semana_quincena', 'numero_nomina') 
    ->orderBy('anio', 'desc')
    ->orderBy('mes', 'desc')
    ->orderBy('semana_quincena', 'desc')
    ->get();




    
        return view('salarios', compact('nominas'));
    }
}
