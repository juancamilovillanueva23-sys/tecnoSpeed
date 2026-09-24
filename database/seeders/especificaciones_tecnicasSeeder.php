<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class especificaciones_tecnicasSeeder extends Seeder
{
    public function run(): void
    {
        $especificaciones = [
            // =========================================================================
            // AUDÍFONOS (Categoría 2)
            // =========================================================================

            // 1001: AirPods Pro 2
            ['id_producto' => 1001, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear (Inalámbrico TWS)'],
            ['id_producto' => 1001, 'clave' => 'Cancelación de Ruido', 'valor' => 'Cancelación Activa de Ruido (ANC) y Audio Adaptativo'],
            ['id_producto' => 1001, 'clave' => 'Conectividad', 'valor' => 'Bluetooth 5.3 (Chip H2)'],
            ['id_producto' => 1001, 'clave' => 'Batería', 'valor' => 'Hasta 6 hrs (30 hrs con estuche de carga)'],
            ['id_producto' => 1001, 'clave' => 'Resistencia al agua', 'valor' => 'IP54 (Audífonos y estuche)'],

            // 1002: AirPods Pro 3
            ['id_producto' => 1002, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear (Inalámbrico TWS)'],
            ['id_producto' => 1002, 'clave' => 'Cancelación de Ruido', 'valor' => 'ANC Avanzada de nueva generación'],
            ['id_producto' => 1002, 'clave' => 'Audio', 'valor' => 'Sonido Hi-Fi con Audio Espacial Personalizado'],
            ['id_producto' => 1002, 'clave' => 'Estuche', 'valor' => 'Estuche Inteligente USB-C con altavoz integrado'],

            // 1003: AirPods Pro 4
            ['id_producto' => 1003, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear (Ergonómico Avanzado)'],
            ['id_producto' => 1003, 'clave' => 'Cancelación de Ruido', 'valor' => 'Cancelación de Ruido Híbrida Dinámica'],
            ['id_producto' => 1003, 'clave' => 'Batería', 'valor' => 'Hasta 8 hrs continuas'],
            ['id_producto' => 1003, 'clave' => 'Sensores', 'valor' => 'Seguimiento dinámico de la cabeza / Audio Espacial'],

            // 1004: AirPods Pro Max
            ['id_producto' => 1004, 'clave' => 'Tipo de Auricular', 'valor' => 'Over-Ear (Diadema)'],
            ['id_producto' => 1004, 'clave' => 'Transductor', 'valor' => 'Dinámico diseñado por Apple'],
            ['id_producto' => 1004, 'clave' => 'Conectividad', 'valor' => 'Bluetooth 5.0'],
            ['id_producto' => 1004, 'clave' => 'Autonomía', 'valor' => 'Hasta 20 horas con ANC activo'],
            ['id_producto' => 1004, 'clave' => 'Materiales', 'valor' => 'Malla tejida y copas de aluminio anodizado'],

            // 1005: EarPods con conector USB-C
            ['id_producto' => 1005, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear (Cableado)'],
            ['id_producto' => 1005, 'clave' => 'Conector', 'valor' => 'USB Type-C'],
            ['id_producto' => 1005, 'clave' => 'Micrófono / Control', 'valor' => 'Mando integrado en el cable'],
            ['id_producto' => 1005, 'clave' => 'Audio', 'valor' => 'DAC digital integrado para sonido sin pérdidas'],

            // 1006: EarPods con conector Lightning
            ['id_producto' => 1006, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear (Cableado)'],
            ['id_producto' => 1006, 'clave' => 'Conector', 'valor' => 'Apple Lightning'],
            ['id_producto' => 1006, 'clave' => 'Controles', 'valor' => 'Ajuste de volumen y control de llamadas'],
            ['id_producto' => 1006, 'clave' => 'Compatibilidad', 'valor' => 'Dispositivos iOS con puerto Lightning'],

            // 1007: Sony Noise On-Ear
            ['id_producto' => 1007, 'clave' => 'Tipo de Auricular', 'valor' => 'On-Ear (Supraaural Plegable)'],
            ['id_producto' => 1007, 'clave' => 'Cancelación de Ruido', 'valor' => 'Procesador V1 de Sony'],
            ['id_producto' => 1007, 'clave' => 'Autonomía', 'valor' => 'Hasta 35 horas'],
            ['id_producto' => 1007, 'clave' => 'Carga Rápida', 'valor' => '3 min de carga = 1 hora de reproducción'],

            // 1008: Samsung Galaxy Buds 3
            ['id_producto' => 1008, 'clave' => 'Diseño', 'valor' => 'Ajuste abierto / Ergonómico'],
            ['id_producto' => 1008, 'clave' => 'Calidad de Audio', 'valor' => 'Audio Hi-Fi de 24 bits / SSC Codec'],
            ['id_producto' => 1008, 'clave' => 'Cancelación de Ruido', 'valor' => 'ANC optimizada por IA'],
            ['id_producto' => 1008, 'clave' => 'Resistencia', 'valor' => 'IP57'],

            // 1009: Galaxy Buds Core
            ['id_producto' => 1009, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear (Inalámbrico)'],
            ['id_producto' => 1009, 'clave' => 'Perfil de Sonido', 'valor' => 'Graves potentes (Bass Boost)'],
            ['id_producto' => 1009, 'clave' => 'Batería', 'valor' => 'Hasta 30 horas totales con estuche'],
            ['id_producto' => 1009, 'clave' => 'Resistencia', 'valor' => 'IPX2 resistente a salpicaduras'],

            // 1010: JBL Wave Buds
            ['id_producto' => 1010, 'clave' => 'Tipo de Auricular', 'valor' => 'In-Ear TWS'],
            ['id_producto' => 1010, 'clave' => 'Tecnología de Sonido', 'valor' => 'JBL Deep Bass Sound (Drivers de 8mm)'],
            ['id_producto' => 1010, 'clave' => 'Autonomía', 'valor' => '32 horas (8h en auriculares + 24h en estuche)'],
            ['id_producto' => 1010, 'clave' => 'Protección', 'valor' => 'IP54 (Auriculares) / IPX2 (Estuche)'],


            // =========================================================================
            // CELULARES (Categoría 1)
            // =========================================================================

            // 2001: iPhone 15 Pro Max
            ['id_producto' => 2001, 'clave' => 'Pantalla', 'valor' => '6.7" Super Retina XDR OLED (120 Hz ProMotion)'],
            ['id_producto' => 2001, 'clave' => 'Procesador', 'valor' => 'Apple A17 Pro (3 nm)'],
            ['id_producto' => 2001, 'clave' => 'Almacenamiento', 'valor' => '256 GB'],
            ['id_producto' => 2001, 'clave' => 'Cámara Principal', 'valor' => '48 MP (Principal) + 12 MP (Ultra gran angular) + 12 MP (Teleobjetivo 5x)'],
            ['id_producto' => 2001, 'clave' => 'Material', 'valor' => 'Estructura de titanio aeroespacial'],

            // 2002: iPhone 15 Pro
            ['id_producto' => 2002, 'clave' => 'Pantalla', 'valor' => '6.1" Super Retina XDR OLED (120 Hz)'],
            ['id_producto' => 2002, 'clave' => 'Procesador', 'valor' => 'Apple A17 Pro'],
            ['id_producto' => 2002, 'clave' => 'Cámara Principal', 'valor' => 'Sistema Pro 48 MP con Teleobjetivo 3x'],
            ['id_producto' => 2002, 'clave' => 'Conector', 'valor' => 'USB-C (compatibilidad con USB 3 hasta 10 Gb/s)'],

            // 2003: iPhone 15
            ['id_producto' => 2003, 'clave' => 'Pantalla', 'valor' => '6.1" Super Retina XDR con Dynamic Island'],
            ['id_producto' => 2003, 'clave' => 'Procesador', 'valor' => 'Apple A16 Bionic'],
            ['id_producto' => 2003, 'clave' => 'Cámara Principal', 'valor' => '48 MP con Teleobjetivo de 2x integrado'],
            ['id_producto' => 2003, 'clave' => 'Diseño', 'valor' => 'Vidrio trasero tintado en masa y marco de aluminio'],

            // 2004: iPhone 14 Plus
            ['id_producto' => 2004, 'clave' => 'Pantalla', 'valor' => '6.7" Super Retina XDR OLED'],
            ['id_producto' => 2004, 'clave' => 'Procesador', 'valor' => 'Apple A15 Bionic (GPU de 5 núcleos)'],
            ['id_producto' => 2004, 'clave' => 'Batería', 'valor' => 'Hasta 26 horas de reproducción de video'],
            ['id_producto' => 2004, 'clave' => 'Seguridad', 'valor' => 'Detección de accidentes de auto'],

            // 2005: iPhone SE 2022
            ['id_producto' => 2005, 'clave' => 'Pantalla', 'valor' => '4.7" Retina HD'],
            ['id_producto' => 2005, 'clave' => 'Procesador', 'valor' => 'Apple A15 Bionic'],
            ['id_producto' => 2005, 'clave' => 'Conectividad', 'valor' => 'Redes móviles 5G'],
            ['id_producto' => 2005, 'clave' => 'Biometría', 'valor' => 'Sensor de huella dactilar Touch ID'],

            // 2006: Samsung Galaxy S24 Ultra
            ['id_producto' => 2006, 'clave' => 'Pantalla', 'valor' => '6.8" Dynamic AMOLED 2X QHD+ (120 Hz)'],
            ['id_producto' => 2006, 'clave' => 'Procesador', 'valor' => 'Snapdragon 8 Gen 3 for Galaxy'],
            ['id_producto' => 2006, 'clave' => 'Cámara Principal', 'valor' => '200 MP + 50 MP + 12 MP + 10 MP (Zoom óptico hasta 10x)'],
            ['id_producto' => 2006, 'clave' => 'Funciones de IA', 'valor' => 'Galaxy AI (Traducción en vivo, Circle to Search)'],
            ['id_producto' => 2006, 'clave' => 'Accesorios', 'valor' => 'S-Pen integrado en el chasis'],

            // 2007: Samsung Galaxy S24 Plus
            ['id_producto' => 2007, 'clave' => 'Pantalla', 'valor' => '6.7" Dynamic AMOLED 2X QHD+'],
            ['id_producto' => 2007, 'clave' => 'Batería', 'valor' => '4,900 mAh con carga rápida de 45W'],
            ['id_producto' => 2007, 'clave' => 'Cámara Principal', 'valor' => '50 MP + 12 MP + 10 MP'],
            ['id_producto' => 2007, 'clave' => 'Inteligencia Artificial', 'valor' => 'Galaxy AI integrada'],

            // 2008: Samsung Galaxy Z Fold 5
            ['id_producto' => 2008, 'clave' => 'Pantalla Principal', 'valor' => '7.6" Dynamic AMOLED 2X Plegable'],
            ['id_producto' => 2008, 'clave' => 'Pantalla Exterior', 'valor' => '6.2" Dynamic AMOLED 2X'],
            ['id_producto' => 2008, 'clave' => 'Procesador', 'valor' => 'Snapdragon 8 Gen 2 for Galaxy'],
            ['id_producto' => 2008, 'clave' => 'Bisagra', 'valor' => 'Flex Hinge de gota sin espacios'],

            // 2009: Samsung Galaxy Z Flip 5
            ['id_producto' => 2009, 'clave' => 'Pantalla Principal', 'valor' => '6.7" FHD+ Dynamic AMOLED 2X (120 Hz)'],
            ['id_producto' => 2009, 'clave' => 'Pantalla Cover', 'valor' => '3.4" Super AMOLED Flex Window'],
            ['id_producto' => 2009, 'clave' => 'Diseño', 'valor' => 'Plegable tipo concha ultra compacto'],

            // 2010: Samsung Galaxy A55 5G
            ['id_producto' => 2010, 'clave' => 'Pantalla', 'valor' => '6.6" FHD+ Super AMOLED (120 Hz)'],
            ['id_producto' => 2010, 'clave' => 'Procesador', 'valor' => 'Exynos 1480 Octa-Core'],
            ['id_producto' => 2010, 'clave' => 'Cámara Principal', 'valor' => '50 MP con OIS + 12 MP + 5 MP'],
            ['id_producto' => 2010, 'clave' => 'Protección', 'valor' => 'Resistencia al agua y polvo IP67 / Gorilla Glass Victus+'],


            // =========================================================================
            // ACCESORIOS Y PERIFÉRICOS (Categorías Varias / Accesorios)
            // =========================================================================

            // 3001: Funda para PC Portátil
            ['id_producto' => 3001, 'clave' => 'Compatibilidad', 'valor' => 'Laptops y MacBooks de hasta 15.6 pulgadas'],
            ['id_producto' => 3001, 'clave' => 'Material', 'valor' => 'Neopreno acolchado e impermeable'],
            ['id_producto' => 3001, 'clave' => 'Almacenamiento', 'valor' => 'Bolsillo frontal secundario para cables y accesorios'],

            // 3002: Funda Audífonos AirPods Pro 2
            ['id_producto' => 3002, 'clave' => 'Compatibilidad', 'valor' => 'Estuche de carga AirPods Pro 2'],
            ['id_producto' => 3002, 'clave' => 'Material', 'valor' => 'Silicona flexible de alta resistencia'],
            ['id_producto' => 3002, 'clave' => 'Incluye', 'valor' => 'Mosquetón metálico de enganche'],

            // 3003: Funda Audífonos AirPods Pro 3
            ['id_producto' => 3003, 'clave' => 'Acabado', 'valor' => 'Mate Soft-Touch antideslizante'],
            ['id_producto' => 3003, 'clave' => 'Protección', 'valor' => 'Protección 360° contra golpes y caídas'],
            ['id_producto' => 3003, 'clave' => 'Carga Wireless', 'valor' => 'Compatible con cargadores MagSafe y Qi'],

            // 3004: Funda Audífonos AirPods Pro 4
            ['id_producto' => 3004, 'clave' => 'Material', 'valor' => 'Policarbonato rígido con textura de fibra de carbono'],
            ['id_producto' => 3004, 'clave' => 'Mecanismo', 'valor' => 'Cierre magnético de seguridad anti-aperturas'],

            // 3005: Cordón Colgante Anti-Pérdida
            ['id_producto' => 3005, 'clave' => 'Material', 'valor' => 'Nailon trenzado reforzado de alta densidad'],
            ['id_producto' => 3005, 'clave' => 'Compatibilidad', 'valor' => 'Universal (se inserta en cualquier funda de celular)'],
            ['id_producto' => 3005, 'clave' => 'Longitud', 'valor' => 'Ajustable mediante broche deslizante'],

            // 3006: Soporte para Celular
            ['id_producto' => 3006, 'clave' => 'Material', 'valor' => 'Aleación de aluminio de alta resistencia'],
            ['id_producto' => 3006, 'clave' => 'Ajuste', 'valor' => 'Ángulo de inclinación (0°-270°) y altura regulable'],
            ['id_producto' => 3006, 'clave' => 'Base', 'valor' => 'Almohadillas de silicona antideslizantes'],

            // 3007: Batería Portátil
            ['id_producto' => 3007, 'clave' => 'Capacidad', 'valor' => '10,000 mAh'],
            ['id_producto' => 3007, 'clave' => 'Potencia de Carga', 'valor' => '22.5W Carga Ultrarrápida Power Delivery / Quick Charge'],
            ['id_producto' => 3007, 'clave' => 'Pantalla', 'valor' => 'Indicador LED numérico de porcentaje de batería'],

            // 3008: Aro de Luz para Celular
            ['id_producto' => 3008, 'clave' => 'Iluminación', 'valor' => 'LED con 3 niveles de brillo regulables'],
            ['id_producto' => 3008, 'clave' => 'Fijación', 'valor' => 'Clip acolchado para no rayar la pantalla'],
            ['id_producto' => 3008, 'clave' => 'Alimentación', 'valor' => 'Batería interna recargable vía Micro-USB / USB-C'],

            // 3009: Teclado Gamer
            ['id_producto' => 3009, 'clave' => 'Tipo de Switch', 'valor' => 'Mecánico Azul (Táctil con click audible)'],
            ['id_producto' => 3009, 'clave' => 'Iluminación', 'valor' => 'RGB con múltiples modos dinámicos'],
            ['id_producto' => 3009, 'clave' => 'Tecnología', 'valor' => '100% Anti-Ghosting con N-Key Rollover'],

            // 3010: Mouse Ergonómico
            ['id_producto' => 3010, 'clave' => 'Diseño', 'valor' => 'Vertical ergonómico a 57°'],
            ['id_producto' => 3010, 'clave' => 'Sensibilidad', 'valor' => 'DPI ajustable (800 / 1200 / 1600 / 3200 DPI)'],
            ['id_producto' => 3010, 'clave' => 'Conectividad', 'valor' => 'Inalámbrica 2.4GHz USB + Bluetooth'],


            // =========================================================================
            // PARLANTES (Categoría 2)
            // =========================================================================

            // 4001: JBL Go 4
            ['id_producto' => 4001, 'clave' => 'Potencia', 'valor' => '4.2W RMS'],
            ['id_producto' => 4001, 'clave' => 'Autonomía', 'valor' => 'Hasta 7 horas de reproducción continua'],
            ['id_producto' => 4001, 'clave' => 'Resistencia', 'valor' => 'Certificación IP67 (Impermeable y resistente al polvo)'],
            ['id_producto' => 4001, 'clave' => 'Conectividad', 'valor' => 'Bluetooth 5.3 con Auracast'],

            // 4002: JBL Flip 6
            ['id_producto' => 4002, 'clave' => 'Sistema de Audio', 'valor' => 'Altavoz de 2 vías (30W RMS total)'],
            ['id_producto' => 4002, 'clave' => 'Resistencia al Agua', 'valor' => 'IP67 sumergible'],
            ['id_producto' => 4002, 'clave' => 'Batería', 'valor' => 'Hasta 12 horas'],
            ['id_producto' => 4002, 'clave' => 'Emparejamiento', 'valor' => 'JBL PartyBoost'],

            // 4003: JBL Charge 5
            ['id_producto' => 4003, 'clave' => 'Potencia', 'valor' => '40W RMS (Woofer de 30W + Tweeter de 10W)'],
            ['id_producto' => 4003, 'clave' => 'Autonomía', 'valor' => 'Hasta 20 horas'],
            ['id_producto' => 4003, 'clave' => 'Función Powerbank', 'valor' => 'Permite cargar celulares mediante salida USB-A'],

            // 4004: Sony SRS-XB100
            ['id_producto' => 4004, 'clave' => 'Perfil de Audio', 'valor' => 'EXTRA BASS con procesador de difusión de sonido'],
            ['id_producto' => 4004, 'clave' => 'Autonomía', 'valor' => 'Hasta 16 horas'],
            ['id_producto' => 4004, 'clave' => 'Manos Libres', 'valor' => 'Micrófono integrado con cancelación de eco'],

            // 4005: Sony ULT Field 1
            ['id_producto' => 4005, 'clave' => 'Modo de Audio', 'valor' => 'Botón ULT para potenciar graves'],
            ['id_producto' => 4005, 'clave' => 'Diseño', 'valor' => 'Resistente a golpes, agua y polvo (IP67)'],
            ['id_producto' => 4005, 'clave' => 'Autonomía', 'valor' => 'Hasta 12 horas'],

            // 4006: Bose SoundLink Micro
            ['id_producto' => 4006, 'clave' => 'Protección exterior', 'valor' => 'Silicona ultra duradera y resistente a caídas'],
            ['id_producto' => 4006, 'clave' => 'Resistencia', 'valor' => 'IP67 impermedable'],
            ['id_producto' => 4006, 'clave' => 'Fijación', 'valor' => 'Correa de silicona antidesgarro integrada'],

            // 4007: Bose SoundLink Flex II
            ['id_producto' => 4007, 'clave' => 'Tecnología', 'valor' => 'PositionIQ (Calibra el sonido según la orientación)'],
            ['id_producto' => 4007, 'clave' => 'Autonomía', 'valor' => 'Hasta 12 horas'],
            ['id_producto' => 4007, 'clave' => 'Flotabilidad', 'valor' => 'Flota en el agua si se cae a una piscina'],

            // 4008: Xiaomi Sound Pocket 5W
            ['id_producto' => 4008, 'clave' => 'Potencia', 'valor' => '5W RMS'],
            ['id_producto' => 4008, 'clave' => 'Conectividad', 'valor' => 'Bluetooth 5.4'],
            ['id_producto' => 4008, 'clave' => 'Peso', 'valor' => 'Diseño ultra ligero de bolsillo (200g aprox.)'],

            // 4009: Xiaomi Sound Party 50W
            ['id_producto' => 4009, 'clave' => 'Potencia de Salida', 'valor' => '50W RMS'],
            ['id_producto' => 4009, 'clave' => 'Iluminación', 'valor' => 'Anillos LED RGB con efectos sincronizados'],
            ['id_producto' => 4009, 'clave' => 'Autonomía', 'valor' => 'Hasta 13 horas'],

            // 4010: Anker Soundcore Select 4 Go
            ['id_producto' => 4010, 'clave' => 'Potencia', 'valor' => '5W RMS'],
            ['id_producto' => 4010, 'clave' => 'Autonomía', 'valor' => 'Hasta 15 horas de sonido ininterrumpido'],
            ['id_producto' => 4010, 'clave' => 'ECU Personalizable', 'valor' => 'Ecualizador mediante App Soundcore'],


            // =========================================================================
            // CARGADORES Y ADAPTADORES (Categoría 3)
            // =========================================================================

            // 5001: Cargador Apple 20W
            ['id_producto' => 5001, 'clave' => 'Potencia', 'valor' => '20W Power Delivery'],
            ['id_producto' => 5001, 'clave' => 'Interfaz', 'valor' => 'USB-C'],
            ['id_producto' => 5001, 'clave' => 'Compatibilidad', 'valor' => 'iPhone 8 en adelante, iPad, Apple Watch'],

            // 5002: Cargador Samsung 25W
            ['id_producto' => 5002, 'clave' => 'Tecnología', 'valor' => 'Super Fast Charging (PPS)'],
            ['id_producto' => 5002, 'clave' => 'Potencia', 'valor' => '25W'],
            ['id_producto' => 5002, 'clave' => 'Puerto', 'valor' => 'USB Type-C'],

            // 5003: Cargador Turbo Xiaomi 67W
            ['id_producto' => 5003, 'clave' => 'Tecnología', 'valor' => 'Xiaomi HyperCharge 67W'],
            ['id_producto' => 5003, 'clave' => 'Incluye', 'valor' => 'Cable USB-A a USB-C de alto amperaje (6A)'],

            // 5004: Cargador Anker Nano 20W
            ['id_producto' => 5004, 'clave' => 'Tecnología', 'valor' => 'PowerIQ 3.0 / Power Delivery'],
            ['id_producto' => 5004, 'clave' => 'Tamaño', 'valor' => '50% más pequeño que un cargador estándar de 20W'],

            // 5005: Cargador Belkin BoostCharge 30W
            ['id_producto' => 5005, 'clave' => 'Potencia', 'valor' => '30W USB-C PD 3.0 PPS'],
            ['id_producto' => 5005, 'clave' => 'Seguridad', 'valor' => 'Protección contra sobretensiones y sobrecalentamiento'],

            // 5006: Cargador Motorola TurboPower 30W
            ['id_producto' => 5006, 'clave' => 'Tecnología', 'valor' => 'TurboPower 30W (PD protocol)'],
            ['id_producto' => 5006, 'clave' => 'Conexión', 'valor' => 'USB-C'],

            // 5007: Cargador Huawei SuperCharge 22.5W
            ['id_producto' => 5007, 'clave' => 'Potencia', 'valor' => '22.5W SuperCharge'],
            ['id_producto' => 5007, 'clave' => 'Incluye', 'valor' => 'Cable de datos y carga rápida Type-C de 5A'],

            // 5008: Cargador Kalley Dual 60W GaN
            ['id_producto' => 5008, 'clave' => 'Tecnología', 'valor' => 'GaN (Nitruro de Galio - Alta eficiencia térmica)'],
            ['id_producto' => 5008, 'clave' => 'Puertos', 'valor' => '2x USB-C + 1x USB-A (60W distribuidos)'],

            // 5009: Cargador Samsung 45W
            ['id_producto' => 5009, 'clave' => 'Tecnología', 'valor' => 'Super Fast Charging 2.0 (PPS 45W)'],
            ['id_producto' => 5009, 'clave' => 'Compatibilidad', 'valor' => 'Smartphones Galaxy Ultra, Tablets y Laptops USB-C'],

            // 5010: Cargador Doble Puerto Apple 35W
            ['id_producto' => 5010, 'clave' => 'Potencia', 'valor' => '35W Totales'],
            ['id_producto' => 5010, 'clave' => 'Puertos', 'valor' => 'Doble puerto USB-C para carga simultánea'],
            ['id_producto' => 5010, 'clave' => 'Diseño', 'valor' => 'Clavijas plegables ultra compacto'],
        ];

        DB::table('especificaciones')->insertOrIgnore($especificaciones);
    }
}