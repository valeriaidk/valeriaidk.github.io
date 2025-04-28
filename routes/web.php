<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio.home');
});

Route::get('/home', function () {
    return view('Inicio.home');
});


