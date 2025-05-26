<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('admin/dashboard');
});


Route::get('/', function () {
    return view('pages/home');
});

Route::get('/profile', function () {
    return view('pages/profile');
});

Route::get('/artikel', function () {
    return view('pages/artikel');
});
Route::get('/detailArtikel', function () {
    return view('pages/detailArtikel');
});


Route::get('/kegiatan', function () {
    return view('pages/kegiatan');
});

Route::get('/prestasi', function () {
    return view('pages/prestasi');
});

Route::get('/donatur', function () {
    return view('pages/donatur');
});

Route::get('/pendaftaran', function () {
    return view('pages/Pendaftaran');
});