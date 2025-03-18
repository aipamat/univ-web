<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangKampusController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\KampusController;

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
    return view('index');
});

Route::get('/', [BerandaController::class, 'index']);


Route::get('/tentang-kampus', function () {
    return view('tentang-kampus');
});

Route::get('/tentang-kampus', [TentangKampusController::class, 'index']);

Route::get('/fakultas', function () {
    return view('fakultas/fakultas');
});

Route::get('/fakultas', [FakultasController::class, 'index']);

Route::get('/fakultas/{id}', [FakultasController::class, 'show'])->name('fakultas.detail');

Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/fasilitas', [KampusController::class, 'index']);
Route::get('/fasilitas/{id}', [KampusController::class, 'show'])->name('fasilitas.detail');

