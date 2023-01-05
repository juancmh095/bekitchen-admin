<?php

use App\Http\Controllers\MenusController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Models\Productos;
use App\Models\Sucursal;

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
    return view('registro.usuario',["success"=>0]);
});

Route::post('registro/usuario',[UsuariosController::class, 'create'])->name('registroNegocio');
/* NEGOCIO ADMINISTRACION  */
/* SUCURSALES */
Route::get('/sucursales/registro', [SucursalController::class, 'index']);
Route::post('/sucursales/registro', [SucursalController::class, 'create'])->name('registroSucursal');
Route::get('/sucursales', [SucursalController::class, 'store']);
/* NEGOCIO */
Route::get('/negocio/perfil', function () {
    return view('negocio.perfil');
});
/* PRODUCTOS */
Route::get('/productos', [ProductosController::class,'index']);

Route::get('/productos/registro', function () {
    return view('productos.registro');
});

Route::post('/productos/registro', [ProductosController::class,'create'])->name('registroProducto');
/* USUARIOS */
Route::get('/usuarios/registro', function () {
    return view('usuarios.registro');
});
Route::get('/usuarios', function () {
    return view('usuarios.listado');
});
/* CUPONES */
Route::get('/cupones/registro', function () {
    return view('cupones.registro');
});
/* MENUS */
Route::get('/menus', [MenusController::class, 'store']);
Route::get('/menus/registro', [MenusController::class,'index']);
Route::post('/menus/registro', [MenusController::class,'create'])->name('registroMenu');
/* COMBOS */
Route::get('/combos', function () {
    return view('combos.combos');
});
Route::get('/combos/registro', function () {
    return view('combos.registro');
});
/* CUPONES */
Route::get('/cuponera', function () {
    return view('cupones.registro');
});