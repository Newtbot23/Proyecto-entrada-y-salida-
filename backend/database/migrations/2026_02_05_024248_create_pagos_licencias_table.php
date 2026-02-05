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
        Schema::create('pagos_licencia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_licencia')->constrained('licencias_sistema');
            $table->dateTime('fecha_pago');
            $table->enum('metodo_pago', ['efectivo', 'transferencia', 'tarjeta']);
            $table->string('referencia', 100);
            $table->enum('estado', ['pagado', 'pendiente', 'anulado']);
            $table->dateTime('creado_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_licencia');
    }
};
