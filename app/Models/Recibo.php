<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $table = 'recibos';
    protected $fillable = [
        'id_trabajador',
        'anio',
        'mes',
        'semana_quincena',
        'numero_nomina',
        'unidades',
        'monto_asigna',
        'monto_deduce',
        'descripcion'
    ];
    public $timestamps = false;
}
