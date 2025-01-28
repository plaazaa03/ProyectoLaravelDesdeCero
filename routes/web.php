<?php

use App\Http\Controllers\CochesController;
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

// Ruta para la vista de coches
Route::get('/coches', [CochesController::class, 'index'])->name('index');

// Ruta para crear coches
Route::get('/crearCoche', [CochesController::class,'create'])->name('crearCoche');

// Ruta para guardar coches
Route::post('/guardarCoche', [CochesController::class,'store'])->name('guardarCoche');

// Ruta para editar coches
Route::get('/editarCoche/{id}', [CochesController::class,'edit'])->name('editarCoche');

// Ruta para actualizar coches
Route::put('/actualizarCoche/{id}', [CochesController::class,'update'])->name('actualizarCoche');

// Ruta para eliminar coches
Route::delete('/eliminarCoche/{id}', [CochesController::class,'destroy'])->name('eliminarCoche');

