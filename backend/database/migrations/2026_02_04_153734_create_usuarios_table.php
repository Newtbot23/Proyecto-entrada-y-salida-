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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('doc')->primary();
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50)->nullable();
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50)->nullable();
            $table->string('telefono', 13)->nullable();
            $table->string('correo', 100)->unique();
            $table->string('imagen', 300)->nullable();
            $table->string('codigo_qr', 300)->nullable();
            $table->string('contrasena', 300);
            $table->foreignId('id_rol')
                ->constrained('rol', 'id_rol');
            $table->foreignId('id_entidad')
                ->constrained('entidad', 'id_entidad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
