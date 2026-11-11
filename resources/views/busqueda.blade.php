<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style_inicio.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Resultados de búsqueda - TecnoSpeed</title>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <main class="container mx-auto p-4 md:p-6 max-w-7xl">
        
        <!-- Encabezado con Botón de Regresar (Azul) -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <a href="{{ url()->previous() }}" 
                   class="inline-flex items-center gap-2 text-white bg-blue-600 hover:bg-blue-700 font-semibold text-sm px-4 py-2 rounded-xl shadow-md hover:shadow-lg transition-all active:scale-95">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Volver a la página anterior</span>
                </a>
            </div>
            
            <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                Resultados de búsqueda para: <span class="text-blue-700 underline decoration-blue-500/30 decoration-wavy">"{{ $query }}"</span>
            </h2>
        </div>

        <!-- Grid de Tarjetas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
        @forelse ($productos as $producto)

            <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[2px] border-blue-600 shadow-md hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                
                <article class="flex flex-col justify-center items-center w-full">
                    <!-- Contenedor de Imagen con Efectos -->
                    <div class="w-full h-[190px] overflow-hidden rounded-3xl bg-black flex items-center justify-center">
                        <img class="w-full h-full object-cover rounded-3xl group-hover:scale-105 transition-transform duration-500"
                             src="{{ asset($producto->id_imagen ?? 'storage/img/1.jpg') }}"
                             alt="{{ $producto->nombre_pro }}"
                             onerror="this.onerror=null; this.src='{{ asset('storage/img/1.jpg') }}';">
                    </div>

                    <!-- Etiqueta de Nombre -->
                    <h2 class="text-sm font-extrabold uppercase text-gray-800 bg-slate-300/80 backdrop-blur-sm px-3 py-2 mt-4 rounded-xl w-[190px] text-center h-9 flex items-center justify-center truncate shadow-inner tracking-wide" title="{{ $producto->nombre_pro }}">
                        {{ $producto->nombre_pro }}
                    </h2>
                </article>

                <!-- Pie de Tarjeta (Precio y Botón) -->
                <article class="flex items-center justify-between px-2 pb-1">
                    <div class="flex flex-col">
                        <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Precio</span>
                        <h3 class="text-gray-900 text-xl font-black tracking-tight">
                            ${{ number_format($producto->valor_pro, 0, ',', '.') }}
                        </h3>
                    </div>
                    
                    <a href="{{ route('ver_mas', $producto->id_producto) }}" 
                       class="bg-blue-600 hover:bg-blue-700 active:scale-95 px-4 py-2.5 rounded-2xl text-white text-sm font-bold shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 transition-all inline-flex items-center gap-1.5">
                        <span>Ver más</span>
                        <i class="fa-solid fa-chevron-right text-xs group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </article>
            </section>

        @empty
            <div class="col-span-full text-center py-16 bg-white rounded-3xl border-2 border-dashed border-gray-300 shadow-sm">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-700">No hay productos registrados</h3>
                <p class="text-gray-400 text-sm mt-1">Intenta realizar una nueva búsqueda o agregar productos.</p>
                
                <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 mt-6 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-sm font-semibold transition-colors shadow-md hover:shadow-lg">
                    <i class="fa-solid fa-arrow-left"></i> Regresar
                </a>
            </div>
        @endforelse

        </div>
    </main>

</body>
</html>