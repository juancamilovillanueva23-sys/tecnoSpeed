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
        Schema::disableForeignKeyConstraints();

        Schema::create('descuento', function (Blueprint $table) {
            $table->integer('Id_descuento')->primary();
            $table->string('Cantidad descuento', 255);
            $table->foreign('Cantidad descuento')->references('id_producto')->on('Producto');
            $table->string('duracion', 255);
            $table->string('estado', 255);
            $table->integer('id_producto');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descuento');
    }
};
