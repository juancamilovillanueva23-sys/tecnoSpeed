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

        Schema::create('metodo_pago', function (Blueprint $table) {
            $table->integer('id_metodo_pago')->primary();
            $table->string('tipo_pago');
            $table->string('token_pasarela');
            $table->integer('id_users');
            $table->foreign('id_users')->references('num_doc')->on('users');
            $table->integer('id_pago');
            $table->foreign('id_pago')->references('id_pago')->on('pago');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metodo_pago');
    }
};
