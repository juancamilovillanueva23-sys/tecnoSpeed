<x-layouts::app.barra_nav :title="__('celular')">
</x-layouts::app.barra_nav>
<body>
    <div class="flex flex-col md:flex-row gap-8 mt-4 p-4">
    <div >
        <aside class="w-full md:w-64 bg-white p-5 rounded-[32px] border-[4px] border-blue-700 h-800">
            <h2 class= " bg-blue-700 text-white  text-center p-[4px] w-20 ml-14 mt-4 rounded-full" >Filtros</h2>
            <p class="mt-4  text-black w-50 h-43 rounded-[50px] font-bold "> Audifonos inalambricos</p>
            <p class="mt-4  text-black w-50 h-43 rounded-[50px] font-bold ">Audifonos de cable</p>
            <p class="mt-4  text-black w-50 h-43 rounded-[50px] font-bold ">Audifonos diadema</p>
            
        
            <div class="space-y-4">
                <div>
                    <label class="block text-black mt-4 font-bold">Precio máximo</label>
                    <input type="range" class="w-full accent-blue-700" min="50000" max="200000">
                </div>

                <button class="w-full bg-blue-700 text-white font-bold rounded-[32px] hover:bg-blue-500 transition-colors">
                    Aplicar
                </button>
            </div>
        </aside>
    </div>    


    <main class="flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">


        @forelse ($productos as $producto)

            <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
                <article class="flex flex-col justify-center items-center">
                    <!-- Imagen mapeada según id_producto o id_imagen -->
                 <img class="w-full h-[190px] object-contain rounded-3xl hover:scale-105 transition"
                    src="{{ asset($producto->id_imagen ?? 'storage/img/1.jpg') }}"
                    alt="{{ $producto->nombre_pro }}"
                    onerror="this.onerror=null; this.src='{{ asset('storage/img/1.jpg') }}';">

                    <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-6 rounded-lg w-[180px] text-center h-10 truncate" title="{{ $producto->nombre_pro }}">
                        {{ $producto->nombre_pro }}
                    </h2>
                    
                </article>

                <article class="flex items-center justify-between mt-2 px-2">
                    <div class="flex flex-col">
                        <h3 class="text-gray-800 mt-4 text-2xl font-black">
                            ${{ number_format($producto->valor_pro, 0, ',', '.') }}
                        </h3>
                   
                    </div>
                        <a href="{{ route('ver_mas', $producto->id_producto) }}" 
                            class="bg-blue-700 w-[100px] py-2 mt-4 rounded-2xl text-white hover:bg-blue-500 text-center font-bold inline-block">Ver más
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
            <div class="col-span-full flex justify-center items-center mt-12 mb-8 w-full md:-ml-32 [&_p]:hidden [&_nav_a]:bg-blue-500 [&_nav_a]:text-white [&_nav_a]:border-blue-600 [&_nav_span]:bg-blue-800 [&_nav_span]:text-white [&_nav_span]:border-blue-500">
                {{ $productos->links() }}
            </div>
        @endif
       
    </main>

 
    
</body>
</html>