@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="{ atTop: true }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)" class="relative font-sans">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 py-8 md:py-12 overflow-hidden">
        <div class="absolute inset-0 bg-[url('/images/patterns/wave.svg')] opacity-10 bg-cover bg-center"></div>
        <div class="container mx-auto px-0 text-center relative z-10">
            <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="transform transition-all duration-1000 opacity-0 translate-y-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 tracking-tight">{{ $course['title'] }}</h1>
                <p class="text-lg md:text-xl text-gray-100 max-w-2xl mx-auto leading-relaxed">
                    {{ $course['subtitle'] }}
                </p>
                <div class="mt-8">
                    <a href="{{ $course['redirect_url'] }}" 
                       class="inline-block px-8 py-3 bg-red-700 text-white font-semibold rounded-full hover:bg-red-800 transition duration-300 transform hover:scale-105 shadow-lg">
                        ¡Inscríbete Ahora!
                    </a>
                </div>
            </div>
        </section>

        <!-- Course Details Section -->
        <section class="container mx-auto px-4 py-4 md:py-10">
            <div x-intersect="$el.classList.add('opacity-100', 'translate-y-0')" class="bg-white rounded-2xl shadow-xl p-8 md:p-12 transform transition-all duration-1000 opacity-0 translate-y-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <!-- Course Image -->
                    <div class="relative">
                        <img src="{{ asset($course['image']) }}" alt="Imagen del Curso" class="w-full h-64 md:h-96 object-cover rounded-xl shadow-md transform hover:scale-105 transition duration-500">
                        @if ($course['limited_spots'])
                        <div class="absolute -bottom-4 -right-4 bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
                            <span class="text-sm font-semibold">Cupo Limitado</span>
                        </div>
                        @endif
                    </div>
                    <!-- Course Description -->
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-6">Descripción del curso</h2>
                        <p class="text-lg text-gray-700 leading-relaxed mb-4">
                            {{ $course['description'] }}
                        </p>
                        <ul class="space-y-4 text-lg text-gray-700">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span><strong>Fechas:</strong> {{ $course['dates'] }}</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span><strong>Horario:</strong> {{ $course['schedule'] }}</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                                <span><strong>Modalidad:</strong> {{ $course['mode'] }}</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ $course['redirect_url'] }}" 
                               class="inline-block px-8 py-3 bg-blue-700 text-white font-semibold rounded-full hover:bg-blue-800 transition duration-300 transform hover:scale-105">
                                Reserva tu Lugar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection