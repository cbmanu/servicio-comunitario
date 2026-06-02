<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    //Consulta de pruebas
    $nominas = DB::table('recibos')
    ->select('id_trabajador')
    ->selectRaw('SUM(monto_asigna) as total_asignaciones')
    ->selectRaw('SUM(monto_deduce) as total_deducciones')
    ->selectRaw('SUM(monto_asigna) - SUM(monto_deduce) as neto_a_pagar')
    ->groupBy('id_trabajador')
    ->get();

        return view('home',compact('nominas'));
    }
}
