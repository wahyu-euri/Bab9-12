<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\ItemController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    return view('belajar');
});

Route::get('/', [PageController::class, 'index']);
Route::get('/mahasiswa', [PageController::class, 'tampil']);
Route::get('/coba-facade', [PageController::class, 'cobafacade']);
Route::get('/coba-class', [PageController::class, 'cobaclass']);


Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])
    ->name('mahasiswa');
Route::get('/dosen', [MahasiswaController::class, 'dosen'])
    ->name('dosen');

Route::get('/gallery', [MahasiswaController::class, 'gallery'])
    ->name('gallery');

Route::get(
    'informasi/{fakultas}/{jurusan}',
    [MahasiswaController::class, 'info']
)->name('info');

Route::get('/produk', App\Http\Controllers\ProdukController::class);

Route::get('/item', App\Http\Controllers\ItemController::class);

