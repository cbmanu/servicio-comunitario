<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DatosTrabajador;

class SalariosController extends Controller
{
    public function show(): View
    {
    $user = Auth::user();

    $trabajador = DatosTrabajador::where('cedula', $user->cedula)->first();

    if (!$trabajador) {
        $nominas = collect();
        return view('salarios', compact('nominas', 'trabajador'));
    }

    $idTrabajadorBuscado = $trabajador->id_trabajador;
    $nominas = DB::table('recibos')
    ->select('anio', 'mes', 'numero_nomina')
    ->selectRaw("SUM(CASE WHEN descripcion = 'SUELDO BASICO' THEN monto_asigna ELSE 0 END) as sueldo_basico")
    ->selectRaw("SUM(CASE WHEN descripcion != 'SUELDO BASICO' THEN monto_asigna ELSE 0 END) as total_asignaciones")
    ->selectRaw('SUM(monto_deduce) as total_deducciones')
    ->selectRaw('SUM(monto_asigna) - SUM(monto_deduce) as neto_a_pagar')
    ->where('id_trabajador', $idTrabajadorBuscado)
    ->groupBy('anio', 'mes', 'numero_nomina')
    ->orderBy('anio', 'desc')
    ->orderBy('mes', 'desc')
    ->get();





        return view('salarios', compact('nominas', 'trabajador'));
    }
}
