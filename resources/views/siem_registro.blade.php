@extends('layouts.app')

@section('title', 'Registro SIEM')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative">
    <!-- Hero Section -->
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-gradient-to-b from-blue-900 to-blue-800 py-12 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-0">
                <div class="md:w-2/3">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Registro SIEM</h1>
                    <p class="text-xl text-gray-200 text-justify">
                        El Sistema de Información Empresarial Mexicano (SIEM) te ayuda a identificar oportunidades de negocio y a cumplir con requisitos para licitaciones.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Información de Contacto -->
            <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-2xl shadow-lg p-8 transform transition-all duration-1000 opacity-0 translate-y-4">
                <!-- Imagen Ilustrativa -->
                <div class="mb-12">
                    <img src="\images\servicios\RegistroSIEM.jpg" 
                         alt="Registro SIEM" 
                         class="w-full h-auto max-h-[500px] mx-auto object-contain rounded-lg">
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Información de Contacto</h2>
                <div class="space-y-4 text-lg text-gray-600">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-canacintra-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <span>Javier Quintanilla</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-canacintra-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>866 633 66 33</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-canacintra-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>tramites@canacintramonclova.org</span>
                    </div>
                </div>
            </div>

            <!-- Información SIEM -->
            <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-2xl shadow-lg p-8 transform transition-all duration-1000 opacity-0 translate-y-4">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">¿Qué es el SIEM?</h2>
                <p class="text-gray-600 mb-6">Es el Sistema de Información Empresarial Mexicano, quien suministra información oportuna y confiable sobre las características y ubicación de los establecimientos y actividades productivas de comercio, servicios, turismo e industria en el país.</p>

                <h3 class="text-2xl font-bold text-gray-800 mb-4">CANACINTRA te invita a que obtengas o renueves el registro SIEM en el primer bimestre del año, lo cual te permitirá:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6">
                    <li>Participar en licitaciones de gobierno municipal, estatal y federal.</li>
                    <li>Acceso a capacitaciones gratuitas por la Secretaría de Economía.</li>
                    <li>Identificar oportunidad de negocios para Los Empresarios.</li>
                    <li>Atraer nuevos clientes.</li>
                    <li>Contar con otros proveedores.</li>
                    <li>Promoción de negocios.</li>
                </ul>

                <h3 class="text-2xl font-bold text-gray-800 mb-4">¿Para qué me sirve?</h3>
                <div class="space-y-4 text-gray-600">
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Público en general:</h4>
                        <p>Suministra información oportuna y confiable sobre las características y ubicación de los establecimientos y actividades productivas de comercio, servicios, turismo e industria del ámbito rural en el país, sirviendo esta como referencia para la identificación de oportunidades comerciales y de negocios para cualquier individuo nacional y extranjero.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Empresas:</h4>
                        <p>Las empresas pueden identificar y promover nuevas oportunidades de negocio al contar con un sistema de información público, con información individual sobre las empresas, con cobertura nacional y de fácil acceso.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection