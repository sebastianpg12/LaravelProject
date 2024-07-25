<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('cursos', function () {
    return 'bienvenido a la pagina cursos';
});


Route::get('cursos/{curso}', function ($curso) {
    return "bienvenido al curso:  $curso";
});