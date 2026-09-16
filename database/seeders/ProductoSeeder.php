<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            // Smartphones (Categoría 1)
            [
                'id_producto' => 1,
                'nombre_pro' => 'Smartphone Galaxy Ultra X',
                'descripcion' => 'Pantalla AMOLED 6.8", 256GB de almacenamiento, cámara triple de 108MP.',
                'valor_pro' => 899.99,
                'marca' => 101, // Samsung/Marca A
                'id_imagen' => 'storage/img/1.jpg',
                'id_categoria' => 1, // Celulares
                'id__stock' => 1,
                'id_cupon' => 1,
            ],  
            [
                'id_producto' => 2,
                'nombre_pro' => 'iPhone Pro Max 15',
                'descripcion' => 'Chip A17 Pro, acabado en titanio, pantalla Super Retina XDR.',
                'valor_pro' => 1199.00,
                'marca' => 102, // Apple/Marca B
                'id_imagen' => 'storage/img/13.png',
                'id_categoria' => 1,
                'id__stock' => 2,
                'id_cupon' => 0,
            ],
            [
                'id_producto' => 3,
                'nombre_pro' => 'Smartphone Redmi Note 13',
                'descripcion' => 'Pantalla de 120Hz, carga rápida de 67W, excelente relación calidad-precio.',
                'valor_pro' => 249.50,
                'marca' => 103, // Xiaomi/Marca C
                'id_imagen' => 'storage/img/airpods3.png',
                'id_categoria' => 1,
                'id__stock' => 3,
                'id_cupon' => 2,
            ],

            // Laptops y Computación (Categoría 2)
            [
                'id_producto' => 4,
                'nombre_pro' => 'MacBook Air M2',
                'descripcion' => 'Diseño ultrafino, 8GB RAM, 256GB SSD, batería de hasta 18 horas.',
                'valor_pro' => 1099.99,
                'marca' => 102,
                'id_imagen' => 'storage/img/airpods4.png',
                'id_categoria' => 2, // Laptops
                'id__stock' => 4,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5,
                'nombre_pro' => 'Laptop Gamer Legion 5',
                'descripcion' => 'Procesador Ryzen 7, RTX 4060, 16GB RAM, pantalla 165Hz.',
                'valor_pro' => 1250.00,
                'marca' => 104, // Lenovo/Marca D
                'id_imagen' => 'storage/img/Aukey.png',
                'id_categoria' => 2,
                'id__stock' => 5,
                'id_cupon' => 0,
            ],
            [
                'id_producto' => 6,
                'nombre_pro' => 'Laptop ASUS ZenBook 14',
                'descripcion' => 'Pantalla OLED 2.8K, Intel Core i7, 16GB RAM, 512GB SSD.',
                'valor_pro' => 950.00,
                'marca' => 105, // ASUS/Marca E
                'id_imagen' => 'storage/img/cargaanker.png',
                'id_categoria' => 2,
                'id__stock' => 6,
                'id_cupon' => 3,
            ],

            // Audio y Auriculares (Categoría 3)
            [
                'id_producto' => 7,
                'nombre_pro' => 'Auriculares Inalámbricos WH-1000XM5',
                'descripcion' => 'Cancelación de ruido líder en la industria, sonido de alta resolución.',
                'valor_pro' => 380.00,
                'marca' => 106, // Sony/Marca F
                'id_imagen' => 'storage/img/cargaUgreen.png',
                'id_categoria' => 3, // Audio
                'id__stock' => 7,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 8,
                'nombre_pro' => 'AirPods Pro 2da Gen',
                'descripcion' => 'Cancelación activa de ruido, audio espacial personalizado, estuche USB-C.',
                'valor_pro' => 249.00,
                'marca' => 102,
                'id_imagen' => 'storage/img/cargbelkin.png',
                'id_categoria' => 3,
                'id__stock' => 8,
                'id_cupon' => 0,
            ],
            [
                'id_producto' => 9,
                'nombre_pro' => 'Altavoz Portátil JBL Charge 5',
                'descripcion' => 'Resistente al agua IP67, 20 horas de reproducción, sonido potente.',
                'valor_pro' => 179.99,
                'marca' => 107, // JBL/Marca G
                'id_imagen' => 'storage/img/chargeworx.png',
                'id_categoria' => 3,
                'id__stock' => 9,
                'id_cupon' => 2,
            ],

            // Periféricos y Accesorios (Categoría 4)
            [
                'id_producto' => 10,
                'nombre_pro' => 'Mouse Gamer MX Master 3S',
                'descripcion' => 'Sensor de 8000 DPI, clics silenciosos, desplazamiento MagSpeed.',
                'valor_pro' => 99.99,
                'marca' => 108, // Logitech/Marca H
                'id_imagen' => 'storage/img/iniu.png',
                'id_categoria' => 4, // Periféricos
                'id__stock' => 10,
                'id_cupon' => 0,
            ],
            [
                'id_producto' => 11,
                'nombre_pro' => 'Teclado Mecánico RGB Pro',
                'descripcion' => 'Switches mecánicos táctiles, retroiluminación RGB por tecla, chasis de aluminio.',
                'valor_pro' => 129.50,
                'marca' => 108,
                'id_imagen' => 'storage/img/logots.png',
                'id_categoria' => 4,
                'id__stock' => 11,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 12,
                'nombre_pro' => 'Cargador Rápido GaN 65W USB-C',
                'descripcion' => 'Carga rápida multidispositivo de 3 puertos, tamaño compacto.',
                'valor_pro' => 35.00,
                'marca' => 103,
                'id_imagen' => 'storage/img/maxell.png',
                'id_categoria' => 4,
                'id__stock' => 12,
                'id_cupon' => 0,
            ],

            // Smartwatches y Wearables (Categoría 5)
            [
                'id_producto' => 13,
                'nombre_pro' => 'Smartwatch Galaxy Watch 6',
                'descripcion' => 'Monitoreo de salud avanzado, GPS integrado, pantalla Always On.',
                'valor_pro' => 299.99,
                'marca' => 101,
                'id_imagen' => 'storage/img/RAW.png',
                'id_categoria' => 5, // Wearables
                'id__stock' => 13,
                'id_cupon' => 2,
            ],
            [
                'id_producto' => 14,
                'nombre_pro' => 'Apple Watch Series 9',
                'descripcion' => 'Gesto de doble toque, pantalla de 2000 nits, seguimiento de entrenamiento.',
                'valor_pro' => 399.00,
                'marca' => 102,
                'id_imagen' => 'storage/img/spinge.png',
                'id_categoria' => 5,
                'id__stock' => 14,
                'id_cupon' => 0,
            ],

            // Monitores y Televisores (Categoría 6)
            [
                'id_producto' => 15,
                'nombre_pro' => 'Monitor Gamer 27" 144Hz',
                'descripcion' => 'Panel IPS Full HD, 1ms de respuesta, compatible con FreeSync.',
                'valor_pro' => 219.99,
                'marca' => 101,
                'id_imagen' => 'storage/img/voomy.png',
                'id_categoria' => 6, // Monitores
                'id__stock' => 15,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 16,
                'nombre_pro' => 'Smart TV 55" 4K OLED',
                'descripcion' => 'Resolución 4K UHD, HDR10+, procesador con IA, Dolby Atmos.',
                'valor_pro' => 850.00,
                'marca' => 106,
                'id_imagen' => 'storage/img/5.png',
                'id_categoria' => 6,
                'id__stock' => 16,
                'id_cupon' => 3,
            ],

            // Consolas y Gaming (Categoría 7)
            [
                'id_producto' => 17,
                'nombre_pro' => 'Consola PlayStation 5 Edición Digital',
                'descripcion' => 'SSD ultrarrápido de 825GB, audio 3D, gatillos adaptativos.',
                'valor_pro' => 449.99,
                'marca' => 106,
                'id_imagen' => 'storage/img/airpods3.png',
                'id_categoria' => 7, // Consolas
                'id__stock' => 17,
                'id_cupon' => 0,
            ],
            [
                'id_producto' => 18,
                'nombre_pro' => 'Mando Inalámbrico DualSense',
                'descripcion' => 'Retroalimentación háptica, micrófono integrado, botón crear.',
                'valor_pro' => 69.99,
                'marca' => 106,
                'id_imagen' => 'storage/img/cargaanker.png',
                'id_categoria' => 7,
                'id__stock' => 18,
                'id_cupon' => 1,
            ],

            // Almacenamiento (Categoría 8)
            [
                'id_producto' => 19,
                'nombre_pro' => 'Disco Duro Externo 2TB USB 3.0',
                'descripcion' => 'Almacenamiento portátil, compatibilidad plug-and-play.',
                'valor_pro' => 65.00,
                'marca' => 106,
                'id_imagen' => 'storage/img/logots.png',
                'id_categoria' => 8, // Almacenamiento
                'id__stock' => 19,
                'id_cupon' => 0,
            ],
            [
                'id_producto' => 20,
                'nombre_pro' => 'SSD M.2 NVMe 1TB High Speed',
                'descripcion' => 'Velocidad de lectura de hasta 7000 MB/s, disipador de calor incluido.',
                'valor_pro' => 110.00,
                'marca' => 101,
                'id_imagen' => 'storage/img/RAW.png',
                'id_categoria' => 8,
                'id__stock' => 20,
                'id_cupon' => 2,
            ],
        ];

        DB::table('producto')->insertOrIgnore($productos);
    }
}