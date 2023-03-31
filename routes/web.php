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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');

Route::get('/APEalimentacion', [App\Http\Controllers\HomeController::class, 'APEalimentacion'])->middleware('can:APEalimentacion')->name('APEalimentacion');

Route::get('/APEsena', [App\Http\Controllers\HomeController::class, 'APEsena'])->middleware('can:APEsena')->name('APEsena');

Route::get('/APEinterno', [App\Http\Controllers\HomeController::class, 'APEinterno'])->middleware('can:APEinterno')->name('APEinterno');

Route::get('/APEtransporte', [App\Http\Controllers\HomeController::class, 'APEtransporte'])->middleware('can:APEtransporte')->name('APEtransporte');

Route::get('/HISeventos', [App\Http\Controllers\HomeController::class, 'HISeventos'])->middleware('can:HISeventos')->name('HISeventos');
