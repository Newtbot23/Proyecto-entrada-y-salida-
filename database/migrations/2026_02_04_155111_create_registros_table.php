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
        Schema::create('registro', function (Blueprint $table) {
            $table->id('id_registro');
            $table->integer('doc');
            $table->string('placa', 10)->nullable();
            $table->integer('id_equipo')->nullable();
            $table->date('fecha');
            $table->time('hora_entrada')->nullable();
            $table->time('hora_salida')->nullable();
            $table->timestamps();
            $table->foreign('doc')
                ->references('doc')
                ->on('usuarios')
                ->onDelete('cascade');
            $table->foreign('placa')
                ->references('placa')
                ->on('vehiculo')
                ->onDelete('set null');
            $table->foreign('id_equipo')
                ->references('id_equipo')
                ->on('equipo')
                ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registro');
    }
};
