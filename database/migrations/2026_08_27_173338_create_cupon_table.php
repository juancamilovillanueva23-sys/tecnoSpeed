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

        Schema::create('cupon', function (Blueprint $table) {
            $table->integer('id_cupon')->primary();
            $table->foreign('id_cupon')->references('num_doc')->on('users');
            $table->string('codigo');
            $table->float('valor_cupon');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin');
            $table->char('estado', 255);
            $table->char('producto_cupon', 255);
            $table->integer('id_users');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupon');
    }
};
