@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative">
<div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="relative py-12 transform transition-all duration-1000 opacity-0 translate-y-4">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/headers/about.jpg') }}" alt="About Header" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-900 to-blue-800 opacity-80"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-6">Nosotros</h1>
        <p class="text-xl text-gray-200 text-justify max-w-3xl mx-auto">
            Somos el organismo que representa al sector industrial de México, fomentando la competitividad y productividad de las empresas, apoyándolas para que se mantengan en constante actualización y se conviertan en agentes innovadores socialmente responsables.
        </p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">

    <!-- Misión y Visión -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="mb-16 grid md:grid-cols-2 gap-8 transform transition-all duration-1000 opacity-0 translate-y-4">
        <!-- Misión -->
        <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
            <div class="relative p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                        <svg class="w-6 h-6 text-red-700 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke-width="2" />
                            <circle cx="12" cy="12" r="5" stroke-width="2" />
                            <circle cx="12" cy="12" r="2" stroke-width="2" fill="currentColor" />
                            <path d="M12 12 L18 6" stroke-width="2" stroke-linecap="round" />
                            <path d="M18 6 L17 9 L15 7" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">Misión</h3>
                </div>
                <div class="space-y-6">
                    <div class="relative">
                        <h4 class="text-xl text-red-700 font-semibold mb-2 group-hover:text-red-800 transition-colors duration-300">¿Cuál es nuestro propósito?</h4>
                        <div class="h-1 w-20 bg-red-700 group-hover:w-32 transition-all duration-500"></div>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Representar, Defender y Promover los intereses de los socios y del sector INDUSTRIAL de México, influyendo eficazmente en el desarrollo, sustentabilidad, innovación, competitividad e integración de industrias, sectores y regiones, mediante servicios de alta calidad articulados por el Centro Integral de Servicios.
                    </p>
                </div>
                <div class="mt-8 overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Misión CANACINTRA" 
                         class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
        </div>

        <!-- Visión -->
        <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-bl from-blue-900/10 to-transparent pointer-events-none"></div>
            <div class="relative p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                        <svg class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">Visión</h3>
                </div>
                <div class="space-y-6">
                    <div class="relative">
                        <h4 class="text-xl text-blue-900 font-semibold mb-2 group-hover:text-blue-950 transition-colors duration-300">¿Hacia dónde nos dirigimos?</h4>
                        <div class="h-1 w-20 bg-blue-900 group-hover:w-32 transition-all duration-500"></div>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        La Cámara Industrial Líder que posiciona sus propuestas ante los gobiernos federal, estatal y municipal, así como con el poder legislativo, que finca su fortaleza en la vinculación, la inteligencia y el desarrollo empresarial y cuenta con amplia gama de servicios de innovación que la ubica como referente en el diseño de políticas públicas y responsabilidad social empresarial.
                    </p>
                </div>
                <div class="mt-8 overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Visión CANACINTRA" 
                         class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
        </div>
    </div>

    <!-- Equipo Directivo -->
    <div>
        <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">STAFF CANACINTRA MONCLOVA</h2>
        <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 transform transition-all duration-1000 opacity-0 translate-y-4">
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 opacity-0 translate-y-4">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden">
                    <img src="{{ asset('images/staff/Presidente.jpg') }}" 
                        alt="Presidente" 
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Presidente</h3>
                <p class="text-gray-600 text-center">Ing. Jorge Mtanous Falco</p>
                <p class="text-gray-500 text-center text-sm">presidente@canacintramonclova.org</p>
            </div>
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 opacity-0 translate-y-4">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden">
                    <img src="{{ asset('images/staff/Director.jpg') }}" 
                        alt="Director" 
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Director</h3>
                <p class="text-gray-600 text-center">Ing. Norma A. Cruz Sánchez</p>
                <p class="text-gray-500 text-center text-sm">director@canacintramonclova.org</p>
            </div>
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 opacity-0 translate-y-4">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden">
                    <img src="{{ asset('images/staff/Proyectos.jpg') }}" 
                        alt="Proyectos" 
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Proyectos y Capacitación</h3>
                <p class="text-gray-600 text-center">Lic. Luis M. Vargas Hermosillo</p>
                <p class="text-gray-500 text-center text-sm">proyectos@canacintramonclova.org</p>
            </div>
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 opacity-0 translate-y-4">
               <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden">
                    <img src="{{ asset('images/staff/Contabilidad.jpg') }}" 
                        alt="Contabilidad" 
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Contabilidad</h3>
                <p class="text-gray-600 text-center">C.P. Alejandro Aguirre Casas</p>
                <p class="text-gray-500 text-center text-sm">contabilidad@canacintramonclova.org</p>
            </div>
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 opacity-0 translate-y-4">
             <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden">
                    <img src="{{ asset('images/staff/Recepcion.jpg') }}" 
                        alt="Recepción" 
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Recepción</h3>
                <p class="text-gray-600 text-center">Lic. Rosalinda Guadalupe Cerda Rodriguez</p>
                <p class="text-gray-500 text-center text-sm">recepcion@canacintramonclova.org</p>
            </div>
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 opacity-0 translate-y-4">
            <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden">
                    <img src="{{ asset('images/staff/Capacitacion.jpg') }}" 
                        alt="Capacitacion" 
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Afiliación</h3>
                <p class="text-gray-600 text-center">Lic. Javier E. Quintanilla Labastida</p>
                <p class="text-gray-500 text-center text-sm">jefecapacitacion@canacintramonclova.org</p>
            </div>
        </div>
    </div>

    <!-- Valores -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="mb-4 bg-gradient-to-br from-gray-50 via-white to-gray-50 rounded-xl shadow-lg p-8 md:p-12 transform transition-all duration-1000 opacity-0 translate-y-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12 relative">
            <span class="relative inline-block">
                Nuestros Valores
            </span>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                <div class="p-6">
                    <div class="w-16 h-16 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-red-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m21.32,12.05l-2.23-.74c-.81-.27-1.69-.11-2.35.42l-3.4,2.72-1.17-2.34c-.34-.68-1.03-1.11-1.79-1.11h-6.38c-1.1,0-2,.9-2,2v6c0,1.1.9,2,2,2h9.62c1.17,0,2.28-.51,3.04-1.4l5.1-5.95c.22-.25.29-.6.2-.92s-.33-.58-.65-.68Zm-6.18,6.25c-.38.44-.93.7-1.52.7H4v-6h6.38l1,2h-4.38v2h6c.23,0,.45-.08.63-.22l4.36-3.49c.13-.11.31-.14.47-.08l.81.27-4.13,4.82Z"></path>
                            <path d="m13.28,10.69c.19.2.45.31.72.31s.54-.11.72-.31l3.4-3.57c.57-.57.88-1.32.88-2.12s-.31-1.55-.88-2.12c-.57-.57-1.32-.88-2.12-.88-.06,0-1,.02-2,.7-1-.68-1.85-.74-2-.7-.8,0-1.56.31-2.12.88-.57.57-.88,1.32-.88,2.12s.31,1.56.86,2.1l3.41,3.59Zm-1.98-6.4c.19-.19.44-.29.68-.29.03,0,.65.04,1.31.71.39.39,1.02.39,1.41,0,.67-.67,1.29-.71,1.29-.71.27,0,.52.1.71.29h0c.19.19.29.44.29.71s-.1.52-.31.72l-2.69,2.83-2.71-2.84c-.19-.19-.29-.44-.29-.71s.1-.52.29-.71Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-3">Lealtad</h3>
                    <div class="h-1 w-12 bg-red-700 mx-auto mb-4 group-hover:w-24 transition-all duration-300"></div>
                    <p class="text-gray-600 text-center text-sm">Compromiso inquebrantable con nuestros socios y principios</p>
                </div>
            </div>

            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                <div class="p-6">
                    <div class="w-16 h-16 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-900 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <!-- Boxicons v3.0 -->
                            <path d="M5 5A2 2 0 1 0 5 9 2 2 0 1 0 5 5z"></path>
                            <path d="m19.5,10h-.7c-.84,0-1.61.42-2.08,1.11l-3.26,4.89h-2.93l-3.26-4.89c-.46-.7-1.24-1.11-2.08-1.11h-.7c-1.38,0-2.5,1.12-2.5,2.5v5.5h5v-3.7l1.87,2.81c.37.56.99.89,1.66.89h2.93c.67,0,1.29-.33,1.66-.89l1.87-2.81v3.7h5v-5.5c0-1.38-1.12-2.5-2.5-2.5Z"></path>
                            <path d="M19 5A2 2 0 1 0 19 9 2 2 0 1 0 19 5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-3">Responsabilidad</h3>
                    <div class="h-1 w-12 bg-blue-900 mx-auto mb-4 group-hover:w-24 transition-all duration-300"></div>
                    <p class="text-gray-600 text-center text-sm">Cumplimiento efectivo de nuestros compromisos</p>
                </div>
            </div>

            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                <div class="p-6">
                    <div class="w-16 h-16 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-red-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m11 11.59-1.29-1.3-1.42 1.42 2.71 2.7 4.71-4.7-1.42-1.42z"></path>
                            <path d="M12 3C6.49 3 2 6.59 2 11c0 2.91 1.9 5.51 5 6.93V23l5.34-4c5.36-.14 9.66-3.68 9.66-8s-4.49-8-10-8m0 14h-.33L9 19v-2.42l-.64-.25C5.67 15.29 4 13.25 4 10.99c0-3.31 3.59-6 8-6s8 2.69 8 6-3.59 6-8 6Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-3">Honestidad</h3>
                    <div class="h-1 w-12 bg-red-700 mx-auto mb-4 group-hover:w-24 transition-all duration-300"></div>
                    <p class="text-gray-600 text-center text-sm">Transparencia y rectitud en cada acción</p>
                </div>
            </div>

            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                <div class="p-6">
                    <div class="w-16 h-16 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-900 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <!-- Boxicons v3.0 -->
                            <path d="m11,2v2.06c-4.49.5-8,4.32-8,8.94,0,4.96,4.04,9,9,9s9-4.04,9-9c0-2.12-.74-4.07-1.98-5.61l1.46-1.46-1.41-1.41-1.46,1.46c-1.29-1.04-2.88-1.72-4.61-1.92v-2.06h-2Zm8,11c0,3.86-3.14,7-7,7s-7-3.14-7-7,3.14-7,7-7,7,3.14,7,7Z"></path>
                            <path d="M11 8H13V14H11z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-3">Eficiencia</h3>
                    <div class="h-1 w-12 bg-blue-900 mx-auto mb-4 group-hover:w-24 transition-all duration-300"></div>
                    <p class="text-gray-600 text-center text-sm">Optimización de recursos para resultados superiores</p>
                </div>
            </div>

            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                <div class="p-6">
                    <div class="w-16 h-16 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-red-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 2H6C4.35 2 3 3.35 3 5v14c0 1.65 1.35 3 3 3h15v-2H6c-.55 0-1-.45-1-1s.45-1 1-1h14c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1m-6 14H6c-.35 0-.69.07-1 .18V5c0-.55.45-1 1-1h7v7l2-1 2 1V4h2v12z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-3">Compromiso</h3>
                    <div class="h-1 w-12 bg-red-700 mx-auto mb-4 group-hover:w-24 transition-all duration-300"></div>
                    <p class="text-gray-600 text-center text-sm">Dedicación total al desarrollo industrial</p>
                </div>
            </div>

            <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                <div class="p-6">
                    <div class="w-16 h-16 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-900 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m21.55,3.69c-.28-.18-.64-.21-.95-.08-2.5,1.08-5.08.28-7.81-.56-2.96-.91-6.02-1.85-9.19-.48-.37.16-.6.52-.6.92v18.52h2v-6.81c2.31-.73,4.69,0,7.21.77,1.89.58,3.81,1.17,5.78,1.17,1.12,0,2.26-.19,3.41-.69.37-.16.6-.52.6-.92V4.52c0-.34-.17-.65-.45-.84Zm-12.74.37c-.16-.03-.31-.06-.47-.08.16.02.31.05.47.08Zm7.41,10.89c.15.02.29.05.44.07-.15-.02-.29-.04-.44-.07Zm3.79-6.08c-1,.27-2,.31-3,.2v3c1,.1,2,.06,3-.2v2.96c-.98.31-1.98.34-3,.23v-2.98c-1-.1-2-.34-3-.62v2.96c-.4-.12-.8-.24-1.21-.36-.59-.18-1.19-.36-1.79-.53v-2.97c-1-.28-2-.52-3-.62v3c.05,0,.1.02.15.02-.38-.04-.76-.08-1.14-.08-.67,0-1.34.07-2.01.23v-2.97c1-.27,2-.31,3-.2v-3c-1-.1-2-.06-3,.2v-2.96c.98-.31,1.98-.34,3-.23v2.98c1,.1,2,.34,3,.62v-2.96c.4.12.8.24,1.21.36.59.18,1.19.37,1.79.53v2.96c1,.28,2,.52,3,.62v-2.99c.99.09,1.99.06,3-.18v2.97Z"></path>
                            <path d="m11,7.55v3c1,.28,2,.62,3,.9v-3c-1-.28-2-.62-3-.9Z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-3">Competitividad</h3>
                    <div class="h-1 w-12 bg-blue-900 mx-auto mb-4 group-hover:w-24 transition-all duration-300"></div>
                    <p class="text-gray-600 text-center text-sm">Innovación constante para el liderazgo sectorial</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
