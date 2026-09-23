<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Compras</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-400">
                    <!-- Formulario de compras -->
<div class="flex min-h-screen items-center justify-center ">
    <form class="bg-white  rounded-[32px] border-[6px] border-blue-700 mt-20  max-w-4xl h-[500px] px-20 py-10"action="formulario">
        
        <h2 class="flex justify-center items-center text-lg font-bold uppercase text-gray-800" text-gray-400 >Tus datos</h2>
    <div class="p-2">
        <div class="flex justify-center items-center border border-gray-300 rounded-md ">
            <input type="text" placeholder="Nombres" class="w-full text-center outline-none">
        </div>
    </div>

    <div class="p-2">
        <div class="flex justify-center items-center border border-gray-300 rounded-md ">
            <input type="text" placeholder="Apellidos" class="w-full text-center outline-none">
        </div>
    </div>

    <div class="p-2">
        <div class="flex justify-center items-center border border-gray-300 rounded-md ">
            <input type="tel" placeholder="Telefono" class="w-full text-center outline-none">
        </div>
    </div>


    <div class="p-2">
        <div class="flex items-center border border-gray-300 rounded-md px-3 ">
            <input type="text" placeholder="Tipo de documento" class="w-full text-center outline-none bg-transparent">
            <select class="outline-none bg-transparent font-medium text-gray-700 cursor-pointer">
                <option>CC</option>
                <option>CE</option>
                <option>TI</option>
            </select>
        </div>
    </div>


    <div class="p-2">
        <div class="flex items-center border border-gray-300 rounded-md">
            <input type="tel" placeholder="Numero de documento" class="w-full text-center outline-none">
        </div>
    </div>


    <div class="p-2">
        <div class="flex items-center border border-gray-300 rounded-md ">
            <input type="email" placeholder="Correo electronico" class="w-full text-center outline-none">
        </div>
    </div>


    <div class="p-2">
        <div class="flex border border-gray-300 rounded-md overflow-hidden">
            <div class="flex items-center space-x-2 bg-gray-50 px-3 border-r border-gray-300 select-none">
                <span class="text-xl">🇨🇴</span>
                <span class="text-gray-700 font-medium">+57</span>
            </div>
            <input type="tel" placeholder="Teléfono Celular" class="w-full px-4 py-2 text-center outline-none">
        </div>
    </div>


    <div class="flex items-center space-x-3 p-2">
        <input type="checkbox" id="terminos" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500 cursor-pointer">
        <label for="terminos" class="text-sm text-gray-500 cursor-pointer select-none">
            Autorizo el uso de mis datos en los siguientes 
            <a href="#" class="text-blue-700 hover:underline font-medium">términos y condiciones</a>
        </label>
    </div>

    <div class="flex justify-center items-center pt-4">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-2.5 rounded-full ">
            Continuar
        </button>
    </div>
    </form>
</div>
   


</body>
</html>


    