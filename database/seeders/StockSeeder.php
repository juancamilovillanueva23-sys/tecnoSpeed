<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    public function run(): void
    {
        $stocks = [];

        for ($i = 1; $i <= 20; $i++) {
            $stocks[] = [
                'id_stock'        => $i,
                'pro_disponibles' => 50,
                'pro_apartados'   => 0,
                'pro_devueltos'   => 0,
            ];
        }

        // Usamos 'stock' en minúsculas igual que en la migración
        DB::table('stock')->insert($stocks);
    }
}