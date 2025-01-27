<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modificaciones', function (Blueprint $table) {
            $table->id('id_modificacion');
            $table->unsignedBigInteger('id_modulo'); // Relación con modulos
            $table->foreign('id_modulo')->references('id_modulo')->on('modulos')->onDelete('cascade');
            $table->unsignedBigInteger('id_maestro'); // Relación con maestros
            $table->foreign('id_maestro')->references('id_maestro')->on('maestros')->onDelete('cascade');
            $table->unsignedBigInteger('id_grupo'); // Relación con grupos
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
            $table->boolean('estado_modificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modificaciones');
    }
};
