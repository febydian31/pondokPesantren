<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\prestasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KegiatanpageController;
use App\Http\Controllers\PrestasipageController;
use App\Http\Controllers\ArtikelpageController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\HomepageController;


// login 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('/prestasi', PrestasiController::class);
Route::resource('/kegiatan', KegiatanController::class);
Route::resource('/artikel', ArtikelController::class);
Route::resource('/donasi', DonasiController::class);
Route::resource('/pendaftaran', PendaftaranController::class);
Route::resource('/kegiatanPage', KegiatanpageController::class);
Route::resource('/prestasiPage', PrestasipageController::class);
Route::resource('/artikelPage', ArtikelpageController::class);
Route::resource('/', HomepageController::class);

// Route::POST('/prestasi', [prestasiController::class,  'store'])->name('prestasi.store');

Route::get('/dashboard', function () {
    return view('pages/backend/dashboard');
});

// Route::get('/', function () {
//     return view('pages/home');
// });

Route::get('/profilePage', function () {
    return view('pages/profile');
});

Route::get('/detailArtikelPage', function () {
    return view('pages/detailArtikel');
});

Route::get('/donaturPage', function () {
    return view('pages/donatur');
});

Route::get('/pendaftaranPage', function () {
    return view('pages/Pendaftaran');
});