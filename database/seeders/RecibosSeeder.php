<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecibosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recibos')->insert([
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 70.0,
                'monto_deduce' => 0.0,
                'descripcion' => 'SUELDO BASICO',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 0.0,
                'monto_deduce' => 9.46,
                'descripcion' => 'SSO',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 6.2,
                'monto_asigna' => 7.48,
                'monto_deduce' => 0.0,
                'descripcion' => 'PRIMA ANTIGUEDAD',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 14.0,
                'monto_asigna' => 9.8,
                'monto_deduce' => 0.0,
                'descripcion' => 'ESCALAFON ACTA',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 33.78,
                'monto_asigna' => 33.78,
                'monto_deduce' => 0.0,
                'descripcion' => 'COMPENSACION',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 7.0,
                'monto_deduce' => 0.0,
                'descripcion' => 'PRIMA SISTEMA PUBLICO NACIONAL',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 0.0,
                'monto_deduce' => 1.18,
                'descripcion' => 'SPF',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 0.0,
                'monto_deduce' => 7.68,
                'descripcion' => 'FJU',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 0.0,
                'monto_deduce' => 4.2,
                'descripcion' => 'SINTRASALUD',
            ],
            [
                'id_trabajador' => 1,
                'anio' => 2024,
                'mes' => 10,
                'semana_quincena' => 1,
                'numero_nomina' => 0,
                'unidades' => 0.0,
                'monto_asigna' => 42.68,
                'monto_deduce' => 0.0,
                'descripcion' => '4 SEMANAS',
            ],
        ]);
    }
}