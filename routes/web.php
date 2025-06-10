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

Route::view('/servicios', 'servicios');
Route::view('/servicios/bolsa', 'bolsa');
Route::view('/servicios/siem-registro', 'siem_registro');
Route::view('/servicios/renta-salas', 'renta');

Route::get('/contacto', function () {
    return view('contact');
});

use Illuminate\Support\Facades\File;

Route::get('/cursos/{id}', function ($id) {
    // Leer el archivo JSON
    $jsonPath = storage_path('\app\public\courses.json');
    $courses = json_decode(File::get($jsonPath), true)['courses'];
    
    // Buscar el curso por ID
    $course = collect($courses)->firstWhere('id', $id);
    // Verificar si el curso existe
    if (!$course) {
        abort(404, 'Curso no encontrado');
    }
    
    // Pasar los datos del curso a la vista
    return view('course', compact('course'));
})->name('course.show');

use App\Http\Controllers\CursosController;

Route::get('/cursos', [CursosController::class, 'index'])->name('courses.index');

Route::get('/cursos/{id}', function ($id) {
    $jsonPath = storage_path('\app\public\courses.json');
    $courses = json_decode(File::get($jsonPath), true)['courses'];
    $course = collect($courses)->firstWhere('id', $id);
    if (!$course) {
        abort(404, 'Curso no encontrado');
    }
    return view('course', compact('course'));
})->name('course.show');