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
    [
        'id_producto' => 1001,
        'nombre_pro' => 'AirPods Pro 2',
        'descripcion' => 'Auriculares inalámbricos con cancelación activa de ruido premium y audio adaptativo.',
        'valor_pro' => 70.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2, // Audífonos
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1002,
        'nombre_pro' => 'AirPods Pro 3',
        'descripcion' => 'Siguiente generación con sonido de alta fidelidad y mejoras en el estuche de carga inteligente.',
        'valor_pro' => 80.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1003,
        'nombre_pro' => 'AirPods Pro 4',
        'descripcion' => 'Diseño ergonómico avanzado, mayor duración de batería y audio espacial personalizado.',
        'valor_pro' => 90.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1004,
        'nombre_pro' => 'AirPods Pro Max',
        'descripcion' => 'Auriculares de diadema premium con transductor dinámico diseñado por Apple y modo ambiente.',
        'valor_pro' => 130.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1005,
        'nombre_pro' => 'EarPods con conector USB-C',
        'descripcion' => 'Auriculares de cable clásicos con micrófono integrado y conector USB tipo C nativo.',
        'valor_pro' => 65.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1006,
        'nombre_pro' => 'EarPods con conector Lightning',
        'descripcion' => 'Auriculares cableados tradicionales con mando a distancia para control de volumen.',
        'valor_pro' => 70.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1007,
        'nombre_pro' => 'Sony Noise On-Ear',
        'descripcion' => 'Auriculares supraaurales con cancelación de ruido inteligente y diseño plegable.',
        'valor_pro' => 105.990,
        'marca' => 103, // Sony
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1008,
        'nombre_pro' => 'Samsung Galaxy Buds 3',
        'descripcion' => 'Diseño renovado de ajuste abierto con cancelación de ruido y sonido nítido de 24 bits.',
        'valor_pro' => 60.990,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1009,
        'nombre_pro' => 'Galaxy Buds Core',
        'descripcion' => 'Edición esencial con graves potentes, batería de larga duración y resistencia al agua.',
        'valor_pro' => 60.000,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 1010,
        'nombre_pro' => 'JBL Wave Buds',
        'descripcion' => 'Auriculares in-ear ergonómicos resistentes al polvo y salpicaduras con sonido Deep Bass.',
        'valor_pro' => 65.000,
        'marca' => 104, // JBL
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 2,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2001,
        'nombre_pro' => 'iPhone 15 Pro Max',
        'descripcion' => 'Pantalla Super Retina XDR de 6.7", chip A17 Pro, almacenamiento de 256GB y cuerpo de titanio.',
        'valor_pro' => 3,100.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1, // Celulares
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2002,
        'nombre_pro' => 'iPhone 15 Pro',
        'descripcion' => 'Pantalla de 6.1", sistema de cámaras Pro con teleobjetivo y puerto USB-C de alta velocidad.',
        'valor_pro' => 2,500.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2003,
        'nombre_pro' => 'iPhone 15',
        'descripcion' => 'Pantalla de 6.1" con Dynamic Island, cámara principal de 48 MP y diseño de vidrio tintado.',
        'valor_pro' => 1,750.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2004,
        'nombre_pro' => 'iPhone 14 Plus',
        'descripcion' => 'Pantalla grande de 6.7", batería de ultra larga duración y sistema de detección de choques.',
        'valor_pro' => 1,500.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2005,
        'nombre_pro' => 'iPhone SE 2022',
        'descripcion' => 'Diseño compacto con chip A15 Bionic, conectividad 5G y botón de inicio clásico con Touch ID.',
        'valor_pro' => 250.000,
        'marca' => 102, // Apple
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2006,
        'nombre_pro' => 'Samsung Galaxy S24 Ultra',
        'descripcion' => 'Pantalla QHD+ de 6.8", procesador Snapdragon 8 Gen 3, cámara de 200MP y S-Pen integrado con Galaxy AI.',
        'valor_pro' => 2,600.000,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2007,
        'nombre_pro' => 'Samsung Galaxy S24 Plus',
        'descripcion' => 'Pantalla Dynamic AMOLED 2X de 6.7", batería de 4900 mAh y herramientas avanzadas de inteligencia artificial.',
        'valor_pro' => 2,500.000,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2008,
        'nombre_pro' => 'Samsung Galaxy Z Fold 5',
        'descripcion' => 'Smartphone plegable premium, pantalla principal de 7.6" al abrirse, ideal para multitarea.',
        'valor_pro' => 2,800.000,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2009,
        'nombre_pro' => 'Samsung Galaxy Z Flip 5',
        'descripcion' => 'Diseño plegable compacto tipo concha con pantalla exterior Flex Window mejorada de 3.4".',
        'valor_pro' => 2,300.000,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ],
    [
        'id_producto' => 2010,
        'nombre_pro' => 'Samsung Galaxy A55 5G',
        'descripcion' => 'Pantalla Super AMOLED de 6.6", cámara triple de 50MP con Nightography y resistencia IP67 contra agua.',
        'valor_pro' => 750.000,
        'marca' => 101, // Samsung
        'id_imagen' => 'storage/img/1.jpg',
        'id_categoria' => 1,
        'id__stock' => 1,
        'id_cupon' => 1,
    ]
];


        DB::table('producto')->insertOrIgnore($productos);
    }
}