@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative">
    <!-- Hero Section -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="relative py-12 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/headers/servicios.jpg') }}" alt="Services Header" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900 to-blue-800 opacity-80"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-6">Nuestros Servicios</h1>
            <p class="text-xl text-gray-200 text-justify max-w-3xl mx-auto">
                En CANACINTRA Monclova ofrecemos soluciones integrales para impulsar la competitividad, innovación y crecimiento sostenible de tu empresa, con servicios diseñados para apoyar al sector industrial en cada etapa de su desarrollo.
            </p>
        </div>
    </div>

    <!-- Servicios Grid -->
    <div class="container mx-auto px-4 py-16">
        <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 transform transition-all duration-1000 opacity-0 translate-y-4">
            <!-- Servicio 1: Modelo Mexicano de Formación Dual (Image Above) -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
                <div class="relative p-8">
                    <div class="mt-8 overflow-hidden rounded-xl">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Modelo Mexicano de Formación Dual" 
                             class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="flex items-center mt-6 mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                            <svg class="w-8 h-8 p-0.5 text-red-700 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Formación dual</h3>
                    </div>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">Formación dual que combina aprendizaje teórico y práctico para jóvenes.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Capacitación en empresas
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Programas educativos
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Vinculación con instituciones
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Servicio 2: Bolsa de Trabajo (Text Above) -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-bl from-blue-900/10 to-transparent pointer-events-none"></div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-briefcase-fill text-blue-900 group-hover:text-white transition-colors duration-300" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Bolsa de trabajo</h3>
                    </div>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">Conexión entre empresas y talento para cubrir vacantes especializadas.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Reclutamiento especializado
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Perfiles técnicos
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Vinculación laboral
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8 overflow-hidden rounded-xl relative">
                        <img src="\images\servicios\Bolsa.jpg" 
                            alt="Bolsa de Trabajo" 
                            class="w-full h-48 object-cover transform group-hover:scale-110 group-hover:blur-sm transition-all duration-500">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="/servicios/bolsa" class="inline-block bg-blue-100 text-blue-900 font-semibold px-6 py-4 rounded-lg hover:bg-blue-900 hover:text-white transition-colors duration-300">
                                Más Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicio 3: Renta de Salas (Image Above) -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
                <div class="relative p-8">
                    <div class="mt-8 overflow-hidden rounded-xl relative">
                        <img src="\images\servicios\Renta.jpg" 
                             alt="Renta de Salas" 
                             class="w-full h-48 object-cover object-top transform group-hover:scale-110 group-hover:blur-sm transition-all duration-500">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="/servicios/renta-salas" class="inline-block bg-red-100 text-red-700 font-semibold px-6 py-4 rounded-lg hover:bg-red-700 hover:text-white transition-colors duration-300">
                                Más Información
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center mt-6 mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                            <svg class="w-6 h-6 text-red-700 group-hover:text-white transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Renta de salas</h3>
                    </div>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">Espacios equipados para reuniones, capacitaciones y eventos empresariales.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Salas de juntas
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Auditorios equipados
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Espacios para eventos
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Servicio 4: Registro SIEM (Text Above) -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-bl from-blue-900/10 to-transparent pointer-events-none"></div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                            <svg class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375Zm9.586 4.594a.75.75 0 0 0-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 0 0-1.06 1.06l1.5 1.5a.75.75 0 0 0 1.116-.062l3-3.75Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Registro SIEM</h3>
                    </div>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">Registro en el Sistema de Información Empresarial Mexicano para visibilidad.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Inscripción al SIEM
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Actualización de datos
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Asesoría para cumplimiento
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8 overflow-hidden rounded-xl relative">
                        <img src="/images/servicios/RegistroSIEM.jpg" 
                            alt="Registro SIEM" 
                            class="w-full h-48 object-cover object-top transform group-hover:scale-110 group-hover:blur-sm transition-all duration-500">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="/servicios/siem-registro" class="inline-block bg-blue-100 text-blue-900 font-semibold px-6 py-4 rounded-lg hover:bg-blue-900 hover:text-white transition-colors duration-300">
                                Más Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicio 5: Promoción en Redes (Image Above) -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-br from-red-700/10 to-transparent pointer-events-none"></div>
                <div class="relative p-8">
                    <div class="mt-8 overflow-hidden rounded-xl">
                        <img src="\images\servicios\Redes.jpg" 
                             alt="Promoción en Redes" 
                             class="w-full h-48 object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="flex items-center mt-6 mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-700 transition-colors duration-300">
                            <svg class="w-6 h-6 text-red-700 group-hover:text-white transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M12 1.5a.75.75 0 0 1 .75.75V4.5a.75.75 0 0 1-1.5 0V2.25A.75.75 0 0 1 12 1.5ZM5.636 4.136a.75.75 0 0 1 1.06 0l1.592 1.591a.75.75 0 0 1-1.061 1.06l-1.591-1.59a.75.75 0 0 1 0-1.061Zm12.728 0a.75.75 0 0 1 0 1.06l-1.591 1.592a.75.75 0 0 1-1.06-1.061l1.59-1.591a.75.75 0 0 1 1.061 0Zm-6.816 4.496a.75.75 0 0 1 .82.311l5.228 7.917a.75.75 0 0 1-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 0 1-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 0 1-1.247-.606l.569-9.47a.75.75 0 0 1 .554-.68ZM3 10.5a.75.75 0 0 1 .75-.75H6a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 10.5Zm14.25 0a.75.75 0 0 1 .75-.75h2.25a.75.75 0 0 1 0 1.5H18a.75.75 0 0 1-.75-.75Zm-8.962 3.712a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 1 1-1.061-1.06l1.591-1.592a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Promoción en redes</h3>
                    </div>
                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed text-lg">Publicidad de su empresa por medio de nuestras redes sociales.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Envio de información de información relevante	
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Publicidad en medios digitales
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Servicio 6: Pruebas Psicométricas (Text Above) -->
            <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-bl from-blue-900/10 to-transparent pointer-events-none"></div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-900 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300">
                                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
                                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pruebas psicométricas</h3>
                    </div>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">Evaluaciones para optimizar la selección y desarrollo del talento humano.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Evaluaciones de personalidad
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Análisis de competencias
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-900 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Reportes detallados
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8 overflow-hidden rounded-xl">
                        <img src="/images/servicios/Test.jpg" 
                            alt="Pruebas Psicométricas" 
                            class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="py-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">¿Listo para transformar tu empresa?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Contáctanos para recibir asesoría personalizada y descubre cómo nuestros servicios pueden impulsar tu crecimiento.</p>
            <a href="/contacto" class="inline-block bg-white text-blue-900 font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors duration-300">Solicitar Información</a>
        </div>
    </div>
</div>
@endsection