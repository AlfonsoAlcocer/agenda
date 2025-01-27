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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->unsignedBigInteger('emisor_solicitudes'); // Relación con maestros
            $table->foreign('emisor_solicitudes')->references('id_maestro')->on('maestros')->onDelete('cascade');
            $table->unsignedBigInteger('id_modulo'); // Relación con modulos
            $table->foreign('id_modulo')->references('id_modulo')->on('modulos')->onDelete('cascade');
            $table->string('estado_solicitud');
            $table->text('descripcion_solicitud');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
