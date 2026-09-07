<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/style_inicio.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
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
        <img class="logo"src="{{ asset('storage/image.png') }}" alt="Logo">
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
                <li class="text-black bg-slate-400 hover:bg-slate-300 rounded-full px-4"><a href="{{route('audifono')}}">Auriculares<i class="fa-solid fa-headphones"></i></a></li>
                <li class="text-black bg-slate-400 hover:bg-slate-300 rounded-full px-4"><a href="#">Forros protectores<i class="fa-solid fa-shield"></i></a></li>
                <li class="text-black bg-slate-400 hover:bg-slate-300 rounded-full px-4"><a href="#">Cargadores<i class="fa-solid fa-charging-station"></i></a></li>
                <li class="text-black bg-slate-400 hover:bg-slate-300 rounded-full px-4 "><a href="#">Celulares<i class="fa-solid fa-mobile-screen"></i></a></li>
            </ul>
        </nav>
    </div>
<aside class=" bg-white w-64 h-[500px] border-[4px] border-blue-700 ml-4 mt-8 rounded-[50px]">
    <h2 class= "  bg-blue-700  text-white  bg-blue-700 font-black text-center p-[4px] w-20 ml-20 mt-4 rounded-full">Filtros</h2>
    <div class="justify-items-center ">
    <p >Audifonos inalambricos</p>
    <p>Audifonos de cable</p>
    <p>Audifonos diadema</p>
    </div>
</aside>

</body>
</html>