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
        Schema::table('users', function (Blueprint $table) {
            // Se usa unique() en lugar de primary() para evitar conflictos con el ID original
            $table->integer('num_doc')->unique()->nullable(); 
            $table->string('tipo_de_documento', 50)->nullable();
            $table->string('apellidos', 255)->nullable();
            $table->string('numero_tel', 20)->nullable(); // Cambiado a string y longitud lógica
            $table->enum('rol', ["Cliente", "Admin"])->default('Cliente'); // Valor por defecto seguro
        });
    }


};
