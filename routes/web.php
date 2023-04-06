<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

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

// Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);

Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
Route::get('/detail_mahasiswa/daftar_kekayaan', [MahasiswaController::class, 'daftar_kekayaan']);

// Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');

Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/friends', [AdminController::class, 'show_friends']);
Route::get('/admin/games', [AdminController::class, 'show_games']);
Route::get('/admin/playlist', [AdminController::class, 'show_playlist']);
Route::get('/admin/movies', [AdminController::class, 'show_movies']);
Route::get('/admin/drakor', [AdminController::class, 'show_drakor']);