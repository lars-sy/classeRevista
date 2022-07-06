<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevistasController;

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

Route::get('/revistas', [RevistasController::class, 'index'])->name('revistas.index');
Route::get('/revistas/create', [RevistasController::class, 'create'])->name('revistas.create');
Route::post('/revistas', [RevistasController::class, 'store'])->name('revistas.store');
Route::get('/revistas/{id}', [RevistasController::class, 'show'])->name('revistas.show');
Route::delete('/revistas/{id}', [RevistasController::class, 'destroy'])->name('revistas.destroy');
