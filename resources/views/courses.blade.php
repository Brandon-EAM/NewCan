@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative">
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="relative py-12 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/headers/cursos.jpg') }}" alt="Courses Header" class="w-full h-full object-cover object-mid">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900 to-blue-800 opacity-80"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-6">Cursos y Capacitaciones</h1>
            <p class="text-xl text-gray-200 text-center max-w-3xl mx-auto">Fortalece tus habilidades y conocimientos con nuestros programas de capacitación especializados.</p>
        </div>
    </div>

<div class="container mx-auto px-4 py-16">
    <!-- Sección CECAIM -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="mb-16 grid md:grid-cols-2 gap-8 items-center transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="space-y-6">
            <h1 class="text-5xl font-bold text-blue-900 mb-10 p-0">CECAIM</h1>
            <h2 class="text-3xl font-bold text-gray-800">¿Quiénes somos?</h2>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
                El Centro de Capacitacion de la Industria en Monclova es una institución con una amplia trayectoria en temas de capacitación para distintas áreas del sector empresarial brindando programas de capacitación continua en función a los requerimientos asociados a sus actividades y/o futuras responsabilidades.
            </p>
        </div>
        <div class="flex flex-col items-center justify-center bg-gray-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <img src="/images/CatalogoPortada-600x801.jpg" alt="Catálogo CECAIM" class="w-48 h-auto rounded-lg shadow mb-4 object-cover">
            <a href="/images/CATALOGO-INCOMPANY.pdf" target="_blank" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-300 text-center font-medium w-full">Descargar o Ver Catálogo</a>
        </div>
    </div>    

<!-- Container for section -->
    <div class="flex flex-col md:flex-row md:gap-8 mb-12">
        <!-- Three Concepts -->
        <div class="order-1 md:order-0 md:w-1/2 mb-12 md:mb-0 mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform opacity-0 translate-y-4">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-14 h-14 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <p class="text-center text-gray-700 font-medium">Sesiones de capacitación especializadas</p>
                </div>

                <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform opacity-0 translate-y-4">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-14 h-14 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <p class="text-center text-gray-700 font-medium">Juntas y reuniones estratégicas de negocios</p>
                </div>

                <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform opacity-0 translate-y-4">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-14 h-14 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <p class="text-center text-gray-700 font-medium">Espacios de trabajo colaborativo «Coworking»</p>
                </div>
            </div>
        </div>

        <!-- Nuestros Cursos Text -->
        <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="order-0 md:order-1 md:w-1/2 space-y-6 mb-8 transform transition-all duration-1000 opacity-0 translate-y-4">
            <h1 class="text-5xl font-bold text-blue-900 mb-3">Nuestros cursos</h1>
            <h2 class="text-3xl font-bold text-gray-800">Capacitación y Certificación Laboral</h2>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
                En CANACINTRA Monclova, te ofrecemos un entorno profesional con instalaciones modernas y cómodas, diseñadas para impulsar tu crecimiento profesional y empresarial. Nuestros servicios están orientados a potenciar tus habilidades y conectar con oportunidades de negocio.
            </p>
        </div>
    </div>

    <!-- Cursos Destacados -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="mb-16 transform transition-all duration-1000 opacity-0 translate-y-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Cursos Destacados</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Curso 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-red-700 to-blue-900 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-25" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Presencial</span>
                        <span class="text-gray-500">40 horas</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Gestión de Calidad ISO 9001</h3>
                    <p class="text-gray-600 mb-4">Aprende a implementar y mantener un sistema de gestión de calidad efectivo en tu empresa.</p>
                    <div class="flex justify-between items-center">
                        <a href="/curso/gestion-calidad" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition-colors duration-300">Inscribirse</a>
                    </div>
                </div>
            </div>

            <!-- Curso 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-blue-900 to-red-700 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-25" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-blue-100 text-blue-900 px-3 py-1 rounded-full text-sm font-medium">Online</span>
                        <span class="text-gray-500">30 horas</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Seguridad Industrial Avanzada</h3>
                    <p class="text-gray-600 mb-4">Desarrolla estrategias efectivas para garantizar la seguridad en entornos industriales.</p>
                    <div class="flex justify-between items-center">
                        <a href="/curso/gestion-calidad" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition-colors duration-300">Inscribirse</a>
                    </div>
                </div>
            </div>

            <!-- Curso 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-red-700 to-blue-900 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-25" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Híbrido</span>
                        <span class="text-gray-500">50 horas</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Liderazgo Industrial</h3>
                    <p class="text-gray-600 mb-4">Desarrolla habilidades de liderazgo efectivo para el entorno industrial moderno.</p>
                    <div class="flex justify-between items-center">
                        <a href="/curso/gestion-calidad" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition-colors duration-300">Inscribirse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendario de Cursos -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="mb-16 transform transition-all duration-1000 opacity-0 translate-y-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Calendario de Próximos Cursos</h2>
        <div class="space-y-4">
            <!-- Curso Programado 1 -->
            <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex flex-wrap md:flex-nowrap gap-6">
                    <div class="w-full md:w-32 text-center">
                        <div class="text-3xl font-bold text-red-700">20</div>
                        <div class="text-gray-500">Abril</div>
                        <div class="text-gray-500">2024</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Mantenimiento Predictivo</h3>
                        <p class="text-gray-600 mb-4">Aprende las últimas técnicas y herramientas para el mantenimiento predictivo industrial.</p>
                        <div class="flex flex-wrap gap-4 text-sm">
                            <span class="flex items-center text-gray-500"><svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>9:00 AM - 1:00 PM</span>
                            <span class="flex items-center text-gray-500"><svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>Centro de Capacitación CANACINTRA</span>
                            <span class="flex items-center text-gray-500"><svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>Cupo limitado</span>
                        </div>
                    </div>
                    <div class="w-full md:w-auto flex items-center">
                        <a href="#" class="w-full md:w-auto bg-red-700 text-white px-6 py-2 rounded hover:bg-red-800 transition-colors duration-300 text-center">Reservar Lugar</a>
                    </div>
                </div>
            </div>

            <!-- Curso Programado 2 -->
            <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex flex-wrap md:flex-nowrap gap-6">
                    <div class="w-full md:w-32 text-center">
                        <div class="text-3xl font-bold text-blue-900">5</div>
                        <div class="text-gray-500">Mayo</div>
                        <div class="text-gray-500">2024</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Automatización Industrial</h3>
                        <p class="text-gray-600 mb-4">Curso intensivo sobre sistemas de automatización y control industrial moderno.</p>
                        <div class="flex flex-wrap gap-4 text-sm">
                            <span class="flex items-center text-gray-500"><svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>2:00 PM - 6:00 PM</span>
                            <span class="flex items-center text-gray-500"><svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>Laboratorio de Automatización</span>
                            <span class="flex items-center text-gray-500"><svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>Cupo limitado</span>
                        </div>
                    </div>
                    <div class="w-full md:w-auto flex items-center">
                        <a href="#" class="w-full md:w-auto bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800 transition-colors duration-300 text-center">Reservar Lugar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection