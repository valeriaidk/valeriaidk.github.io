<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio.home'); // Cambia esto si tu vista principal tiene otro nombre
})->name('home');

Route::get('/proyectos', function () {
    return view('proyectos'); // Asegúrate de crear "proyectos.blade.php"
})->name('proyectos');

Route::get('/experiencia', function () {
    return view('experiencia'); // Asegúrate de crear "experiencia.blade.php"
})->name('experiencia');

Route::get('/educacion', function () {
    return view('educacion'); // Asegúrate de crear "educacion.blade.php"
})->name('educacion');

Route::get('/habilidades', function () {
    return view('habilidades'); // Asegúrate de crear "habilidades.blade.php"
})->name('habilidades');

Route::get('/contacto', function () {
    return view('contacto'); // Asegúrate de crear "contacto.blade.php"
})->name('contacto');

