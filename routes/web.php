<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [MainController::class,'index'])->name('home');

Route::get('/listar',[ItemController::class,'index'])->name('listar.items');
Route::get('/crear',[ItemController::class,'showFormCreate'])->name('mostrar.crear');
Route::POST('/store',[ItemController::class,'store'])->name('crear.item');
Route::get('/mostrar/{id}',[ItemController::class,'show'])->name('mostrar.item');
Route::get('/editar/{id}',[ItemController::class,'showFormEdit'])->name('mostrar.editar');
Route::get('/eliminar/{id}',[ItemController::class,'destroy'])->name('eliminar.item');
Route::post('/actualizar',[ItemController::class,'update'])->name('actualizar.item');

require __DIR__.'/auth.php';
