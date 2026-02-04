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
        Schema::create('detalle_ficha_usuario', function (Blueprint $table) {
            $table->id('id_ficha_usuario');
            $table->integer('id_ficha');
            $table->integer('doc');
            $table->enum('tipo_participante', ['aprendiz', 'instructor']);
            $table->timestamps();
            $table->foreign('id_ficha')
                ->references('id_ficha')
                ->on('ficha')
                ->onDelete('cascade');
            $table->foreign('doc')
                ->references('doc')
                ->on('usuarios')
                ->onDelete('cascade');
            $table->unique(['id_ficha', 'doc']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detalle_ficha_usuario');
    }
};
