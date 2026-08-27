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
        Schema::create('reseña', function (Blueprint $table) {
            $table->integer('id_reseña')->primary();
            $table->integer('calificacion');
            $table->text('comentario');
            $table->string('imagen');
            $table->timestamp('fecha_reseña');
            $table->integer('num_doc');
            $table->integer('id_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseña');
    }
};
