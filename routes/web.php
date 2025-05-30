<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\prestasiController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\artikelController;


// login 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('/prestasi', prestasiController::class);
Route::resource('/kegiatan', kegiatanController::class);
Route::resource('/artikel', artikelController::class);
// Route::POST('/prestasi', [prestasiController::class,  'store'])->name('prestasi.store');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});


Route::get('/', function () {
    return view('pages/home');
});

Route::get('/profilePage', function () {
    return view('pages/profile');
});

Route::get('/artikelPage', function () {
    return view('pages/artikel');
});
Route::get('/detailArtikelPage', function () {
    return view('pages/detailArtikel');
});


Route::get('/kegiatanPage', function () {
    return view('pages/kegiatan');
});

Route::get('/prestasiPage', function () {
    return view('pages/prestasi');
});

Route::get('/donaturPage', function () {
    return view('pages/donatur');
});

Route::get('/pendaftaranPage', function () {
    return view('pages/Pendaftaran');
});