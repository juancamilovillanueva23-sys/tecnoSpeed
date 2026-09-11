<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     @vite('resources/css/style_inicio.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>tecnoSpeed</title>
</head>
<header>  
<!--container del header-->
    <div class=" bg-white p-4 flex justify-between items-center">
    <!-- Formulario de búsqueda -->
        <div class="w-xl mt-1 px-4 ">
          <form action="#" method="GET" class="relative flex items-center">
             <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                 </svg>
             </div>
             <input 
            type="search" 
            name="query" 
            placeholder="Buscar tu producto..." 
            class="w-full pl-10 pr-24 py-3 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
            required
        />

        <!-- Botón de Búsqueda -->
        <button 
            type="submit" 
            class="absolute right-1.5 px-4 py-2 text-xs font-medium text-white bg-blue-800 rounded-md hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-300 transition-colors duration-200"
        >
            Buscar
        </button>
    </form>
        </div>
    <!-- Logo -->
    <div class="w-3xs flex rounded-full ">
        <img class="logo"src="{{asset('storage/img_proyecto/logo.png') }}" alt="Logo">
    </div>
    <!-- Botón de inicio de sesión -->
    <div class="w-3xs flex justify-end items-center bg-blue-300 rounded-full px-4  py-2 hover:bg-blue   -200 transition-all duration-200 hover:scale-95 ">
        <a href="{{ route('login') }}" class="text-black hover:text-blue-600 font-semibold">Iniciar Sesión<i class="fa-solid fa-user"></i></a>
    </div>
</header>
<body class="bg-gray-400">
<!-- Barra de navegación -->
    <div class=" h-[60px]  p-2 bg-black flex-row  ">
        <nav>
            <ul class="flex flex-row  justify-around ">
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 h-[28px]"><a href="{{ route('audifono') }}">Auriculares<i class="fa-solid fa-headphones"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200  rounded-full px-4"><a href="#">Accesorios<i class="fa-solid fa-shield"></i></a></li>
<<<<<<< HEAD
                <li class="text-black bg-blue-300 hover:bg-blue-200  rounded-full px-4"><a href="#">Cargadores<i class="fa-solid fa-charging-station"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 "><a href="{{ route('celular')}}">Celulares><i class="fa-solid fa-mobile-screen"></i></a></li>
=======
                <li class="text-black bg-blue-300 hover:bg-blue-200  rounded-full px-4"><a href="{{ route('cargador') }}">Cargadores<i class="fa-solid fa-charging-station"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 "><a href="#">Celulares<i class="fa-solid fa-mobile-screen"></i></a></li>
>>>>>>> 218ff193cb49084955c8ce167c41c69b92b4b367
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 "><a href="#">Parlantes<i class="fa-solid fa-mobile-screen"></i></a></li>

            </ul>
        </nav>
    </div>
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