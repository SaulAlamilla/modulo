<?php

use App\Http\Controllers\EstudioController;
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
    return view('welcome');
});
Route::get('estudio/registrar', [EstudioController::class, 'create'])->name('estudio.create');
Route::post('tarea/guardar', [EstudioController::class, 'store'])->name('estudio.store');
Route::get('estudio/listar', [EstudioController::class, 'index'])->name('estudio.index');

//AQUI INICIA EL SIDEBAR
Route::get('estudio/conceptos', [EstudioController::class, 'show'])->name('estudio.concepts');
Route::get('estudio/encuestas', [EstudioController::class, 'polls'])->name('estudio.polls');
Route::get('estudio/datosestudio', [EstudioController::class, 'data'])->name('estudio.data');
Route::get('estudio/resultados', [EstudioController::class, 'results'])->name('estudio.results');
Route::get('estudio/conclusion', [EstudioController::class, 'conclusion'])->name('estudio.conclusion');
Route::get('estudio/imprimir', [EstudioController::class, 'print'])->name('estudio.print');

