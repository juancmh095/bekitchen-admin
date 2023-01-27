<?php

use App\Http\Controllers\CombosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/sucursales', [SucursalController::class, 'apiSucursales']);
Route::get('/productos/{negocio}', [ProductosController::class, 'apiProductos']);
Route::get('/combos', [CombosController::class, 'combosApi']);
Route::get('/combos/{negocio}', [CombosController::class, 'combosApiId']);
Route::post('/usuarios', [UsuariosController::class, 'apiUsuarios']);

Route::post('/login', [UsuariosController::class, 'apiLogin']);