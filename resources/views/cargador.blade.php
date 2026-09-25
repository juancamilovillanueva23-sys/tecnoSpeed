<x-layouts::app.barra_nav :title="__('cargador')">
</x-layouts::app.barra_nav>
<body>
    <div class="flex flex-col md:flex-row gap-8 mt-4 p-4">
        <div>
            <aside class="w-full md:w-64 bg-white p-5 rounded-[32px] border-[4px] border-blue-700 h-auto">
                <h2 class="bg-blue-700 text-white text-center p-[4px] w-20 mx-auto mt-4 rounded-full">Filtros</h2>
                <p class="mt-4 text-black font-bold">Cargadores de pared</p>
                <p class="mt-4 text-black font-bold">Cargadores inalámbricos</p>
                <p class="mt-4 text-black font-bold">Cargadores para vehículo</p>
                
                <div class="space-y-4 mt-6">
                    <div>
                        <label class="block text-black font-bold mb-1">Precio máximo</label>
                        <input type="range" class="w-full accent-blue-700" min="50000" max="200000">
                    </div>

                    <button class="w-full bg-blue-700 text-white font-bold py-2 rounded-[32px] hover:bg-blue-500 transition-colors">
                        Aplicar
                    </button>
                </div>
            </aside>
        </div>    

        <main class="flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @forelse ($productos as $producto)

                <section class="w-full bg-white p-4 rounded-[32px] border-[6px] border-blue-700 flex flex-col justify-between">
                    <div>
                        <!-- Contenedor con espacio interno (p-2), fondo negro y bordes redondeados -->
                        <div class="w-full h-[180px] bg-black rounded-2xl p-2 flex items-center justify-center overflow-hidden">
                            <img class="w-full h-full object-contain hover:scale-105 transition-transform duration-300"
                                src="{{ asset($producto->id_imagen ?? 'storage/img/1.jpg') }}"
                                alt="{{ $producto->nombre_pro }}"
                                onerror="this.onerror=null; this.src='{{ asset('storage/img/1.jpg') }}';">
                        </div>

                        <!-- Título dinámico que no se corta ni rompe la tarjeta -->
                        <div class="bg-slate-400 rounded-lg p-2 mt-3 flex items-center justify-center min-h-[48px]">
                            <h2 class="text-xs sm:text-sm font-bold uppercase text-gray-800 text-center leading-tight line-clamp-2" title="{{ $producto->nombre_pro }}">
                                {{ $producto->nombre_pro }}
                            </h2>
                        </div>
                    </div>

                    <!-- Pie de tarjeta: Precio y Botón -->
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

            @if($productos->hasPages())
                <div class="col-span-full flex justify-center items-center mt-12 mb-8 w-full [&_p]:hidden [&_nav_a]:bg-blue-500 [&_nav_a]:text-white [&_nav_a]:border-blue-600 [&_nav_span]:bg-blue-800 [&_nav_span]:text-white [&_nav_span]:border-blue-500">
                    {{ $productos->links() }}
                </div>
            @endif

        </main>
    </div>
</body>
</html>