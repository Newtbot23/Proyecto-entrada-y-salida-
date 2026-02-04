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
        Schema::create('ficha', function (Blueprint $table) {
            $table->id('id_ficha');
            $table->foreignId('id_programa')
                ->constrained('programa', 'id_programa');
            $table->foreignId('id_ambiente')
                ->constrained('ambiente', 'id_ambiente');
            $table->foreignId('id_jornada')
                ->constrained('jornada', 'id_jornada');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ficha');
    }
};
