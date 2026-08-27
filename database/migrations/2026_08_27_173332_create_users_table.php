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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('num_doc')->primary();
            $table->string('nombres', 255);
            $table->string('apellidos', 255);
            $table->string('correo', 255);
            $table->char('numero_tel', 255);
            $table->string('tipo_de_documento', 255);
            $table->enum('rol', ["Cliente","Admin"]);
            $table->string('password');
            $table->string('cogido_unicio');
            $table->string('secre_doble_fac');
            $table->string('codigo_recupe');
            $table->timestamp('confirmación');
            $table->string('correo_verificado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
