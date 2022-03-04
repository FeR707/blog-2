<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/introduccion', function () {
    return view('Unidad1.introduccion');
})->name('introduccion');

Route::get('/componentes', function () {
    return view('Unidad1.componentes');
})->name('componentes');

Route::get('/estrategias', function () {
    return view('Unidad2.estrategias');
})->name('estrategias');

Route::get('/modelos', function () {
    return view('Unidad2.modelos');
})->name('modelos');

Route::get('/mvc', function () {
    return view('Unidad2.mvc');
})->name('mvc');

Route::get('/sockets', function () {
    return view('Unidad2.sockets');
})->name('sockets');