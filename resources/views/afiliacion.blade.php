@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <section x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="relative py-16 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/headers/afiliacion.jpg') }}" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900 to-blue-800 opacity-80"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10 text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Únete a CANACINTRA Monclova</h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto mb-8">Impulsa el crecimiento de tu empresa con los beneficios exclusivos de nuestra cámara industrial.</p>
            <a href="/contacto" class="inline-block bg-red-700 text-white font-semibold py-3 px-6 rounded-xl hover:bg-red-800 transition duration-300 transform hover:scale-105">Contáctanos</a>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12 transform transition-all duration-1000 opacity-0 translate-y-4">Beneficios de Afiliarte</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
                    <div class="relative p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                                <svg class="w-6 h-6 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Capacitación continua</h3>
                        </div>
                        <p class="text-gray-600">Accede a una amplia gama de cursos y seminarios diseñados para fortalecer las habilidades de tu equipo y mantener tu empresa competitiva.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/10 to-transparent pointer-events-none"></div>
                    <div class="relative p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-briefcase-fill text-blue-900 group-hover:text-white transition-colors duration-300" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                    <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Bolsa de trabajo</h3>
                        </div>
                        <p class="text-gray-600">Encuentra el talento ideal para tu empresa con nuestro servicio de selección de personal y promoción de vacantes.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
                    <div class="relative p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                                <svg class="w-6 h-6 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Asesoría y consultoría</h3>
                        </div>
                        <p class="text-gray-600">Recibe apoyo jurídico y estratégico para enfrentar desafíos y aprovechar oportunidades en el sector industrial.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/10 to-transparent pointer-events-none"></div>
                    <div class="relative p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                                <svg class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                                    <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Networking empresarial</h3>
                        </div>
                        <p class="text-gray-600">Conecta con otros empresarios en eventos como el Encuentro de Negocios CANACINTRA Monclova 2024 para generar alianzas estratégicas.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
                    <div class="relative p-6">
                        <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                                <svg class="w-6 h-6 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514"/>
                                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/>
                                    <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Representación institucional</h3>
                        </div>
                        <p class="text-gray-600">Defendemos tus intereses ante instituciones públicas, privadas y educativas para promover el crecimiento de tu negocio.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div x-intersect.once="$el.classList.add('opacity-100', 'translate-y-0')" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 overflow-hidden opacity-0 translate-y-4">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/10 to-transparent pointer-events-none"></div>
                    <div class="relative p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                                <svg class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13m.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Crecimiento estratégico</h3>
                        </div>
                        <p class="text-gray-600">Aprovecha nuestra experiencia para llevar tu empresa al siguiente nivel con soluciones personalizadas y estrategias innovadoras.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About CANACINTRA Section -->
    <section x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-gradient-to-br from-blue-900 to-blue-800 text-white py-16 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <div class="overflow-hidden rounded-xl">
                    <img src="https://th.bing.com/th/id/OIP.GGrJrqvHJ916TZytR2IZYgHaFj?rs=1&pid=ImgDetMain" alt="CANACINTRA Monclova" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Acerca de CANACINTRA Monclova</h2>
                <p class="text-lg mb-6 text-gray-200">Somos la Cámara Nacional de la Industria de Transformación en Monclova, representando al sector industrial de México con el objetivo de fomentar la competitividad y productividad de las empresas. Con una amplia cobertura nacional e internacional, apoyamos a nuestros socios con servicios que impulsan su crecimiento y los convierten en agentes innovadores y socialmente responsables.</p>
                <a href="/contacto" class="inline-block bg-red-700 text-white font-semibold py-3 px-6 rounded-xl hover:bg-red-800 transition duration-300 transform hover:scale-105">Únete Hoy</a>
            </div>
        </div>
    </section>
    
    <section x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-gradient-to-b from-gray-50 to-gray-100 py-20 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Experiencia Multisectorial</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Explora nuestra experiencia en diversos sectores que impulsa una perspectiva estratégica para tu empresa.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-7xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Industria metal mecánica</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Lideramos en soluciones para la fabricación y transformación de metales con tecnología de punta.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Industria química y paraquímica</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Innovación en procesos químicos para productos de alta calidad y sostenibilidad.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                                <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Bienes de capital</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Suministro de maquinaria y equipos para optimizar la producción industrial.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/>
                                <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.386 1.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Industria diversa</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Soluciones integrales para diversos sectores industriales con enfoque en innovación.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Alimentos y bebidas</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Apoyo en la producción y distribución de productos alimenticios de calidad.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Técnicos de servicios</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Servicios especializados para optimizar operaciones técnicas y logísticas.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5zM3 4v2h4.5V4zm5.5 0v2H13V4zM3 10v2h4.5v-2zm5.5 0v2H13v-2zM1 1v2h3.5V1zm4.5 0v2h5V1zm6 0v2H15V1zM1 7v2h3.5V7zm4.5 0v2h5V7zm6 0v2H15V7zM1 13v2h3.5v-2zm4.5 0v2h5v-2zm6 0v2H15v-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Productos y materiales para la construcción</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Soluciones para la industria de la construcción con materiales de alta calidad.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208M6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Papel, cartón y escritorio</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Producción eficiente de materiales de oficina y empaques sostenibles.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Mueblero</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Diseño y fabricación de muebles con enfoque en calidad y funcionalidad.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Automotriz</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Apoyo en la producción y distribución de componentes automotrices de precisión.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Médica y salud</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Innovación en productos y servicios para el sector de la salud.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.4 1.7c.216.289.65.84 1.725 1.274 1.093.44 2.884.774 5.834.528l.37-.023c1.823-.06 3.117.598 3.956 1.579C14.16 6.082 14.5 7.41 14.5 8.5c0 .58-.032 1.285-.229 1.997q.198.248.382.54c.756 1.2 1.19 2.563 1.348 3.966a1 1 0 0 1-1.98.198c-.13-.97-.397-1.913-.868-2.77C12.173 13.386 10.565 14 8 14c-1.854 0-3.32-.544-4.45-1.435-1.125-.887-1.89-2.095-2.391-3.383C.16 6.62.16 3.646.509 1.902L.73.806zm-.05 1.39c-.146 1.609-.008 3.809.74 5.728.457 1.17 1.13 2.213 2.079 2.961.942.744 2.185 1.22 3.83 1.221 2.588 0 3.91-.66 4.609-1.445-1.789-2.46-4.121-1.213-6.342-2.68-.74-.488-1.735-1.323-1.844-2.308-.023-.214.237-.274.38-.112 1.4 1.6 3.573 1.757 5.59 2.045 1.227.215 2.21.526 3.033 1.158.058-.39.075-.782.075-1.158 0-.91-.288-1.988-.975-2.792-.626-.732-1.622-1.281-3.167-1.229l-.316.02c-3.05.253-5.01-.08-6.291-.598a5.3 5.3 0 0 1-1.4-.811"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Economía verde</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Soluciones sostenibles para un futuro más verde y eficiente.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-red-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0zm0 1h3v3H5zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Tecnologías de la información</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Desarrollo de soluciones tecnológicas para la transformación digital.</p>
                    </div>
                    <div x-intersect.once="$el.classList.add('opacity-100', 'scale-100')" class="group relative p-6 rounded-xl hover:bg-blue-50/50 transition-colors duration-300 transform scale-95 opacity-0">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Agroindustria</h3>
                        <p class="text-gray-600 text-sm mt-2 text-center">Optimización de procesos agrícolas para una producción sostenible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection