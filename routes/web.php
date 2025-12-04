<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

// =============================
//        HALAMAN UTAMA
// =============================
Route::get('/', function () {
    return view('home', ['name' => 'Jane Doe']);
});

// =============================
//        LOGIN & LOGOUT
// =============================

Route::get('/login', [AuthController::class, 'loginPage'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', function () {
    return "Berhasil Login! Ini dashboard.";
})->middleware('auth');



Route::resource('users', UserController::class)->middleware('auth');

// =============================
//        DASHBOARD & CRUD
// =============================
Route::middleware('auth')->group(function () {

   Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


    Route::resource('tanah', TanahController::class);
    Route::resource('bangunan', BangunanController::class);
    Route::resource('ruangan', RuanganController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('barang', BarangController::class);

});

// =============================
//        FALLBACK
// =============================
Route::fallback(function () {
    abort(404);
});
