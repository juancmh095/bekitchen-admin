<?php

use App\Http\Controllers\CombosController;
use App\Http\Controllers\CuponesController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\PedidoController;
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

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
    ? ['error' => false,"text"=> __($status), "msg"=>'Correo Enviado']
    : ['error' => true,"text"=> __($status), "msg"=>'Correo No Enviado'];
})->middleware('guest');


Route::get('/sucursales', [SucursalController::class, 'apiSucursales']);
Route::get('/productos/{negocio}', [ProductosController::class, 'apiProductos']);
Route::get('/combos/{menu}', [CombosController::class, 'combosApi']);
Route::get('/combos', [CombosController::class, 'combosApiAll']);
Route::get('/combos/{negocio}', [CombosController::class, 'combosApiId']);
Route::post('/usuarios', [UsuariosController::class, 'apiUsuarios']);
Route::post('/pedidos', [PedidoController::class, 'apiPedidos']);
Route::get('/pedidos/{id}', [PedidoController::class, 'getPedidos']);
Route::get('/cupones/{id}', [CuponesController::class, 'getCupon']);
Route::get('/negocio/{id}', [NegocioController::class, 'negocioApi']);
Route::get('/cupones', [CuponesController::class, 'getCuponList']);

Route::post('/login', [UsuariosController::class, 'apiLogin']);
Route::get('/send/mail', [UsuariosController::class, 'sendMailApi']);