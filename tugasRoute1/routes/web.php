<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    return 'Nama Saya Sandy Maulana Fardio';
});

Route::get('/jurusan', function () {
    return 'Saya Siswa Jurusan RPL';
});

Route::get('/makanan', function () {
    return 'Makanan Favorit Saya Nasi Goreng';
});
