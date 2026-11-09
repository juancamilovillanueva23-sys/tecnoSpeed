<x-layouts::app.barra_nav :title="__('inicio')">
</x-layouts::app.barra_nav>

<!-- 1. HERO SLIDER / BANNER PRINCIPAL CON JS INTEGRADO -->
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
    <div id="hero-banner" class="relative w-full h-[520px] rounded-3xl overflow-hidden shadow-2xl bg-gray-900 group">
        <!-- Contenedor de Diapositivas -->
        <div id="slides-container" class="flex w-full h-full transition-transform duration-700 ease-out">
            
            <!-- Slide 1 -->
            <div class="min-w-full h-full relative flex items-center">
                <img class="absolute inset-0 w-full h-full object-cover object-center" src="{{ asset('storage/img/imagen_banner1.jpg') }}" alt="TecnoSpeed Banner 1">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-900/60 to-transparent"></div>
                
                <div class="relative z-10 max-w-2xl px-8 sm:px-14">
                    <span class="inline-block px-3.5 py-1 mb-4 text-xs font-semibold tracking-wider text-blue-400 uppercase bg-blue-950/80 border border-blue-500/30 rounded-full backdrop-blur-md">
                        Novedad 2026
                    </span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight tracking-tight drop-shadow-md">
                        ¡Bienvenido a <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">TecnoSpeed</span>!
                    </h1>
                    <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-lg leading-relaxed">
                        Tu mejor opción para adquirir tecnología confiable, audio premium y la más alta calidad del mercado.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#categorias" class="px-6 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm rounded-xl shadow-lg shadow-blue-600/30 hover:shadow-blue-500/50 transition-all duration-300 transform hover:-translate-y-0.5">
                            Explorar Catálogo
                        </a>
                        <a href="#faq" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold text-sm rounded-xl border border-white/20 backdrop-blur-md transition-all duration-300">
                            Preguntas Frecuentes
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 (Eslogan secundario) -->
            <div class="min-w-full h-full relative flex items-center">
                <img class="absolute inset-0 w-full h-full object-cover object-center" src="{{ asset('storage/img/fon_Eslo.jpg') }}" alt="TecnoSpeed Eslogan">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-900/70 to-transparent"></div>
                
                <div class="relative z-10 max-w-2xl px-8 sm:px-14">
                    <span class="inline-block px-3.5 py-1 mb-4 text-xs font-semibold tracking-wider text-cyan-300 uppercase bg-cyan-950/80 border border-cyan-500/30 rounded-full backdrop-blur-md">
                        Estilo & Sonido
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight tracking-tight">
                        No es solo un accesorio, es la esencia de tu estilo
                    </h2>
                    <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-lg">
                        Descubre audífonos diseñados para acompañar tu ritmo diario con el mejor desempeño acústico.
                    </p>
                    <div class="mt-8">
                        <a href="#categorias" class="inline-block px-7 py-3.5 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                            Conócenos Ahora
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controles: Botón Anterior -->
        <button id="prevBtn" aria-label="Anterior" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-slate-900/40 hover:bg-slate-900/80 text-white rounded-full flex items-center justify-center backdrop-blur-md border border-white/10 transition-all opacity-0 group-hover:opacity-100 focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </button>

        <!-- Controles: Botón Siguiente -->
        <button id="nextBtn" aria-label="Siguiente" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-slate-900/40 hover:bg-slate-900/80 text-white rounded-full flex items-center justify-center backdrop-blur-md border border-white/10 transition-all opacity-0 group-hover:opacity-100 focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        </button>

        <!-- Indicadores (Dots) -->
        <div id="dots-container" class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center space-x-2.5 z-20">
            <button class="dot h-2.5 rounded-full bg-white transition-all duration-300 w-8" data-index="0"></button>
            <button class="dot h-2.5 rounded-full bg-white/40 transition-all duration-300 w-2.5" data-index="1"></button>
        </div>
    </div>
</div>

<!-- 2. BARRA DE BENEFICIOS / PROPUESTA DE VALOR -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center space-x-4 p-2">
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div>
                <h4 class="text-sm font-bold text-gray-900">Envíos a toda Colombia</h4>
                <p class="text-xs text-gray-500">Despacho el mismo día antes de las 12 PM</p>
            </div>
        </div>
        <div class="flex items-center space-x-4 p-2 border-t sm:border-t-0 sm:border-l border-gray-100">
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div>
                <h4 class="text-sm font-bold text-gray-900">Garantía Directa</h4>
                <p class="text-xs text-gray-500">4 meses de cobertura en cada compra</p>
            </div>
        </div>
        <div class="flex items-center space-x-4 p-2 border-t sm:border-t-0 sm:border-l border-gray-100">
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-credit-card"></i>
            </div>
            <div>
                <h4 class="text-sm font-bold text-gray-900">Pago a Cuotas</h4>
                <p class="text-xs text-gray-500">Financiamiento con Addi y tarjetas</p>
            </div>
        </div>
    </div>
