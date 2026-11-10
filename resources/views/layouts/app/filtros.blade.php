<aside class="w-full max-w-xs transition-all duration-300 ease-in-out hover:-translate-y-1">
    <form action="{{ url()->current() }}" method="GET" class="bg-white p-5 rounded-[32px] border-[3px] border-blue-600 shadow-md hover:shadow-2xl transition-all duration-300">
        
        <!-- Badge de Título con animación pulse en el fondo -->
        <div class="flex justify-center mb-5">
            <span class="bg-blue-600 text-white font-medium px-6 py-1.5 rounded-full text-sm shadow-sm transition-transform duration-300 hover:scale-105 select-none">
                Filtros de productos
            </span>
        </div>

        <div class="flex flex-col gap-4">
            
            <!-- Campo: Buscar producto -->
            <div class="group">
                <label for="buscar" class="block text-black font-semibold text-sm mb-2 transition-colors duration-200 group-focus-within:text-blue-600">
                    Buscar producto
                </label>
                <div class="relative">
                    <input
                        id="buscar"
                        type="text"
                        name="buscar"
                        value="{{ request('buscar') }}"
                        placeholder="Ej. Cargador, iPhone..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm text-black placeholder-gray-400 bg-gray-50/50 transition-all duration-300 focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-100 hover:border-gray-400"
                    >
                </div>
            </div>

            <!-- Campo: Precio máximo -->
            <div class="group">
                <label for="precio_max" class="block text-black font-semibold text-sm mb-2 transition-colors duration-200 group-focus-within:text-blue-600">
                    Precio máximo ($)
                </label>
                <div class="relative">
                    <input
                        id="precio_max"
                        type="number"
                        name="precio_max"
                        value="{{ request('precio_max') }}"
                        min="0"
                        step="0.01"
                        placeholder="Ej. 150000"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm text-black placeholder-gray-400 bg-gray-50/50 transition-all duration-300 focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-100 hover:border-gray-400"
                    >
                </div>
            </div>

            <!-- Campo: Ordenar por -->
            <div class="group">
                <label for="orden" class="block text-black font-semibold text-sm mb-2 transition-colors duration-200 group-focus-within:text-blue-600">
                    Ordenar por
                </label>
                <select
                    id="orden"
                    name="orden"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm text-black bg-gray-50/50 transition-all duration-300 focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-100 hover:border-gray-400 cursor-pointer"
                >
                    <option value="">Predeterminado</option>
                    <option value="precio_asc" {{ request('orden') === 'precio_asc' ? 'selected' : '' }}>Menor precio</option>
                    <option value="precio_desc" {{ request('orden') === 'precio_desc' ? 'selected' : '' }}>Mayor precio</option>
                    <option value="recientes" {{ request('orden') === 'recientes' ? 'selected' : '' }}>Más recientes</option>
                </select>
            </div>

            <!-- Botones dinámicos -->
            <div class="flex flex-col gap-2 pt-2">
                <!-- Botón Aplicar Filtros con animación de presión y elevación -->
                <button type="submit" class="w-full bg-blue-600 text-white font-medium py-2.5 rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 active:scale-95 transition-all duration-200 cursor-pointer">
                    Aplicar filtros
                </button>

                <!-- Botón Limpiar Filtros con hover suave -->
                <a href="{{ url()->current() }}" class="block text-center w-full bg-gray-100 text-gray-700 font-medium py-2 rounded-full hover:bg-gray-200 hover:text-gray-900 active:scale-95 transition-all duration-200 text-sm">
                    Limpiar filtros
                </a>
            </div>

        </div>
    </form>
</aside>