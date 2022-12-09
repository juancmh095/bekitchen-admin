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
});


/* registro de usuario nuevo */
Route::get('/registro/usuario', function () {
    return view('registro.usuario');
});

/* SUCURSALES ADMINISTRACION  */
Route::get('/sucursales/registro', function () {
    return view('sucursales.registro');
});
Route::get('/sucursales', function () {
    return view('sucursales.listado');
});