</div>

<!-- 3. CONTENIDO PRINCIPAL / CATEGORÍAS Y FAQ -->
<main id="categorias" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- ENCABEZADO DE SECCIÓN CATEGORÍAS -->
    <div class="text-center max-w-xl mx-auto mb-10">
        <span class="text-xs font-extrabold text-blue-600 tracking-wider uppercase bg-blue-50 px-3.5 py-1.5 rounded-full border border-blue-200">
            Nuestra Colección
        </span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mt-3 tracking-tight">
            Encuentra tu estilo de sonido
        </h2>
        <p class="text-gray-500 mt-2 text-sm sm:text-base">
            Diseñados para adaptarse a tus sesiones de estudio, entrenamiento o trabajo.
        </p>
    </div>

    <!-- TARJETAS DE CATEGORÍA -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Tarjeta IN EAR -->
        <section class="group relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white rounded-3xl p-8 sm:p-10 shadow-xl transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl flex flex-col justify-between">
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-white/10 rounded-full blur-2xl group-hover:bg-white/20 transition-all"></div>
            
            <div>
                <div class="flex items-center justify-between mb-6">
                    <span class="text-xs font-semibold uppercase tracking-widest bg-white/20 px-3 py-1 rounded-full backdrop-blur-md">
                        Intrauditivos
                    </span>
                    <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center border border-white/20 backdrop-blur-md">
                        <i class="fa-solid fa-ear-deaf text-2xl text-white"></i>
                    </div>
                </div>

                <h3 class="text-4xl font-black tracking-tight uppercase mb-3">IN EAR</h3>
                <p class="text-blue-100 text-base leading-relaxed mb-6">
                    Audífonos intrauditivos diseñados para un ajuste ergonómico superior y un aislamiento acústico envolvente.
                </p>

                <div class="border-t border-white/15 pt-6">
                    <ul class="space-y-2.5 text-sm text-blue-100">
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-blue-300 text-xs"></i>
                            <span>Cancelación pasiva de ruido exterior.</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-blue-300 text-xs"></i>
                            <span>Diseño ultra compacto y liviano.</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-blue-300 text-xs"></i>
                            <span>Gomas de silicona adaptables (S, M, L).</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-blue-300 text-xs"></i>
                            <span>Bajos profundos y sonido HD.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-4">
                <button class="w-full sm:w-auto px-6 py-3 bg-white text-blue-700 font-bold text-sm rounded-xl shadow-md hover:bg-blue-50 transition-colors">
                    Ver Modelos In-Ear
                </button>
            </div>
        </section>

        <!-- Tarjeta ON EAR -->
        <section class="group relative overflow-hidden bg-gradient-to-br from-indigo-600 via-blue-700 to-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-xl transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl flex flex-col justify-between">
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-white/10 rounded-full blur-2xl group-hover:bg-white/20 transition-all"></div>
            
            <div>
                <div class="flex items-center justify-between mb-6">
                    <span class="text-xs font-semibold uppercase tracking-widest bg-white/20 px-3 py-1 rounded-full backdrop-blur-md">
                        Supraaurales
                    </span>
                    <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center border border-white/20 backdrop-blur-md">
                        <i class="fa-solid fa-headphones text-2xl text-white"></i>
                    </div>
                </div>

                <h3 class="text-4xl font-black tracking-tight uppercase mb-3">ON EAR</h3>
                <p class="text-blue-100 text-base leading-relaxed mb-6">
                    Audífonos que descansan sobre la oreja, logrando el equilibrio perfecto entre confort prolongado y fidelidad sonora.
                </p>

                <div class="border-t border-white/15 pt-6">
                    <ul class="space-y-2.5 text-sm text-blue-100">
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-indigo-300 text-xs"></i>
                            <span>Diseño ligero y estructurado.</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-indigo-300 text-xs"></i>
                            <span>Almohadillas acolchadas de alta comodidad.</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-indigo-300 text-xs"></i>
                            <span>Drivers amplios para graves potentes.</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check text-indigo-300 text-xs"></i>
                            <span>Estructura plegable para fácil transporte.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-4">
                <button class="w-full sm:w-auto px-6 py-3 bg-white text-indigo-900 font-bold text-sm rounded-xl shadow-md hover:bg-blue-50 transition-colors">
                    Ver Modelos On-Ear
                </button>
            </div>
        </section>

    </div>

    <!-- 4. SECCIÓN PREGUNTAS FRECUENTES (FAQ) -->
    <section id="faq" class="mt-20">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <span class="inline-block border border-blue-200 bg-blue-50 text-blue-600 font-bold text-xs px-4 py-1.5 rounded-full uppercase tracking-wider mb-2">
                    Resolvemos tus dudas
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">
                    Preguntas <span class="text-blue-600">Frecuentes</span>
                </h2>
            </div>

            <div class="space-y-4">
                
                <!-- FAQ Item 1 -->
                <details class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:border-blue-300 [&_summary::-webkit-details-marker]:hidden" open>
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
                        ¿Cuánto tarda en enviarse mi pedido?
                        <span class="ml-4 flex-shrink-0 bg-blue-50 text-blue-600 group-open:bg-blue-600 group-open:text-white rounded-full p-2 transition-colors">
                            <svg class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed border-t border-gray-100 pt-4">
                        Si tu pago se confirma <strong class="text-gray-900">antes de las 12:00 PM</strong>, tu producto se prueba, empaca y despacha <strong class="text-gray-900">el mismo día</strong>. Si se confirma después, se envía el siguiente día hábil. La entrega tarda entre 1 y 3 días hábiles en toda Colombia con número de guía.
                    </p>
                </details>

                <!-- FAQ Item 2 -->
                <details class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:border-blue-300 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
                        ¿Puedo financiar mis audífonos? ¿Qué opciones hay?
                        <span class="ml-4 flex-shrink-0 bg-blue-50 text-blue-600 group-open:bg-blue-600 group-open:text-white rounded-full p-2 transition-colors">
                            <svg class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed border-t border-gray-100 pt-4">
                        ¡Sí! Ofrecemos opciones de pago flexible a cuotas mediante <strong>Addi</strong>, transferencias con <strong>Bancolombia</strong> y todas las tarjetas de crédito o débito a través de nuestra pasarela de pagos segura.
                    </p>
                </details>

                <!-- FAQ Item 3 -->
                <details class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:border-blue-300 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
                        ¿In-Ear o On-Ear para mi día a día?
                        <span class="ml-4 flex-shrink-0 bg-blue-50 text-blue-600 group-open:bg-blue-600 group-open:text-white rounded-full p-2 transition-colors">
                            <svg class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed border-t border-gray-100 pt-4">
                        Los <strong>In-Ear</strong> son ideales si buscas máxima portabilidad, entrenar en el gimnasio o aislamiento de sonido compacto. Los <strong>On-Ear</strong> se recomiendan para largas jornadas de oficina o estudio por su comodidad sobre la oreja y sonido envolvente.
                    </p>
                </details>

                <!-- FAQ Item 4 -->
                <details class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm transition-all duration-200 hover:border-blue-300 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-gray-900 text-lg">
                        ¿Cuentan con garantía?
                        <span class="ml-4 flex-shrink-0 bg-blue-50 text-blue-600 group-open:bg-blue-600 group-open:text-white rounded-full p-2 transition-colors">
                            <svg class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm sm:text-base leading-relaxed border-t border-gray-100 pt-4">
                        Absolutamente. Todos los productos en TecnoSpeed cuentan con <strong>4 meses de garantía directa</strong> por defectos de fábrica a partir de la fecha de entrega.
                    </p>
                </details>

            </div>
        </div>
    </section>

