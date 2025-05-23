<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('admin/dashboard');
});


Route::get('/', function () {
    return view('user/home');
});

Route::get('/profile', function () {
    return view('user/profile');
});

Route::get('/artikel', function () {
    return view('user/artikel');
});
Route::get('/detailArtikel', function () {
    return view('user/detailArtikel');
});


Route::get('/kegiatan', function () {
    return view('user/kegiatan');
});

Route::get('/prestasi', function () {
    return view('user/prestasi');
});

Route::get('/donatur', function () {
    return view('user/donatur');
});

Route::get('/pendaftaran', function () {
    return view('user/Pendaftaran');
});