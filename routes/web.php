<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
})->name('welcome');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/perfil/intereses', function () {
    return view('intereses');
})->name('intereses');

Route::get('/perfil/habilidades', function () {
    return view('habilidades');
})->name('habilidades');

Route::get('/perfil/metas', function () {
    return view('metas');
})->name('metas');

