<x-layouts::app.barra_nav :title="__('celulares')">
</x-layouts::app.barra_nav>
<!--imagen-->
<div class="bg-gradient-to-r from-blue-100 to-blue-400">
    <img class="w-full h-[500px] " src="{{ asset('storage/img_proyecto/imagen_banner1.jpg') }}" alt="Imagen de inicio">
</div>
<!--texto u eslogan-->
<div class="  bg-gradient-to-r from-blue-100 to-blue-400 p-4 rounded-lg shadow-md flex justify-center items-center">
    <h1 class="text-2xl font-bold uppercase text-gray-800">¡Bienvenido a TecnoSpeed! Tu mejor opción para adquirir tecnología confiable y de la mejor calidad.</h1>
</div>
 <div class=" mt-6 justify-items-center w-full  ">
            <h1 class="text-2xl font-bold uppercase text-gray-800 mx-4  px-8 bg-blue-600 text-white rounded-3xl">Productos Destacados<i class="fa-solid fa-medal text-yellow-300 hover:text-yellow-200"></i></h1>
        </div>  
<main class=" mt-12 grid grid-cols-1 gap-y-8 md:grid-cols-2 lg:grid-cols-4 lg:gap-12">
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700 shadow-2xl shadow-2xl shadow-slate-900/50">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods_pro.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 3</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$104.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$94.900</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700 shadow-2xl shadow-slate-900/50">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img_proyecto/airpods2.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Pro 2</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$89.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$79.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700 shadow-2xl shadow-slate-900/500">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/airpods_max.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Airpods Max</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$140.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$119.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700 shadow-2xl shadow-slate-900/50">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img_proyecto/iphone17promax.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[220px] text-center h-10">Iphone 17 pro max</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$7.899.999</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$4.799.999</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
           <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700 shadow-2xl shadow-slate-900/50">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img_proyecto/car_ip.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador 20W</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$45.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$35.000 </h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
         <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700 shadow-2xl shadow-slate-900/50">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img_proyecto/iphone15.jpg') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[220px] text-center h-10">Iphone 15 pro max</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$5.999.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$2.999.000 </h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
</main>
    <div class="bg-[url('/storage/img_proyecto/fon_Eslo.jpg')] bg-contain bg-center bg-no-repeat w-full h-auto aspect-[16/9] rounded-5xs mt-4">
    <h1>No es solo un accesorio en la escensia de tu estilo</h1>
</div>
    

  
    
    
</body>
</html>