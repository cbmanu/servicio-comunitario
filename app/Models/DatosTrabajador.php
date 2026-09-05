<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosTrabajador extends Model
{
    use HasFactory;

    protected $table = 'datos_trabajador';


    protected $primaryKey = null;
    public $incrementing = false; 


    public $timestamps = false;


    protected $fillable = [
        'cedula',
        'nombrescompleto',
        'descripcion_cargo',
        'nomina',
        'cuenta_nomina', 
        'anio',
        'mes',
        'departamento',
        'fecha_nacimiento',
        'fecha_ingreso',
        'fecha_ingreso_apn',
    ];


    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_ingreso' => 'date',
        'fecha_ingreso_apn' => 'date',
        'cedula' => 'integer',
        'anio' => 'integer',
        'mes' => 'integer',
    ];
}