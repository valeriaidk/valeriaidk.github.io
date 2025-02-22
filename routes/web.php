<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio.home'); // Cambia esto si tu vista principal tiene otro nombre
})->name('home');


