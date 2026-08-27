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

        Schema::create('pedido_producto', function (Blueprint $table) {
            $table->integer('id_pedido_producto')->primary();
            $table->foreign('id_pedido_producto')->references('id_pedidos')->on('Pedidos');
            $table->integer('id_pedidos');
            $table->integer('id_producto');
            $table->integer('cantidad_productos');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_producto');
    }
};
