<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/style_inicio.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Audifonos</title>
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
        <img class="logo"src="{{ asset('storage/img/logots.png') }}" alt="Logo">
    </div>
    <!-- Botón de inicio de sesión -->
    <div class="w-3xs flex justify-end items-center bg-gray-300 rounded-full px-4  py-2 hover:bg-gray-200 transition-all duration-200 hover:scale-95">
        <a href="{{ route('login') }}" class="text-blue-800 hover:text-blue-600 font-semibold">Iniciar Sesión<i class="fa-solid fa-user"></i></a>
    </div>
</header>
<body class="bg-gray-400">
<!-- Barra de navegación -->
    <div class=" h-px40  p-2 bg-black flex-row">
        <nav>
            <ul class="flex flex-row  justify-around ">
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 h-[28px]"><a href="{{ route('audifono') }}">Auriculares<i class="fa-solid fa-headphones"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200  rounded-full px-4"><a href="#">Accesorios<i class="fa-solid fa-shield"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200  rounded-full px-4"><a href="#">Cargadores<i class="fa-solid fa-charging-station"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 "><a href="#">Celulares<i class="fa-solid fa-mobile-screen"></i></a></li>
                <li class="text-black bg-blue-300 hover:bg-blue-200 rounded-full px-4 "><a href="#">Parlantes<i class="fa-solid fa-mobile-screen"></i></a></li>
            </ul>
        </nav>
    </div>

<div class="flex flex-col md:flex-row gap-8 mt-4 p-4">
    <div >
        <aside class="w-full md:w-64 bg-white p-5 rounded-[32px] border-[4px] border-blue-700 h-800">
            <h2 class= " bg-blue-700 text-white  text-center p-[4px] w-20 ml-14 mt-4 rounded-full" >Filtros</h2>
            <p class="mt-4  text-black w-50 h-43 rounded-[50px] font-bold ">USB Tipo-C</p>
            <p class="mt-4  text-black w-50 h-43 rounded-[50px] font-bold ">Lightning</p>
            <p class="mt-4  text-black w-50 h-43 rounded-[50px] font-bold ">Micro-USB</p>
            
        
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
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/cargaiphone.jpg') }}" alt="Imagen de cargadores">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador Apple C 20w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$85.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$59.900</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/cargaanker.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador Anker 140W GaN</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$533.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$350.900</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/maxell.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador Maxell C 20w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$50.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$39.950</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/cargbelkin.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador Belkin GAN 65w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$169.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$110.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/cargaUgreen.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400  mt-2 rounded-lg w-[180px] text-center h-14">cargador UGREEN 20w </h2>
            </article>
            <article class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$55.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$45.500</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/iniu.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador iniu 65 w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$150.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$68.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/carga1hora.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador 1Hora 20w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$45.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$24.300</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/chargeworx.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 mt-2 rounded-lg w-[180px] text-center h-14">Cargador Chargeworx 20w</h2>
            </article>
            <article class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$55.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$43.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>
        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/RAW.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10"> RAWpower C 40w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$93.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$77.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/spigen.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador Spigen 20w</h2>
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
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/voomy.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador voomy C 65w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$130.000</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$98.000</h3>
                </div>
                <a class="bg-blue-700 w-[120px] px-6 py-3 rounded-2xl text-white hover:bg-blue-500 text-center font-bold">Ver más </a>
            </article>
        </section>

        <section class="w-full bg-white p-3 rounded-[32px] h-[350px] border-[6px] border-blue-700">
            <article class="flex flex-col justify-center items-center">
                <img class=" w-full h-[190px] rounded-3xl hover:scale-95 transition-transform" src="{{ asset('storage/img/Aukey.png') }}" alt="Imagen de auriculares">
                <h2 class="text-lg font-bold uppercase text-gray-800 bg-slate-400 px-2 py-2 mt-2 rounded-lg w-[180px] text-center h-10">Cargador Aukey 42w</h2>
            </article>
            <article class="flex items-center justify-between mt-8">
                <div class="flex flex-col">
                    <h4 class="text-gray-800 text-xs font-medium line-through">$99.900</h4>
                    <h3 class="text-gray-800 text-2xl font-black">$85.000</h3>
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