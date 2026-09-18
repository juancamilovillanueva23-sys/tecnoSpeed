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
            // --------------------Productos Audifonos-------------------------------------------------------------
            [
                'id_producto' => 1001,
                'nombre_pro' => 'AirPods Pro 2',
                'descripcion' => 'Auriculares inalámbricos con cancelación activa de ruido premium y audio adaptativo.',
                'valor_pro' => 70000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/airpods2.jpg',
                'id_categoria' => 2, // Audífonos
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1002,
                'nombre_pro' => 'AirPods Pro 3',
                'descripcion' => 'Siguiente generación con sonido de alta fidelidad y mejoras en el estuche de carga inteligente.',
                'valor_pro' => 80000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/airpods_pro3.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1003,
                'nombre_pro' => 'AirPods Pro 4',
                'descripcion' => 'Diseño ergonómico avanzado, mayor duración de batería y audio espacial personalizado.',
                'valor_pro' => 90000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/airpods4.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1004,
                'nombre_pro' => 'AirPods Pro Max',
                'descripcion' => 'Auriculares de diadema premium con transductor dinámico diseñado por Apple y modo ambiente.',
                'valor_pro' => 130000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/airpods_max.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1005,
                'nombre_pro' => 'EarPods con conector USB-C',
                'descripcion' => 'Auriculares de cable clásicos con micrófono integrado y conector USB tipo C nativo.',
                'valor_pro' => 65000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/Earusb-c.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1006,
                'nombre_pro' => 'EarPods con conector Lightning',
                'descripcion' => 'Auriculares cableados tradicionales con mando a distancia para control de volumen.',
                'valor_pro' => 70000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/Earlight.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1007,
                'nombre_pro' => 'Sony Noise On-Ear',
                'descripcion' => 'Auriculares supraaurales con cancelación de ruido inteligente y diseño plegable.',
                'valor_pro' => 105990,
                'marca' => 103, // Sony
                'id_imagen' => 'storage/img/Earsony-noise.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1008,
                'nombre_pro' => 'Samsung Galaxy Buds 3',
                'descripcion' => 'Diseño renovado de ajuste abierto con cancelación de ruido y sonido nítido de 24 bits.',
                'valor_pro' => 60990,
                'marca' => 101, // Samsung
                'id_imagen' => 'storage/img/sambud3.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1009,
                'nombre_pro' => 'Galaxy Buds Core',
                'descripcion' => 'Edición esencial con graves potentes, batería de larga duración y resistencia al agua.',
                'valor_pro' => 60000,
                'marca' => 101, // Samsung
                'id_imagen' => 'storage/img/galbudscor.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 1010,
                'nombre_pro' => 'JBL Wave Buds',
                'descripcion' => 'Auriculares in-ear ergonómicos resistentes al polvo y salpicaduras con sonido Deep Bass.',
                'valor_pro' => 65000,
                'marca' => 104, // JBL
                'id_imagen' => 'storage/img/jblwavebuds.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],

            // --------------------Productos Celulares-------------------------------------------------------------
            [
                'id_producto' => 2001,
                'nombre_pro' => 'iPhone 15 Pro Max',
                'descripcion' => 'Pantalla Super Retina XDR de 6.7", chip A17 Pro, almacenamiento de 256GB y cuerpo de titanio.',
                'valor_pro' => 3100000,
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
                'valor_pro' => 2500000,
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
                'valor_pro' => 1750000,
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
                'valor_pro' => 1500000,
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
                'valor_pro' => 250000,
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
                'valor_pro' => 2600000,
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
                'valor_pro' => 2500000,
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
                'valor_pro' => 2800000,
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
                'valor_pro' => 2300000,
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
                'valor_pro' => 750000,
                'marca' => 101, // Samsung
                'id_imagen' => 'storage/img/1.jpg',
                'id_categoria' => 1,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],

            // --------------------Productos Accesorios-------------------------------------------------------------
            [
                'id_producto' => 3001,
                'nombre_pro' => 'Funda para PC Portátil',
                'descripcion' => 'Funda de neopreno acolchada e impermeable para laptops de hasta 15.6 pulgadas con bolsillo frontal.',
                'valor_pro' => 24990,
                'marca' => 102,
                'id_imagen' => 'storage/img/3001.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3002,
                'nombre_pro' => 'Funda Audífonos AirPods Pro 2',
                'descripcion' => 'Funda de silicona de alta resistencia con mosquetón antirrobo y soporte para carga inalámbrica.',
                'valor_pro' => 12500,
                'marca' => 103,
                'id_imagen' => 'storage/img/3002.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3003,
                'nombre_pro' => 'Funda Audífonos AirPods Pro 3',
                'descripcion' => 'Estuche protector con acabado mate tacto suave, protección 360° contra caídas y polvo.',
                'valor_pro' => 14000,
                'marca' => 103,
                'id_imagen' => 'storage/img/3003.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3004,
                'nombre_pro' => 'Funda Audífonos AirPods Pro 4',
                'descripcion' => 'Funda rígida con textura de fibra de carbono, cierre magnético de seguridad y clip de transporte.',
                'valor_pro' => 15990,
                'marca' => 103,
                'id_imagen' => 'storage/img/3004.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3005,
                'nombre_pro' => 'Cordón Colgante Anti-Pérdida',
                'descripcion' => 'Correa ajustable universal para teléfono celular, elaborada en trenzado de nailon reforzado.',
                'valor_pro' => 8990,
                'marca' => 104,
                'id_imagen' => 'storage/img/3005.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3006,
                'nombre_pro' => 'Soporte para Celular',
                'descripcion' => 'Soporte de escritorio fabricado en aluminio con ángulo de inclinación y altura ajustable.',
                'valor_pro' => 18000,
                'marca' => 104,
                'id_imagen' => 'storage/img/3006.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3007,
                'nombre_pro' => 'Batería Portátil',
                'descripcion' => 'Power bank de 10,000 mAh con carga rápida de 22.5W, doble puerto USB-C y pantalla LED de carga.',
                'valor_pro' => 35500,
                'marca' => 105,
                'id_imagen' => 'storage/img/3007.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3008,
                'nombre_pro' => 'Aro de Luz para Celular',
                'descripcion' => 'Luz LED recargable en clip con 3 niveles de brillo para mejores fotos, videos y llamadas.',
                'valor_pro' => 11990,
                'marca' => 104,
                'id_imagen' => 'storage/img/3008.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3009,
                'nombre_pro' => 'Teclado Gamer',
                'descripcion' => 'Teclado mecánico retroiluminado RGB con switches azules, respuesta ultrarrápida y Anti-Ghosting.',
                'valor_pro' => 59990,
                'marca' => 106,
                'id_imagen' => 'storage/img/3009.jpg',
                'id_categoria' => 4,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 3010,
                'nombre_pro' => 'Mouse Ergonómico',
                'descripcion' => 'Mouse vertical inalámbrico diseñado para reducir la tensión muscular, con DPI ajustable hasta 3200.',
                'valor_pro' => 29990,
                'marca' => 106,
                'id_imagen' => 'storage/img/3010.jpg',
                'id_categoria' => 4,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],

            // --------------------Productos Parlantes-------------------------------------------------------------
            [
                'id_producto' => 4001,
                'nombre_pro' => 'JBL Go 4',
                'descripcion' => 'Parlante bluetooth portátil ultra compacto con sonido JBL Pro Sound, protección IP67 y hasta 7 horas de autonomía.',
                'valor_pro' => 219900,
                'marca' => 104, // JBL
                'id_imagen' => 'storage/img/4001.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4002,
                'nombre_pro' => 'JBL Flip 6',
                'descripcion' => 'Altavoz portátil impermeable IP67 con sistema de altavoces de 2 vías, graves profundos y función PartyBoost.',
                'valor_pro' => 695000,
                'marca' => 104, // JBL
                'id_imagen' => 'storage/img/4002.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4003,
                'nombre_pro' => 'JBL Charge 5',
                'descripcion' => 'Parlante bluetooth de 40W con power bank integrado, sonido potente JBL Original Pro y 20 horas de batería.',
                'valor_pro' => 787000,
                'marca' => 104, // JBL
                'id_imagen' => 'storage/img/4003.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4004,
                'nombre_pro' => 'Sony SRS-XB100',
                'descripcion' => 'Parlante inalámbrico compacto con Extra Bass, procesador de difusión de sonido, correa multidireccional y resistencia IP67.',
                'valor_pro' => 169900,
                'marca' => 103, // Sony
                'id_imagen' => 'storage/img/4004.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4005,
                'nombre_pro' => 'Sony ULT Field 1',
                'descripcion' => 'Parlante portátil de alta potencia con botón ULT Power Sound para graves mejorados y correa de transporte ajustable.',
                'valor_pro' => 299900,
                'marca' => 103, // Sony
                'id_imagen' => 'storage/img/4005.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4006,
                'nombre_pro' => 'Bose SoundLink Micro',
                'descripcion' => 'Altavoz pequeño y resistente con cubierta de silicona, clip flexible antirrasgaduras y cancelación de eco para llamadas.',
                'valor_pro' => 595900,
                'marca' => 105,
                'id_imagen' => 'storage/img/4006.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4007,
                'nombre_pro' => 'Bose SoundLink Flex II',
                'descripcion' => 'Parlante bluetooth portátil premium con tecnología PositionIQ que optimiza el sonido según la orientación.',
                'valor_pro' => 649900,
                'marca' => 105,
                'id_imagen' => 'storage/img/4007.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4008,
                'nombre_pro' => 'Xiaomi Sound Pocket 5W',
                'descripcion' => 'Parlante portátil súper liviano con 5W de potencia, conectividad Bluetooth 5.4 y diseño con cuerda integrada.',
                'valor_pro' => 79900,
                'marca' => 105,
                'id_imagen' => 'storage/img/4008.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4009,
                'nombre_pro' => 'Xiaomi Sound Party 50W',
                'descripcion' => 'Parlante potente de 50W con resistencia IP67, luces ambientales dinámicas y hasta 13 horas de uso continuo.',
                'valor_pro' => 419900,
                'marca' => 105,
                'id_imagen' => 'storage/img/4009.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 4010,
                'nombre_pro' => 'Anker Soundcore Select 4 Go',
                'descripcion' => 'Altavoz ultra portátil de 5W RMS resistente al agua IP67, ideal para exteriores con hasta 15 horas de batería.',
                'valor_pro' => 129900,
                'marca' => 106,
                'id_imagen' => 'storage/img/4010.jpg',
                'id_categoria' => 2,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            // --------------------Productos Cargadores-------------------------------------------------------------
            [
                'id_producto' => 5001,
                'nombre_pro' => 'Cargador de Corriente Apple 20W USB-C',
                'descripcion' => 'Adaptador de corriente USB-C de 20W para carga rápida de dispositivos iPhone y iPad compatibles.',
                'valor_pro' => 120000,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/5001.jpg',
                'id_categoria' => 3, // Cargadores / Accesorios
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5002,
                'nombre_pro' => 'Cargador Pared Samsung 25W Carga Rápida USB-C',
                'descripcion' => 'Adaptador de pared con tecnología Super Fast Charging de 25W para dispositivos Samsung Galaxy.',
                'valor_pro' => 89900,
                'marca' => 101, // Samsung
                'id_imagen' => 'storage/img/5002.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5003,
                'nombre_pro' => 'Cargador Turbo Xiaomi 67W con Cable Type-C',
                'descripcion' => 'Combo cargador de pared Xiaomi de 67W con tecnología HyperCharge para smartphones gama alta.',
                'valor_pro' => 119900,
                'marca' => 105, // Xiaomi
                'id_imagen' => 'storage/img/5003.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5004,
                'nombre_pro' => 'Cargador Anker Nano 20W USB-C',
                'descripcion' => 'Cargador de pared ultra compacto Power Delivery de 20W optimizado para celulares y tabletas.',
                'valor_pro' => 79900,
                'marca' => 106, // Anker
                'id_imagen' => 'storage/img/5004.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5005,
                'nombre_pro' => 'Cargador Belkin BoostCharge 30W USB-C PD',
                'descripcion' => 'Cargador de pared rápido de 30W con Power Delivery PPS, protección contra sobrecargas.',
                'valor_pro' => 99900,
                'marca' => 104, // Belkin
                'id_imagen' => 'storage/img/5005.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5006,
                'nombre_pro' => 'Cargador Motorola TurboPower 30W USB-C',
                'descripcion' => 'Adaptador de pared original Motorola TurboPower de 30W para carga ultrarrápida de smartphones.',
                'valor_pro' => 99900,
                'marca' => 103, // Motorola / General
                'id_imagen' => 'storage/img/5006.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5007,
                'nombre_pro' => 'Cargador Huawei SuperCharge 22.5W',
                'descripcion' => 'Cargador rápido de pared Huawei 22.5W con cable tipo C incluido y sistema inteligente de control de temperatura.',
                'valor_pro' => 69900,
                'marca' => 105, // Huawei / General
                'id_imagen' => 'storage/img/5007.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5008,
                'nombre_pro' => 'Cargador Kalley Dual USB 60W GaN',
                'descripcion' => 'Cargador de pared de alta eficiencia con tecnología GaN, doble puerto USB-C y puerto USB-A hasta 60W.',
                'valor_pro' => 115900,
                'marca' => 106, // Kalley
                'id_imagen' => 'storage/img/5008.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5009,
                'nombre_pro' => 'Cargador Samsung Super Fast Charging 45W',
                'descripcion' => 'Adaptador de corriente de 45W USB-C PD 3.0 para la serie Samsung Galaxy Ultra y laptops livianas.',
                'valor_pro' => 149900,
                'marca' => 101, // Samsung
                'id_imagen' => 'storage/img/5009.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ],
            [
                'id_producto' => 5010,
                'nombre_pro' => 'Cargador Doble Puerto Apple 35W USB-C Compacto',
                'descripcion' => 'Adaptador de corriente compacto con dos puertos USB-C para cargar dos dispositivos simultáneamente.',
                'valor_pro' => 299900,
                'marca' => 102, // Apple
                'id_imagen' => 'storage/img/5010.jpg',
                'id_categoria' => 3,
                'id__stock' => 1,
                'id_cupon' => 1,
            ]
        ];

        DB::table('producto')->insertOrIgnore($productos);
    }
}