<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route Jabatan
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/form', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::put('/buku/{id}', [BukuController::class, 'update']);
Route::delete('/buku/{id}', [BukuController::class, 'destroy']);

//route karyawan
Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/peminjaman/form', [PeminjamanController::class, 'create']);
Route::post('/peminjaman/store', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update']);
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy']);