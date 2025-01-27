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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id('id_modulo');
            $table->unsignedBigInteger('id_maestro'); // Relación con maestros
            $table->foreign('id_maestro')->references('id_maestro')->on('maestros')->onDelete('cascade');
            $table->unsignedBigInteger('id_grupo'); // Relación con grupos
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
            $table->string('dia_modulo');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('materia_modulo');
            $table->boolean('estado_modulo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
