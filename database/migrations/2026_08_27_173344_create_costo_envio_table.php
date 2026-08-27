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

        Schema::create('costo_envio', function (Blueprint $table) {
            $table->integer('id_costo_env')->primary();
            $table->float('costo_envio');
            $table->timestamp('fecha_entrega');
            $table->boolean('contraentrega');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costo_envio');
    }
};
