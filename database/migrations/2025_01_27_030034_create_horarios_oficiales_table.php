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
        Schema::create('horarios_oficiales', function (Blueprint $table) {
            $table->id('id_horariooficial');
            $table->string('cuatrimestre_horario_oficial');
            $table->unsignedBigInteger('id_modulo'); // Relación con modulos
            $table->foreign('id_modulo')->references('id_modulo')->on('modulos')->onDelete('cascade');
            $table->text('descripcion_modulo');
            $table->boolean('estado_horario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios_oficiales');
    }
};
