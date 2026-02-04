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
        Schema::create('ambiente', function (Blueprint $table) {
            $table->id('id_ambiente');
            $table->string('ambiente', 200);

            $table->foreignId('id_nave')
                ->constrained('nave', 'id_nave');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ambiente');
    }
};
