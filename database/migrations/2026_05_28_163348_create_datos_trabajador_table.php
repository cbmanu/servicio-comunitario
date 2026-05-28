<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datos_trabajador', function (Blueprint $table) {
            $table->bigInteger('id_trabajador'); // int8
            $table->bigInteger('cedula'); // int8
            $table->text('nombrescompleto'); // text
            $table->string('descripcion_cargo', 60); // varchar(60)
            $table->string('nomina', 60); // varchar(60)
            $table->string('cuenta_nomina', 60); // varchar(60)
            $table->bigInteger('anio'); // int8
            $table->bigInteger('mes'); // int8
            $table->string('departamento', 90); // varchar(90)
            $table->date('fecha_nacimiento'); // date
            $table->date('fecha_ingreso'); // date
            $table->date('fecha_ingreso_apn'); // date

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_trabajador');
    }
};