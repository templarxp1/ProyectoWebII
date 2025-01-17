<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', [loginController::class, 'loginInicio'])->name('login');
Route::get('login', [loginController::class, 'loginInicio'])->name('login');
Route::post('login', [loginController::class, 'login'])->name('login');
Route::get('logout', [loginController::class, 'logout'])->name('logout');

//MIDLEWARE

Route::middleware('auth')->group(function (){

    Route::get('inicio', [InicioController::class, 'inicio'])->name('inicio');  
    Route::controller(ProductoController::class)->group(function () {
        Route::get('productos', 'index')->name('productos.index');
        Route::get('productos/creando',  'crear')->name('productos.crear');
        Route::post('productos', 'store')->name('productos.store');
        Route::get('productos/{id}',  'show')->name('productos.show');
        Route::delete('productos/{id}',  'destroy')->name('productos.destroy');
        Route::put('productos', 'update')->name('productos.edit');
        
    });
    Route::get('ventas', [VentasController::class, 'index'])->name('ventas');
    // Route::get('ventas/creando',  'crear')->name('ventas.crear');
    


    Route::controller(ClientesController::class)->group(function () {
        Route::get('cliente', 'index');
        Route::get('cliente/creando',  'crear');
    //Route::get('cliente/{datos}',  'verProducto');
});

});
// Route::get('productos', [ProductoController::class, 'index']);
// Route::get('productos/creando', [ProductoController::class, 'crear']);

// //paso de variables
// Route::get('productos/{datos}', [ProductoController::class, 'verProducto'] );


//clientes
Route::get('clientes', function () {
   return 'HOLA Clientes' ;
});

//rutas mas datos.


//paso de parametros con dos variables.
// Route::get('productos/{datos}/{cliente}', function($datos, $cliente){
//     return "producto $datos, $cliente";
// });
