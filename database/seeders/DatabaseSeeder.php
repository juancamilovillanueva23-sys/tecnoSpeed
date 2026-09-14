<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StockSeeder::class,    // Se ejecuta primero para crear los registros de stock
            ProductoSeeder::class, // Se ejecuta después para asociar los productos
        ]);
    }
}