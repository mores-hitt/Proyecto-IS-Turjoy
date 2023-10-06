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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_route'); // Clave foránea a la tabla de rutas
            $table->date('date');
            $table->integer('seatAmount');
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('id_route')->references('id')->on('nombre_de_tabla_de_rutas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
