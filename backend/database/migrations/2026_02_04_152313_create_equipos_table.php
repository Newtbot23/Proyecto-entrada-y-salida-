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
        Schema::create('equipo', function (Blueprint $table) {
            $table->id('id_equipo');
            $table->enum('tipo', ['sena', 'propio']);
            $table->string('serial', 100)->unique();
            $table->string('placa_sena', 50)->nullable();
            $table->foreignId('id_marca')
                ->constrained('marca_equipo', 'id_marca');
            $table->enum('estado', [
                'asignado',
                'no_asignado',
                'inhabilitado'
            ])->default('no_asignado');
            $table->string('modelo', 100)->nullable();
            $table->string('tipo_equipo', 200);
            $table->text('caracteristicas')->nullable();
            $table->foreignId('id_sistema_operativo')
                ->constrained('sistema_operativo', 'id_sistema_operativo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipo');
    }
};
