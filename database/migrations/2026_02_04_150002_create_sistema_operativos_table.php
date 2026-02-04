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
        Schema::create('sistema_operativo', function (Blueprint $table) {
            $table->id('id_sistema_operativo');
            $table->string('sistema_operativo', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sistema_operativo');
    }
};
