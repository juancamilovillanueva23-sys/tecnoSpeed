<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style_inicio.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TecnoSpeed</title>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Header Principal -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col md:flex-row justify-between items-center gap-4">
            
            <!-- 1. Formulario de búsqueda - AHORA A LA IZQUIERDA -->
            <div class="w-full md:w-96 order-2 md:order-1">
                <form action="{{ route('busqueda') }}" method="GET" class="relative flex items-center">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input 
                        type="search" 
                        name="query" 
                        placeholder="Buscar tu producto..." 
                        class="w-full pl-10 pr-24 py-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-full shadow-inner focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all duration-200"
                        required
                    />
                    <button 
                        type="submit" 
                        class="absolute right-1 px-4 py-1.5 text-xs font-semibold text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 transition-colors duration-200 shadow"
                    >
                        Buscar
                    </button>
                </form>
            </div>

            <!-- 2. Logo Redondeado (Centro) -->
            <div class="flex items-center justify-center order-1 md:order-2">
                <a href="{{ route('home') }}" class="transition-transform hover:scale-105">
                    <img class="w-14 h-14 rounded-full object-cover border-2 border-blue-600 shadow-sm" src="{{ asset('storage/img/logo.png') }}" alt="Logo TecnoSpeed">
                </a>
            </div>

            <!-- 3. Botones de Acción (Inicio de sesión, carrito, inicio) - AHORA A LA DERECHA -->
            <div class="flex items-center gap-4 order-3 md:order-3">
                <!-- Botón de Casa / Inicio -->
                <a href="{{ route('home') }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-200 shadow-sm" title="Inicio">
                    <i class="fa-solid fa-house text-lg"></i>
                </a>

                <!-- Botón de Carrito -->
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-200 shadow-sm relative" title="Carrito">
                    <i class="fa-solid fa-cart-shopping text-lg"></i>
                </a>

                <!-- Botón de Inicio de Sesión -->
                <a href="{{ route('login') }}" class="flex items-center gap-2 bg-blue-50 text-blue-800 border border-blue-200 rounded-full px-5 py-2 hover:bg-blue-700 hover:text-white hover:border-transparent transition-all duration-200 font-medium text-sm shadow-sm">
                    <span>Iniciar Sesión</span>
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>

        </div>

        <!-- Barra de navegación por categorías -->
        <nav class="bg-gray-900 border-t border-gray-800 shadow-inner">
            <div class="max-w-7xl mx-auto px-4">
                <ul class="flex flex-wrap justify-between items-center py-3 gap-2">
                    <li>
                        <a href="{{ route('audifono') }}" class="flex items-center gap-2 text-gray-200 bg-gray-800 hover:bg-blue-600 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fa-solid fa-headphones text-blue-400"></i> Auriculares
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('accesorio') }}" class="flex items-center gap-2 text-gray-200 bg-gray-800 hover:bg-blue-600 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fa-solid fa-shield text-blue-400"></i> Accesorios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cargador') }}" class="flex items-center gap-2 text-gray-200 bg-gray-800 hover:bg-blue-600 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fa-solid fa-charging-station text-blue-400"></i> Cargadores
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('celulares') }}" class="flex items-center gap-2 text-gray-200 bg-gray-800 hover:bg-blue-600 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fa-solid fa-mobile-screen text-blue-400"></i> Celulares
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('parlante') }}" class="flex items-center gap-2 text-gray-200 bg-gray-800 hover:bg-blue-600 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fa-solid fa-volume-high text-blue-400"></i> Parlantes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

</body>
</html>