<x-layouts::app.barra_nav :title="__('ver_mas')">
</x-layouts::app.barra_nav>


    <div class="min-h-screen bg-slate-300 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto space-y-8">
            
            <!-- Botón para regresar -->
            <div>
                <a href="javascript:history.back()" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold mb-2">
                    &larr; Volver a la tienda
                </a>
            </div>

            <!-- Tarjeta Principal del Producto -->
            <div class="bg-white rounded-3xl border-4 border-blue-600 p-6 md:p-8 shadow-lg grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                
                <!-- Columna Izquierda: Imagen principal del producto -->
                <div class="flex justify-center items-center bg-black p-6 rounded-2xl border-2 border-blue-500 min-h-[350px]">
                    <img src="{{ asset('storage/' . $producto->id_imagen) }}" 
                         alt="{{ $producto->nombre_pro }}" 
                         class="max-h-96 object-contain">
                </div>

                <!-- Columna Derecha: Detalles de Compra y Nombre -->
                <div class="flex flex-col justify-between space-y-6">
                    <div>
                        <!-- Categoria del Producto -->
                        <span class="bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Categoría #{{ $producto->id_categoria }}
                        </span>
                        <h1 class="text-3xl font-extrabold text-slate-900 mt-2 uppercase tracking-wide">
                            {{ $producto->nombre_pro }}
                        </h1>
                        
                        <!-- Breve descripción -->
                        <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                            {{ $producto->descripcion }}
                        </p>
                    </div>

                    <!-- Bloque de Precio y Stock -->
                    <div class="bg-slate-50 p-4 rounded-2xl border-2 border-blue-200 flex justify-between items-center">
                        <div>
                            <span class="text-xs text-slate-500 font-bold block">PRECIO</span>
                            <span class="text-3xl font-black text-blue-600">
                                ${{ number_format($producto->valor_pro ?? $producto->precio ?? 0, 0, ',', '.') }}
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xs text-slate-500 font-bold block">DISPONIBILIDAD</span>
                            <span class="inline-block bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full">
                                {{ ($producto->id__stock ?? $producto->stock ?? 0) > 0 ? 'En Stock' : 'Agotado' }}
                            </span>
                        </div>
                    </div>

                    <!-- Botón de Añadir al Carrito -->
                    <div class="flex gap-4">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-extrabold py-3 px-6 rounded-2xl shadow-md transition duration-200 text-lg uppercase tracking-wider flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"></path>
                            </svg>
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tabla de Especificaciones Técnicas -->
            <div class="bg-white rounded-3xl border-4 border-blue-600 p-6 md:p-8 shadow-lg">
                <h2 class="text-2xl font-black text-slate-900 mb-6 border-b-4 border-blue-600 pb-2 inline-block">
                    Especificaciones técnicas
                </h2>

                @if(isset($especificaciones) && $especificaciones->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($especificaciones as $esp)
                            <div class="flex border-b border-slate-200 py-3 px-2 hover:bg-slate-50 transition">
                                <span class="w-1/2 text-slate-600 font-bold text-sm">{{ $esp->clave }}</span>
                                <span class="w-1/2 text-slate-900 font-semibold text-sm">{{ $esp->valor }}</span>
                            </div>
                        @endforeach
                    </div>
                @elseif(isset($producto->especificaciones) && $producto->especificaciones->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($producto->especificaciones as $esp)
                            <div class="flex border-b border-slate-200 py-3 px-2 hover:bg-slate-50 transition">
                                <span class="w-1/2 text-slate-600 font-bold text-sm">{{ $esp->clave }}</span>
                                <span class="w-1/2 text-slate-900 font-semibold text-sm">{{ $esp->valor }}</span>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-slate-500 italic py-4">No hay especificaciones técnicas detalladas para este producto.</p>
                @endif
            </div>

        </div>
    </div>
