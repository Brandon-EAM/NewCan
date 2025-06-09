<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/afiliacion', function () {
    return view('afiliacion');
});

Route::get('/nosotros', function () {
    return view('about');
});

Route::get('/cursos', function () {
    return view('courses');
});
Route::view('/curso/gestion-calidad', 'curso_detalle');

Route::view('/servicios', 'servicios');
Route::view('/servicios/bolsa', 'bolsa');
Route::view('/servicios/siem-registro', 'siem_registro');
Route::view('/servicios/renta-salas', 'renta');

Route::get('/contacto', function () {
    return view('contact');
});
