<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/stock', function () {
    return view('stock');
})->name('stock');

// NUEVA: Ruta para la administración y edición de autopartes
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

// NUEVA: Ruta para agregar una nueva parte
Route::get('/add-part', function () {
    return view('add-part');
})->name('add-part');
