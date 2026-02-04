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
        Schema::create('vehiculo', function (Blueprint $table) {

            // PK no autoincremental
            $table->string('placa', 10)->primary();

            $table->foreignId('id_tip_vehiculo')
                ->constrained('tip_vehiculo', 'id_tip_vehiculo');

            // Documento del usuario (ajusta tipo si luego usas bigint)
            $table->unsignedBigInteger('doc');

            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->string('color', 50);
            $table->text('descripcion')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculo');
    }
};
