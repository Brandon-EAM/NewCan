@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative">
    <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-gradient-to-b from-blue-900 to-blue-800 py-12 transform transition-all duration-1000 opacity-0 translate-y-4">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-6">Detalle del Curso</h1>
            <p class="text-xl text-gray-200 text-justify max-w-3xl mx-auto">
                Aquí encontrarás toda la información detallada sobre el curso seleccionado.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16">
        <!-- Título del Curso -->
        <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="mb-12 transform transition-all duration-1000 opacity-0 translate-y-4">
            <h2 class="text-5xl font-bold text-gray-800 text-center mb-4">Nombre del Curso: Gestión de Calidad ISO 9001</h2>
            <p class="text-xl text-gray-600 text-center">Un curso completo para dominar los estándares de calidad.</p>
        </div>

        <!-- Descripción del Curso y Imagen -->
        <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-lg shadow-lg p-8 mb-12 transform transition-all duration-1000 opacity-0 translate-y-4 grid md:grid-cols-5 gap-8 items-center">
            <div class="md:col-span-5">
                <img src="{{ asset('images/servicios/Test.jpg') }}" alt="Imagen del Curso" class="w-full md:w-1/2 float-right ml-8 mb-4 object-cover rounded-lg shadow-lg">
                <h3 class="text-3xl font-bold text-blue-900 mb-6">Descripción Detallada</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    Este curso está diseñado para proporcionar a los participantes un conocimiento profundo de los principios y requisitos de la norma ISO 9001. Aprenderás a implementar, mantener y mejorar un sistema de gestión de calidad (SGC) eficaz en cualquier tipo de organización, independientemente de su tamaño o sector.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    Cubriremos temas clave como la documentación del SGC, la gestión de riesgos, la mejora continua, las auditorías internas y la preparación para la certificación. A través de ejemplos prácticos y estudios de caso, desarrollarás las habilidades necesarias para asegurar que tu organización cumpla con los más altos estándares de calidad.
                </p>
                <ul class="list-disc list-inside text-lg text-gray-700 leading-relaxed space-y-2">
                    <li>Comprender los principios de la gestión de calidad.</li>
                    <li>Interpretar los requisitos de la norma ISO 9001.</li>
                    <li>Diseñar e implementar un Sistema de Gestión de Calidad.</li>
                    <li>Realizar auditorías internas de calidad.</li>
                    <li>Preparar la organización para la certificación ISO 9001.</li>
                </ul>
                <div class="clear-both"></div>
            </div>
        </div>


        <!-- Información Adicional y Botón de Compra -->
        <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="grid md:grid-cols-2 gap-8 transform transition-all duration-1000 opacity-0 translate-y-4">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-3xl font-bold text-red-700 mb-6">Detalles del Curso</h3>
                <ul class="space-y-4 text-lg text-gray-700">
                    <li class="flex items-center"><svg class="w-6 h-6 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"></path></svg>Duración: 40 horas</li>
                    <li class="flex items-center"><svg class="w-6 h-6 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path></svg>Modalidad: Presencial</li>
                    <li class="flex items-center"><svg class="w-6 h-6 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20"><path d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zM2 15.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"></path></svg>Instructor: Expertos Certificados</li>
                </ul>
            </div>
            <div class="bg-blue-900 rounded-lg shadow-lg p-8 flex flex-col justify-center items-center text-white">
                <h3 class="text-3xl font-bold mb-4">¡Inscríbete Ahora!</h3>
                <p class="text-4xl font-extrabold mb-6">$4,999 MXN</p>
                <button class="bg-white text-blue-900 px-8 py-4 rounded-full text-xl font-bold hover:bg-gray-200 transition-colors duration-300 shadow-lg">
                    Comprar Curso
                </button>
            </div>
        </div>
    </div>
</div>
@endsection