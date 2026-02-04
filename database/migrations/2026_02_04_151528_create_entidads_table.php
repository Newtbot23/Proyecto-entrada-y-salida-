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
        Schema::create('entidad', function (Blueprint $table) {
            $table->id('id_entidad');
            $table->string('nombre_entidad', 200);
            $table->string('correo', 200);
            $table->string('direccion', 200);

            $table->unsignedBigInteger('id_licencia')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entidad');
    }
};
