<x-layouts::app.barra_nav :title="__('inicio')">
</x-layouts::app.barra_nav>
<!--imagen-->
<div class="bg-gradient-to-r from-blue-100 to-blue-400">
    <img class="w-full h-[500px] " src="{{ asset('storage/img/imagen_banner1.jpg') }}" alt="Imagen de inicio">
</div>
<!--texto u eslogan-->
<div class="  bg-gradient-to-r from-blue-100 to-blue-400 p-4 rounded-lg shadow-md flex justify-center items-center">
    <h1 class="text-2xl font-bold uppercase text-gray-800">¡Bienvenido a TecnoSpeed! Tu mejor opción para adquirir tecnología confiable y de la mejor calidad.</h1>
</div>


 <div class="w-full bg-[url('/storage/img/fon_Eslo.jpg')] bg-cover bg-center bg-no-repeat min-h-[400px] mt-2 flex justify-end items-center p-8  rounded-3xl">
  <div class="max-w-md text-right pr-4 sm:pr-8">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 leading-tight">
      No es solo un accesorio en la esencia de tu estilo
    </h1>
    <button class="mt-4 inline-block bg-blue-700 hover:bg-blue-800 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition-colors duration-200">
      Conócenos
    </button>
  </div>
</div>   
<main class="grid grid-cols-2 gap-6 p-4">

  <section class="bg-blue-500 w-full h-[500px] rounded-3xl flex flex-col items-center justify-center text-center p-6 transition-colors duration-300 hover:bg-blue-400">
    <h1 class="text-4xl sm:text-5xl font-black text-white tracking-widest uppercase drop-shadow-md mb-2">
      IN EAR
    </h1>
    
    <div class="w-[30px] border-[3px] border-white p-1 rounded-sm mb-4">
        <i class="fa-solid fa-ear-deaf text-white"></i>
    </div>
    <p class="text-violet-100 text-xl  max-w-xs mb-4">
      Audífonos intrauditivos diseñados para un ajuste ergonómico y un aislamiento acústico superior.
    </p>
    <ul class="text-violet-200 text-xs sm:text-sm space-y-2 text-left list-disc list-inside">
      <li>Cancelación pasiva de ruido exterior.</li>
      <li>Diseño ultra compacto y liviano.</li>
      <li>Gomas de silicona adaptables (S, M, L).</li>
      <li>Bajos profundos y sonido de alta resolución.</li>
    </ul>
</section>
   <section class="bg-blue-500 w-full h-[500px] rounded-3xl flex flex-col items-center justify-center text-center p-6 transition-colors duration-300 hover:bg-blue-400">
    <h1 class="text-4xl sm:text-5xl font-black text-white tracking-widest uppercase drop-shadow-md mb-2">
      ON EAR
    </h1>
    
    <div class="w-[40px] border-[3px] border-white p-1 rounded-sm mb-4">
        <i class="fa-solid fa-headphones text-white"></i>
    </div>
    <p class="text-violet-100 text-lg max-w-xs mb-4">
      Audífonos supraaurales que descansan sobre la oreja, ofreciendo el equilibrio perfecto entre portabilidad y fidelidad sonora.
    </p>
    <ul class="text-violet-200 text-xs sm:text-sm space-y-2 text-left list-disc list-inside">
      <li>Diseño supraaural ligero y compacto.</li>
      <li>Almohadillas acolchadas de alta comodidad.</li>
      <li>Drivers de mayor tamaño para graves potentes.</li>
      <li>Estructura plegable ideal para transportar.</li>
    </ul>
</section>
<section class="col-span-2 mt-8 px-4">
    

    <span class="inline-block border border-blue-300 bg-blue-50 text-blue-600 font-semibold text-xs px-4 py-1.5 rounded-full uppercase tracking-wider mb-4">
      PREGUNTAS FRECUENTES
    </span>
    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-8">
      Todo lo que necesitas <span class="text-blue-600">saber</span>
    </h2>
    <div class="space-y-4">
      
      <details class="group bg-blue-100 border border-blue-200 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden" open>
        <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
          ¿Cuánto tarda en enviarse mi pedido?
          <span class="bg-blue-600 text-white rounded-full p-1.5 transition-transform group-open:rotate-180">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
          </span>
        </summary>
        <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed">
          Si tu pago se confirma <strong class="text-gray-900">antes de las 12:00 del mediodía</strong>, tu producto se ensambla, prueba y despacha <strong class="text-gray-900">el mismo día</strong>. Si el pago llega después de las 12:00, se envía al <strong class="text-gray-900">día hábil siguiente</strong>. Una vez despachado, los tiempos de entrega son de 1 a 3 días hábiles según tu ciudad. Enviamos a toda Colombia con guía de seguimiento.
        </p>
      </details>
      <details class="group bg-blue-100 border border-blue-200 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">
        <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
          ¿Puedo financiar mis audífonos? ¿Qué opciones hay?
          <span class="bg-blue-500 text-white rounded-full p-1.5 transition-transform group-open:rotate-180">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </span>
        </summary>
        <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed">
          Ofrecemos opciones de pago a cuotas con Addi, Bancolombia y tarjetas de crédito habilitadas.
        </p>
      </details>
      <details class="group bg-blue-100 border border-blue-200 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">
        <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
          ¿In-Ear o On-Ear para mi día a día?
          <span class="bg-blue-500 text-white rounded-full p-1.5 transition-transform group-open:rotate-180">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </span>
        </summary>
        <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed">
          Los In-Ear son ideales para movilidad y hacer deporte por su aislamiento pasivo. Los On-Ear entregan mayor comodidad en sesiones largas de trabajo o estudio.
        </p>
      </details>
        <details class="group bg-blue-100 border border-blue-200 rounded-2xl p-6 [&_summary::-webkit-details-marker]:hidden">
        <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
          ¿Tienen garantia?
          <span class="bg-blue-500 text-white rounded-full p-1.5 transition-transform group-open:rotate-180">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </span>
        </summary>
        <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed">
          Cada producto de la tienda cuenta con 4 meses de garantia al momento de su compra 
        </p>
      </details>

    </div>
  </section>

</main>
    

  
    
    
</body>
</html>