</main>

<!-- SCRIPT DE NAVEGACIÓN Y AUTOPLAY DEL SLIDER -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('slides-container');
    const heroBanner = document.getElementById('hero-banner');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = document.querySelectorAll('.dot');
    
    let currentIndex = 0;
    const totalSlides = dots.length;
    let autoPlayTimer = null;

    function updateSlider(index) {
      currentIndex = (index + totalSlides) % totalSlides;
      container.style.transform = `translateX(-${currentIndex * 100}%)`;
      
      dots.forEach((dot, idx) => {
        if (idx === currentIndex) {
          dot.classList.remove('bg-white/40', 'w-2.5');
          dot.classList.add('bg-white', 'w-8');
        } else {
          dot.classList.remove('bg-white', 'w-8');
          dot.classList.add('bg-white/40', 'w-2.5');
        }
      });
    }

    function startAutoPlay() {
      autoPlayTimer = setInterval(() => {
        updateSlider(currentIndex + 1);
      }, 5000);
    }

    function stopAutoPlay() {
      clearInterval(autoPlayTimer);
    }

    prevBtn?.addEventListener('click', () => {
      updateSlider(currentIndex - 1);
      stopAutoPlay();
      startAutoPlay();
    });

    nextBtn?.addEventListener('click', () => {
      updateSlider(currentIndex + 1);
      stopAutoPlay();
      startAutoPlay();
    });

    dots.forEach(dot => {
      dot.addEventListener('click', (e) => {
        const index = parseInt(e.target.dataset.index);
        updateSlider(index);
        stopAutoPlay();
        startAutoPlay();
      });
    });

    heroBanner?.addEventListener('mouseenter', stopAutoPlay);
    heroBanner?.addEventListener('mouseleave', startAutoPlay);

    startAutoPlay();
  });
</script>

  
    
    
</body>
</html>