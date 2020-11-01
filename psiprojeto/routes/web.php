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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/a', function () {
    return view('a');
});
Route::get('/b', function () {
    return view('b');
});
Route::get('/c', function () {
    return view('c');
});
//Route::get('inicio','App\Http\Controllers\FormContreller@mostrarForm')->name('mostrar.form');

//Route::post('inicio','App\Http\Controllers\FormContreller@processarForm')->name('processar.form');