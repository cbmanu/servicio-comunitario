<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DatosTrabajador;
use App\Models\Recibo;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generarRecibo(Request $request)
    {
        $user = Auth::user();
        $trabajador = DatosTrabajador::where('cedula', $user->cedula)->first();

        if (!$trabajador) {
            return back()->with('error', 'No se encontraron datos del trabajador.');
        }

        $anio = $request->input('anio');
        $mes = $request->input('mes');
        $numeroNomina = $request->input('numero_nomina');

        $recibos = Recibo::where('id_trabajador', $trabajador->id_trabajador)
            ->where('anio', $anio)
            ->where('mes', $mes)
            ->where('numero_nomina', $numeroNomina)
            ->orderBy('semana_quincena')
            ->orderBy('descripcion')
            ->get();

        $primeraQuincena = $recibos->where('semana_quincena', 1);
        $segundaQuincena = $recibos->where('semana_quincena', 2);
        $pagosAdicionales = $recibos->where('semana_quincena', '>', 2);

        $sueldoBasico = $recibos->where('descripcion', 'SUELDO BASICO')->sum('monto_asigna');
        $bonificaciones = $recibos->where('descripcion', '!=', 'SUELDO BASICO')->sum('monto_asigna');
        $totalDeducciones = $recibos->sum('monto_deduce');
        $totalAsignaciones = $recibos->sum('monto_asigna');
        $neto = $totalAsignaciones - $totalDeducciones;

        $pdf = Pdf::loadView('pdf.recibo', compact(
            'trabajador',
            'anio',
            'mes',
            'numeroNomina',
            'primeraQuincena',
            'segundaQuincena',
            'pagosAdicionales',
            'sueldoBasico',
            'bonificaciones',
            'totalDeducciones',
            'totalAsignaciones',
            'neto'
        ))->setOptions([
            'isRemoteEnabled' => true,
            'isHtml5ParserEnabled' => true,
            'isFontSubsettingEnabled' => true,
            'defaultFont' => 'Helvetica'
        ]);

        return $pdf->download('recibo_pago_' . $mes . '_' . $anio . '.pdf');
    }
}
