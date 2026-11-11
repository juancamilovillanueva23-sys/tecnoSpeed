<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Compras</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <x-layouts::app.barra_nav :title="__('formulario')">
    </x-layouts::app.barra_nav>
</head>

<body class="bg-white min-h-screen p-4 flex items-center justify-center">

    <div class="max-w-6xl w-full mx-auto space-y-8">

        <!-- Línea de Progreso -->
        <div class="flex justify-between items-center max-w-2xl mx-auto px-4 py-2">
            <div class="flex flex-col items-center text-black font-medium">
                <div class="w-10 h-10 rounded-full border-2 border-blue-700 flex items-center justify-center mb-1">
                    🛒
                </div>
                <span class="text-xs md:text-sm">Carrito</span>
            </div>
            <div class="flex-1 h-1 bg-blue-700 mx-2"></div>

            <div class="flex flex-col items-center text-black font-medium">
                <div class="w-10 h-10 rounded-full bg-blue-700 text-white flex items-center justify-center mb-1">
                    👤
                </div>
                <span class="text-xs md:text-sm">Datos</span>
            </div>
            <div class="flex-1 h-1 bg-gray-300 mx-2"></div>

            <div class="flex flex-col items-center text-black font-medium">
                <div class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center mb-1">
                    🚚
                </div>
                <span class="text-xs md:text-sm">Entrega</span>
            </div>
            <div class="flex-1 h-1 bg-gray-300 mx-2"></div>

            <div class="flex flex-col items-center text-black font-medium">
                <div class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center mb-1">
                    💲
                </div>
                <span class="text-xs md:text-sm">Pago</span>
            </div>
        </div>

        <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-800">Ingresar datos</h1>

        <!-- Contenedor Principal -->
        <form action="formulario" class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Formulario de Datos -->
            <div class="lg:col-span-2 bg-white rounded-2xl border-2 border-blue-700 p-6 md:p-8 space-y-4 shadow-sm">

                <!-- Correo, Nombre, Apellido -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                    <div>
                        <label class="block font-semibold text-gray-700 mb-1">*Correo electrónico</label>
                        <input type="email" placeholder="Correo electrónico" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-blue-600 bg-blue-50/30 text-gray-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-700 mb-1">*Nombres</label>
                        <input type="text" placeholder="Nombres" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-blue-600 bg-blue-50/30 text-gray-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-700 mb-1">*Apellidos</label>
                        <input type="text" placeholder="Apellidos" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-blue-600 bg-blue-50/30 text-gray-700">
                    </div>
                </div>

                <!-- Tipo doc, Número, Celular -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block font-semibold text-gray-700 mb-1">*Tipo de documento</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-blue-600 bg-white text-gray-700 cursor-pointer">
                            <option value="">Cédula ciudadana...</option>
                            <option value="CC">CC - Cédula de Ciudadanía</option>
                            <option value="CE">CE - Cédula de Extranjería</option>
                            <option value="TI">TI - Tarjeta de Identidad</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-700 mb-1">*Número de documento</label>
                        <input type="tel" placeholder="Número de documento" class="w-full px-3 py-2 border border-gray-300 rounded-lg outline-none focus:border-blue-600 text-gray-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-700 mb-1">*Teléfono Celular</label>
                        <div class="flex border border-gray-300 rounded-lg overflow-hidden focus-within:border-blue-600 bg-white">
                            <span class="bg-gray-50 px-3 py-2 border-r border-gray-300 text-sm font-medium text-gray-600 flex items-center gap-1 select-none">
                                🇨🇴 +57
                            </span>
                            <input type="tel" id="celular" maxlength="10" placeholder="Celular" class="w-full px-3 py-2 outline-none text-gray-700">
                        </div>
                    </div>
                </div>

                <!-- Checkboxes de autorización -->
                <div class="flex items-center space-x-3 p-2">
                    <input type="checkbox" id="terminos" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500 cursor-pointer">
                    <label for="terminos" class="text-sm text-gray-500 cursor-pointer select-none">
                        Autorizo el uso de mis datos en los siguientes
                        <a href="#" class="text-blue-700 hover:underline font-medium">términos y condiciones</a>
                    </label>
                </div>
            </div>

            <!-- Columna Derecha: Resumen de Subtotal y Total -->
            <div class="space-y-4 mt-8">
                <!-- Box Resumen de Precios -->
                <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm space-y-4">
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between text-gray-600">
                            <span>Subtotal:</span>
                            <span class="font-semibold text-gray-800">$ 5.749.900</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Descuento en productos:</span>
                            <span class="font-semibold text-green-600">-$ 3.047.447</span>
                        </div>
                        <hr class="border-gray-200 my-2">
                        <div class="flex justify-between text-base font-bold text-gray-900">
                            <span>Total</span>
                            <span>$ 2.702.453</span>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="space-y-2 pt-2">
                        <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 px-4 rounded-xl shadow transition duration-200 text-center cursor-pointer">
                            Continuar
                        </button>
                        <a href="#" class="block w-full text-center border border-blue-500 text-blue-700 hover:bg-blue-50 font-medium py-2.5 px-4 rounded-xl transition duration-200 text-sm">
                            Volver al carrito
                        </a>
                    </div>
                </div>

            </div>

        </form>
    </div>

    <!-- Script de validación para el celular (Solo números y máximo 10 dígitos) -->
    <script>
        const inputDocumento = document.getElementById('numDocumento');
        const inputCelular = document.getElementById('celular');
        const formCompra = document.getElementById('formCompra');

        // Solo permitir números en el documento y máximo 12 dígitos
        inputDocumento.addEventListener('input', function (e) {
            this.value = this.value.replace(/\D/g, '');
            if (this.value.length > 12) {
                this.value = this.value.slice(0, 12);
            }
        });

        // Solo permitir números en el celular y máximo 10 dígitos
        inputCelular.addEventListener('input', function (e) {
            this.value = this.value.replace(/\D/g, '');
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });

        // Validación general al enviar el formulario
        formCompra.addEventListener('submit', function (e) {
            if (inputDocumento.value.length < 10) {
                e.preventDefault();
                alert('Por favor ingresa un número de documento válido.');
                inputDocumento.focus();
                return;
            }

            if (inputCelular.value.length < 10) {
                e.preventDefault();
                alert('Por favor ingresa un número de celular válido de 10 dígitos.');
                inputCelular.focus();
                return;
            }
        });
    </script>

</body>

</html>