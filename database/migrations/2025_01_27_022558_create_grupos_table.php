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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('id_grupo'); // Crea una clave primaria unsigned BIGINT
            $table->string('nombre_grupo');
            $table->string('carrera_grupo');
            $table->integer('num_alumnos_grupo');
            $table->boolean('estado_grupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
