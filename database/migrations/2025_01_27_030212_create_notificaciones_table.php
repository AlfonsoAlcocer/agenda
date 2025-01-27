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
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id('id_notificacion');
            $table->unsignedBigInteger('emisor_notificacion'); // Relación con maestros
            $table->foreign('emisor_notificacion')->references('id_maestro')->on('maestros')->onDelete('cascade');
            $table->unsignedBigInteger('receptor_notificacion'); // Relación con maestros
            $table->foreign('receptor_notificacion')->references('id_maestro')->on('maestros')->onDelete('cascade');
            $table->text('descripcion_notificacion');
            $table->string('estado_notificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificaciones');
    }
};
