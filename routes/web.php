<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/APEalimentacion', [App\Http\Controllers\HomeController::class, 'APEalimentacion'])->name('APEalimentacion');

Route::get('/APEsena', [App\Http\Controllers\HomeController::class, 'APEsena'])->name('APEsena');

Route::get('/APEinterno', [App\Http\Controllers\HomeController::class, 'APEinterno'])->name('APEinterno');

Route::get('/APEtransporte', [App\Http\Controllers\HomeController::class, 'APEtransporte'])->name('APEtransporte');

Route::get('/LIDretorant', [App\Http\Controllers\HomeController::class, 'LIDretorant'])->name('LIDretorant');

Route::get('/LIDrutas', [App\Http\Controllers\HomeController::class, 'LIDrutas'])->name('LIDrutas');

Route::get('/SCANrestorant', [App\Http\Controllers\HomeController::class, 'SCANrestorant'])->name('SCANrestorant');

Route::get('/SCANrutas', [App\Http\Controllers\HomeController::class, 'SCANrutas'])->name('SCANrutas');

Route::get('/HISeventos', [App\Http\Controllers\HomeController::class, 'HISeventos'])->name('HISeventos');

