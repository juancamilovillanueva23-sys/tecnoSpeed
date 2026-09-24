<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void {
        Schema::create('especificacion_tecnica', function (Blueprint $table) {
            $table->id('id_especificacion');
            $table->integer('id_producto'); // Llave foránea hacia producto
            $table->string('clave');        // Ejemplo: "Almacenamiento", "RAM", "Cámara Principal"
            $table->string('valor');        // Ejemplo: "256 GB", "8 GB", "48 MP"
            $table->string('categoria_esp')->nullable(); // Opcional: "Pantalla", "Cámara", "Batería"
            $table->foreign('id_producto')->references('id_producto')->on('producto')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especificaciones_tecnicas');
    }
};
