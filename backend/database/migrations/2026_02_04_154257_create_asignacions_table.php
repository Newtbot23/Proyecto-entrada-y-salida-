<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id('id_asignacion');
            $table->integer('doc');
            $table->integer('id_ambiente');
            $table->integer('id_equipo');
            $table->boolean('estado')->default(1);
            $table->timestamps();
            $table->foreign('doc')
                ->references('doc')
                ->on('usuarios')
                ->onDelete('cascade');
            $table->foreign('id_ambiente')
                ->references('id_ambiente')
                ->on('ambiente')
                ->onDelete('cascade');
            $table->foreign('id_equipo')
                ->references('id_equipo')
                ->on('equipo')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};
