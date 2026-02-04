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
        Schema::create('licencia_sistema', function (Blueprint $table) {
            $table->id('id_licencia');

            $table->date('fecha_inicio');
            $table->date('fecha_vencimiento');

            $table->enum('estado', [
                'activa',
                'suspendida',
                'vencida',
                'pendiente'
            ])->default('pendiente');

            $table->dateTime('fecha_ultima_validacion')->nullable();
            $table->dateTime('creada_en')->nullable();

            $table->foreignId('id_plan_lic')
                ->constrained('planes_licencia', 'id_plan_lic');

            $table->foreignId('id_entidad')
                ->constrained('entidad', 'id_entidad');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('licencia_sistema');
    }
};
