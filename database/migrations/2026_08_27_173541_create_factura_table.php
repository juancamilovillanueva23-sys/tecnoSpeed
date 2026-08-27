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
        Schema::create('factura', function (Blueprint $table) {
            $table->integer('id_factura')->primary();
            $table->integer('nro_factura');
            $table->timestamp('fecha_factura');
            $table->float('precio_uni');
            $table->float('subtotal');
            $table->float('total');
            $table->integer('id_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};
