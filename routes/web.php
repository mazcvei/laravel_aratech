<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
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

Route::get('/', [MainController::class,'index']);

Route::get('/listar',[ItemController::class,'index'])->name('listar.items');
Route::get('/crear',[ItemController::class,'showFormCreate'])->name('mostrar.crear');
Route::POST('/store',[ItemController::class,'store'])->name('crear.item');
Route::get('/mostrar/{id}',[ItemController::class,'show'])->name('mostrar.item');
Route::get('/editar/{id}',[ItemController::class,'showFormEdit'])->name('mostrar.editar');
Route::get('/eliminar/{id}',[ItemController::class,'destroy'])->name('eliminar.item');
Route::post('/actualizar',[ItemController::class,'update'])->name('actualizar.item');


/*Route::get('/ruta1/{nombre}/{edad}', function ($nombre,$edad) {
    echo "Ruta 1, hola ".$nombre. " tu edad es : ".$edad;
});*/
/*
Route::get('/ruta1/{nombre}/{edad}', [TestController::class,'index']);
Route::get('/ruta2/nombre', [TestController::class,'indexruta2']);
*/
//Route::get('/ruta1/{nombre}/{edad}', 'TestController@index');

