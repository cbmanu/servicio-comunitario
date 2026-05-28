<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosTrabajadorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('datos_trabajador')->insert([
            [
        'id_trabajador' => 1,
        'cedula' => 42048531,
        'nombrescompleto' => 'ZAMBRANO   CH  ROOSSVELT ',
        'descripcion_cargo' => 'PORTERO',
        'nomina' => 'CORPO - OBREROS FIJOS',
        'cuenta_nomina' => 'xxxxx-xxxx-xxxx-xxxx',
        'anio' => 2025,
        'mes' => 11,
        'departamento' => 'DISTRITO Nº 01',
        'fecha_nacimiento' => '1947-05-31',
        'fecha_ingreso' => '2000-01-01',
        'fecha_ingreso_apn' => '2018-06-01',
    ],
    [
        'id_trabajador' => 1,
        'cedula' => 42048531,
        'nombrescompleto' => 'ZAMBRANO   CH  ROOSSVELT ',
        'descripcion_cargo' => 'PORTERO',
        'nomina' => 'CORPO - OBREROS FIJOS',
        'cuenta_nomina' => 'xxxx-xxx-xxxxx-xxxxx',
        'anio' => 2025,
        'mes' => 10,
        'departamento' => 'DISTRITO Nº 01',
        'fecha_nacimiento' => '1947-05-31',
        'fecha_ingreso' => '2000-06-01',
        'fecha_ingreso_apn' => '2018-06-01',
    ],
    [
        'id_trabajador' => 1,
        'cedula' => 42048531,
        'nombrescompleto' => 'ZAMBRANO   CH  ROOSSVELT ',
        'descripcion_cargo' => 'PORTERO',
        'nomina' => 'CORPO - OBREROS FIJOS',
        'cuenta_nomina' => 'xxxxx-xxxx-xxx-xxxxx',
        'anio' => 2025,
        'mes' => 12,
        'departamento' => 'DISTRITO Nº 01',
        'fecha_nacimiento' => '1947-05-31',
        'fecha_ingreso' => '2000-01-01',
        'fecha_ingreso_apn' => '2018-06-01',
    ],
        ]);
    }
}