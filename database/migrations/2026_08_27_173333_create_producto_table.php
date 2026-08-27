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
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id_producto')->primary();
            $table->foreign('id_producto')->references('id_stock')->on('Stock');
            $table->string('nombre_pro', 255);
            $table->text('descripcion');
            $table->decimal('valor_pro', 8, 2);
            $table->integer('id_imagen');
            $table->integer('id_categoria');
            $table->integer('id__stock');
            $table->integer('id_cupon');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
