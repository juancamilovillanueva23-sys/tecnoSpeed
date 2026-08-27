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

        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id_pedidos')->primary();
            $table->text('descripcion');
            $table->timestamp('fecha');
            $table->integer('numero_pedido');
            $table->float('valor_unitario');
            $table->float('total');
            $table->integer('id_envio');
            $table->integer('id_users');
            $table->foreign('id_users')->references('num_doc')->on('users');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
