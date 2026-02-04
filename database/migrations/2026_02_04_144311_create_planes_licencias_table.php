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
        Schema::create('planes_licencia', function (Blueprint $table) {
        $table->id('id_plan_lic'); 
        $table->string('nombre_plan', 200); 
        $table->date('duracion_plan'); 
        $table->decimal('precio_plan', 10, 2); 
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes_licencia');
    }
};
