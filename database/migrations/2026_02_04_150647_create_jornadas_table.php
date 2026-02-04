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
        Schema::create('jornada', function (Blueprint $table) {
            $table->id('id_jornada');
            $table->string('jornada', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jornada');
    }
};
