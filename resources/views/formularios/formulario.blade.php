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
        <div class=  "flex justify-center items-center">
            <input type="text" placeholder="Nombres">
        </div>

        <div class=  "flex justify-center items-center">
            <input type="text" placeholder="Apellidos">
        </div>

        <div class=  "flex justify-center items-center">
            <input type="tel" placeholder="Telefono">
        </div>
            
        <div class=  "flex justify-center items-center">
            <input type="text" placeholder="Tipo de documento">
                <select >
                    <option>CC</option>
                    <option>CE</option>
                    <option>TI</option>
                </select>
        </div>

        <div class=  "flex justify-center items-center">
            <input type="tel" placeholder="Numero de documento">
        </div>

        <div class="max-w-md mx-auto space-y-4 p-4">
            <div class="flex border border-gray-300 rounded-md shadow-sm overflow-hidden focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500">
                <div class="flex items-center space-x-2 bg-white px-3 border-r border-gray-300 select-none">
                    <span class="text-xl">🇨🇴</span>
                    <span class="text-gray-700 font-medium">+57</span>
                </div>
            
                <input type="tel" placeholder="Teléfono Celular" class="w-full px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none">
        </div>

        <div class=  "flex justify-center items-center">
            <input type="email" placeholder="Correo electronico">
        </div>

        <div class="flex items-start space-x-3 pt-2">
            <input type="checkbox" id="terminos" class="mt-1 h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500 cursor-pointer">
            <label id="terminos" class="text-sm text-gray-500 leading-tight cursor-pointer select-none">
                Autorizo el uso de mis datos en los siguientes 
                <a href="#" class="text-orange-500 hover:text-orange-600 underline font-medium">términos y condiciones</a>
            </label>
        </div>


        <div class="flex justify-center items-center ">
            <button type="submit" class="flex justify-center items-center bg-blue-700 text-white hover:bg-blue-500 text-center px-6 py-2  rounded-[32px] border-[6px]">Continuar  </button>
        </div>
    </form>
</div>
   


</body>
</html>


    