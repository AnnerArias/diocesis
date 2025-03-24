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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo');
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion_estimada');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('usuario_responsable_id');
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('usuario_responsable_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
