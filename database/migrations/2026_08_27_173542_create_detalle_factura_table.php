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

        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->integer('id_deta_fac')->primary();
            $table->integer('cantidad_pro');
            $table->timestamp('fecha_gen');
            $table->float('Impuestos_apli');
            $table->integer('num_doc');
            $table->integer('id_producto');
            $table->integer('id_factura');
            $table->foreign('id_factura')->references('id_factura')->on('factura');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_factura');
    }
};
