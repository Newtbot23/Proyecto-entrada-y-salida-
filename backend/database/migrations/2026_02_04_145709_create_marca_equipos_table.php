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
        Schema::create('marca_equipo', function (Blueprint $table) {
            $table->id('id_marca');
            $table->string('marca', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('marca_equipo');
    }
};
