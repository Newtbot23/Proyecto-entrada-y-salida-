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
        Schema::table('entidad', function (Blueprint $table) {
        $table->foreign('id_licencia')
            ->references('id_licencia')
            ->on('licencia_sistema')
            ->onDelete('set null');
    });
}

public function down(): void
{
    Schema::table('entidad', function (Blueprint $table) {
        $table->dropForeign(['id_licencia']);
    });
    }
};
