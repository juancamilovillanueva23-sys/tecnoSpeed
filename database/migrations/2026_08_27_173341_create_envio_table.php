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

        Schema::create('envio', function (Blueprint $table) {
            $table->integer('id_envio')->primary();
            $table->timestamp('fecha_envio');
            $table->timestamp('fecha_llegada');
            $table->float('valor_envio');
            $table->integer('id_transportadora');
            $table->integer('id_costo_envio');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envio');
    }
};
