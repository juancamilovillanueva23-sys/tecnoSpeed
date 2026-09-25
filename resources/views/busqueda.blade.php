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
<body class="bg-gray-400">
    
    <main class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">
            Resultados de búsqueda para: <span class="text-blue-800">"{{ $query }}"</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          
        @forelse ($productos as $producto)

            <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
                <article class="flex flex-col justify-center items-center">
                    <!-- Imagen mapeada según id_producto o id_imagen -->
                 <img class="w-full h-[190px] object-cover rounded-3xl hover:scale-95 transition-transform"
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
        </div>
    </main>

</body>
</html>