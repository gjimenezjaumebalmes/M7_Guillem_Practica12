<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
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

//// Rutes del administrador
///
///

Route::group(['middleware' => ['admin']], function (){
    Route::get('clientes',[ControladorAdmin::class, 'clientes']) -> name('clientes');
});

Route::group(['middleware' => ['admin']], function (){
    Route::get('facturacion',[ControladorAdmin::class, 'facturacion']) -> name('facturacion');
});

Route::group(['middleware' => ['admin']], function (){
    Route::get('contabilidad',[ControladorAdmin::class, 'contabilidad']) -> name('contabilidad');
});
