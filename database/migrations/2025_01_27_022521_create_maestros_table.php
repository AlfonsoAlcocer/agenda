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
        Schema::create('maestros', function (Blueprint $table) {
            $table->id('id_maestro'); // Crea una clave primaria unsigned BIGINT
            $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade'); // Relación con users
            $table->string('nombre_maestro');
            $table->string('apellidos_maestro');
            $table->string('idioma_maestro');
            $table->boolean('estado_maestro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestros');
    }
};
