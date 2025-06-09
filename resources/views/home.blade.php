@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<section class="relative bg-gray-900 text-white overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-canacintra-blue to-canacintra-red"></div>
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+CiAgPHBhdGggZD0iTTAgMGg2MHY2MEgweiIgZmlsbD0ibm9uZSIvPgogIDxwYXRoIGQ9Ik0zMCAzMGwtMjAgLTIwbDIwIC0yMGwyMCAyMHoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KICA8cGF0aCBkPSJNMzAgMzBsLTIwIDIwbDIwIDIwbDIwIC0yMHoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KPC9zdmc+'); background-repeat: repeat;"></div>
    </div>
    <div class="container mx-auto px-4 py-12 md:py-24 relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-12">
            <div class="w-full md:w-1/4 animate-scale-fade-in">
                <img src="{{ asset('images/Logo.png') }}" alt="CANACINTRA Logo" class="w-full h-auto max-w-[200px] mx-auto md:max-w-none">
            </div>
            <div class="w-full md:w-2/3 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 md:mb-6 animate-slide-fade-in animation-delay-500">LA FUERZA DE LA INDUSTRIA</h1>
                <p class="text-lg md:text-xl mb-6 md:mb-8 text-gray-200 animate-slide-fade-in animation-delay-700">CANACINTRA Monclova ofrece una amplia gama de servicios y apoyo para que nuestros socios puedan alcanzar sus objetivos empresariales.</p>
                <a href="/contacto" class="inline-block bg-canacintra-red hover:bg-red-800 text-white font-semibold px-6 md:px-8 py-3 rounded-lg transition-colors duration-300 animate-slide-fade-in animation-delay-900">Únete a Nosotros</a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes slideFadeIn {
    from {
        opacity: 0;
        transform: translateX(100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes scaleFadeIn {
    from {
        opacity: 0;
        transform: scale(0.5);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.animate-slide-fade-in {
    animation: slideFadeIn 0.8s ease-out forwards;
}

.animate-scale-fade-in {
    animation: scaleFadeIn 0.8s ease-out forwards;
}

.animation-delay-200 {
    animation-delay: 200ms;
}

.animation-delay-400 {
    animation-delay: 400ms;
}
</style>

<!-- Job Board Banner Section -->
<section class="pt-16 pb-16 bg-canacintra-red">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:w-3/16">
                <img src="{{ asset('images/servicios/Bolsa.jpg') }}" alt="Bolsa de Trabajo" class="w-full h-64 md:h-full object-cover">
            </div>
            <div class="md:w-13/16 p-8 text-center md:text-left">
                <h2 class="text-3xl font-bold text-canacintra-blue mb-4">¡Únete a nuestra bolsa de trabajo!</h2>
                <p class="text-gray-700 mb-6">
                    ¿Estás buscando una nueva oportunidad laboral? Regístrate en nuestra Bolsa de Trabajo y guarda tu información para que las empresas afiliadas a CANACINTRA Monclova puedan encontrarte fácilmente. Conéctate con el sector industrial de la región y da el siguiente paso en tu desarrollo profesional.
                </p>
                <a href="/servicios/bolsa" class="mt-2 inline-block bg-canacintra-red hover:bg-red-800 text-white font-semibold px-8 py-3 rounded-lg transition-colors duration-300">Registrarse</a>
            </div>
        </div>
    </div>
</section>

<!-- Carousel Section -->
<section class="py-16" x-data="{ activeSlide: 0 }">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-6 text-canacintra-blue">Nuestros Servicios</h2>
        
        <div class="relative">
            <div class="overflow-hidden relative rounded-xl shadow-lg">
                <!-- Slides -->
                <div class="flex transition-transform duration-500" :style="`transform: translateX(-${activeSlide * 100}%)`">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&q=80" alt="Capacitación" class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-8">
                            <div class="text-white">
                                <h3 class="text-2xl font-bold mb-2">Capacitación empresarial</h3>
                                <p>Programas de formación diseñados para potenciar el talento de tu empresa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="https://bieninformado.mx/wp-content/uploads/2022/04/Conalep-Proyecto-5.jpeg" alt="Asesoría" class="w-full h-96 object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-8">
                            <div class="text-white">
                                <h3 class="text-2xl font-bold mb-2">Modelo Méxicano de Formación Dual</h3>
                                <p>Modelo que vincula a alumnos de nivel medio superior al aprendizaje técnico empresas de cualquier giro.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0 relative">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80" alt="Networking" class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-8">
                            <div class="text-white">
                                <h3 class="text-2xl font-bold mb-2">Networking empresarial</h3>
                                <p>Conecta con otros empresarios y expande tus oportunidades de negocio.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button @click="activeSlide = (activeSlide - 1 + 3) % 3" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="activeSlide = (activeSlide + 1) % 3" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                    <button @click="activeSlide = 0" :class="{'bg-white': activeSlide === 0, 'bg-white/50': activeSlide !== 0}" class="w-3 h-3 rounded-full transition-colors"></button>
                    <button @click="activeSlide = 1" :class="{'bg-white': activeSlide === 1, 'bg-white/50': activeSlide !== 1}" class="w-3 h-3 rounded-full transition-colors"></button>
                    <button @click="activeSlide = 2" :class="{'bg-white': activeSlide === 2, 'bg-white/50': activeSlide !== 2}" class="w-3 h-3 rounded-full transition-colors"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-4 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-canacintra-blue">¿Por qué elegirnos?</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 bg-canacintra-red text-white rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Experiencia comprobada</h3>
                <p class="text-gray-600">Más de 30 años respaldando el desarrollo industrial de Monclova y la región.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 bg-canacintra-red text-white rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Red de contactos</h3>
                <p class="text-gray-600">Acceso a una amplia red de empresarios, proveedores y oportunidades de negocio.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 bg-canacintra-red text-white rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Respaldo institucional</h3>
                <p class="text-gray-600">Representación y defensa de tus intereses ante autoridades y organismos.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="mt-12 py-16 bg-gradient-to-r from-canacintra-blue to-canacintra-red text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">¿Listo para impulsar tu empresa?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Únete a CANACINTRA Monclova y accede a todos nuestros beneficios y servicios.</p>
        <a href="/contacto" class="inline-block bg-white text-canacintra-blue font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors duration-300">Contáctanos</a>
    </div>
</section>
@endsection