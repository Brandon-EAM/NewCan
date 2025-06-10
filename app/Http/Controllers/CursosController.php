<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class CursosController extends Controller
{
    public function index()
    {
        // Leer el archivo JSON desde storage/app/courses.json
        $jsonPath = storage_path('app/public/courses.json');
        $courses = Cache::remember('courses', now()->addHours(24), function () use ($jsonPath) {
            return json_decode(File::get($jsonPath), true)['courses'];
        });

        // Pasar los cursos a la vista
        return view('courses', compact('courses'));
    }
}

