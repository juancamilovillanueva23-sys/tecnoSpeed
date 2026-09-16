<x-layouts::app.barra_nav :title="__('audifonos')">
</x-layouts::app.barra_nav>
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

    
    <main class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods3.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 3</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$104.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$89.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/1HORA.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">1 HORA</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/sony.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Sony</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$60.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$50.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/Redmi.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400  mt-2 rounded-lg w-[180px] text-center h-14">XIAOMI Redmi Buds 6 </h2>
            </article>
            <article class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$85.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$80.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/lenovo.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Lenovo GK</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$70.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$68.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/jbl.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">JBL</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$65.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$55.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/samsung.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 mt-2 rounded-lg w-[180px] text-center h-14">Samsung Galaxy Buds 3</h2>
            </article>
            <article class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$84.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$72.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/JBL22.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10"> JBL</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$77.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$70.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods4.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 4</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$90.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$75.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
    </main>
  
</div>
</body>
</html>