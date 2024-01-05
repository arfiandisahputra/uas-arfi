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

Route::get('/kos', [App\Http\Controllers\KosController::class, 'index']);
Route::get('/kos/create', [App\Http\Controllers\KosController::class, 'create']);
Route::post('/kos', [App\Http\Controllers\KosController::class, 'store']);
Route::get('/kos/edit/{id}', [App\Http\Controllers\KosController::class, 'edit']);
Route::patch('/kos/{id}', [App\Http\Controllers\KosController::class, 'update']);
Route::delete('/kos/{id}', [App\Http\Controllers\KosController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\PelanggaController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelanggaController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelanggaController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelanggaController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelanggaController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelanggaController::class, 'destroy']);