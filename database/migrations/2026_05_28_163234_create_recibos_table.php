<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->bigInteger('id_trabajador'); // int8
            $table->bigInteger('anio'); // int8
            $table->bigInteger('mes'); // int8
            $table->bigInteger('semana_quincena'); // int8
            $table->bigInteger('numero_nomina'); // int8
            $table->float('unidades', 8, 2 ); // float8 (puedes usar double si requieres más precisión)
            $table->float('monto_asigna', 8, 2); // float8
            $table->float('monto_deduce', 8, 2); // float8
            $table->string('descripcion', 50); // varchar(50)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibos');
    }
};