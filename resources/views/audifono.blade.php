<x-layouts::app.barra_nav :title="__('audifono')">
</x-layouts::app.barra_nav>

<body class="bg-gray-100">
    <div class="px-4 py-6">

        <!-- Contenedor general en fila (Filtros a la izquierda, Productos a la derecha) -->
        <div class="flex flex-col lg:flex-row gap-6 items-start">

            <!-- Llamas a tu componente de filtros de manera independiente -->
            <x-layouts::app.filtros />

            <!-- CONTENEDOR DE PRODUCTOS (Independiente, sube y ocupa todo el espacio derecho) -->
            <main class="flex-1 w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

                @forelse ($productos as $producto)
                    <section class="w-full bg-white p-4 rounded-[32px] border-[2px] border-blue-700 flex flex-col justify-between">
                        <div>
                            <!-- Imagen del producto -->
                            <div class="w-full h-[180px] bg-black rounded-2xl p-2 flex items-center justify-center overflow-hidden">
                                <img class="w-full h-full object-contain hover:scale-105 transition-transform duration-300"
                                    src="{{ asset($producto->id_imagen ?? 'storage/img/1.jpg') }}"
                                    alt="{{ $producto->nombre_pro }}"
                                    onerror="this.onerror=null; this.src='{{ asset('storage/img/1.jpg') }}';">
                            </div>

                            <!-- Título del producto -->
                            <div class="bg-slate-400 rounded-lg p-2 mt-3 flex items-center justify-center min-h-[48px]">
                                <h2 class="text-xs sm:text-sm font-bold uppercase text-gray-800 text-center leading-tight line-clamp-2" title="{{ $producto->nombre_pro }}">
                                    {{ $producto->nombre_pro }}
                                </h2>
                            </div>
                        </div>

                        <!-- Precio y Botón -->
                        <article class="flex items-center justify-between mt-4">
                            <h3 class="text-gray-800 text-xl font-black">
                                ${{ number_format($producto->valor_pro, 0, ',', '.') }}
                            </h3>
                            <a href="{{ route('ver_mas', $producto->id_producto) }}" 
                                class="bg-blue-700 px-4 py-2 rounded-2xl text-white hover:bg-blue-500 text-center font-bold text-sm whitespace-nowrap transition-colors">
                                Ver más
                            </a>
                        </article>
                    </section>

                @empty
                    <div class="col-span-full text-center py-12 bg-white rounded-3xl border-2 border-gray-200">
                        <h3 class="text-lg font-bold text-gray-600">No hay productos registrados</h3>
                        <p class="text-gray-400 text-sm mt-1">Intenta agregar nuevos productos a la base de datos.</p>
                    </div>
                @endforelse

                <!-- Paginación -->
                @if($productos->hasPages())
                    <div class="col-span-full flex justify-center items-center mt-6 mb-8 w-full [&_p]:hidden [&_nav_a]:bg-blue-500 [&_nav_a]:text-white [&_nav_a]:border-blue-600 [&_nav_span]:bg-blue-800 [&_nav_span]:text-white [&_nav_span]:border-blue-500">
                        {{ $productos->links() }}
                    </div>
                @endif

            </main>

        </div>
    </div>
</body>
</html>