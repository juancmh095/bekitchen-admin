<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CombosController;
use App\Http\Controllers\CuponesController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Models\Productos;
use App\Models\Sucursal;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;



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
    return view('auth.login');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});

/* registro de usuario nuevo */
Route::get('/registro/usuario', function () {
    return view('registro.usuario',["success"=>0]);
});

Route::post('registro/usuario',[UsuariosController::class, 'create'])->name('registroNegocio');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    /* NEGOCIO ADMINISTRACION  */
    /* SUCURSALES */
    Route::get('/home', function () {
        return view('index');
    })->name('home');
    Route::get('/sucursales/registro', [SucursalController::class, 'index']);
    Route::post('/sucursales/registro', [SucursalController::class, 'create'])->name('registroSucursal');
    Route::get('/sucursales', [SucursalController::class, 'store']);
    /* NEGOCIO */
    Route::get('/negocio/perfil', function () {
        return view('negocio.perfil');
    });
    /* PRODUCTOS */
    Route::get('/productos', [ProductosController::class,'index']);
    
    Route::get('/productos/registro', [ProductosController::class,'store']);
    
    Route::post('/productos/registro', [ProductosController::class,'create'])->name('registroProducto');

    Route::get('/producto', [ProductosController::class,'edit'])->name('/producto');

    Route::post('/producto/update', [ProductosController::class,'update'])->name('editarProducto');

    Route::get('/categorias', [CategoriaController::class,'index']);

    Route::post('/categorias', [CategoriaController::class,'create'])->name('registroCategoria');

    Route::get('/categorias/delete', [CategoriaController::class,'destroy'])->name('deleteCategoria');
    /* CUPONES */
    Route::get('/cupones/registro', function () {
        return view('cupones.registro');
    });
    /* MENUS */
    Route::get('/menus', [MenusController::class, 'store']);
    Route::get('/menus/registro', [MenusController::class,'index']);
    Route::post('/menus/registro', [MenusController::class,'create'])->name('registroMenu');
    /* COMBOS */
    Route::get('/combos', [CombosController::class,'store']);
    Route::get('/combos/registro', [CombosController::class,'index']);
    Route::post('/combos/registro/created', [CombosController::class,'create'])->name('registroCombo');
    /* CUPONES */
    Route::get('/cuponera', [CuponesController::class, 'index']);
    Route::post('/cuponera', [CuponesController::class, 'create'])->name('registroCupon');
    /* USUARIOS */
    Route::get('/usuarios/registro', [UsuariosController::class, 'store']);
    Route::post('/usuarios/registro', [UsuariosController::class, 'created'])->name('registrarUsuario');
    Route::get('/usuarios', [UsuariosController::class, 'index']);


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
