<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TugasController;

// Halaman daftar tugas
Route::get('/tugas', [TugasController::class, 'index'])
    ->name('tugas.index');

// Halaman detail tugas
Route::get('/tugas/{id}', [TugasController::class, 'show'])
    ->name('tugas.show');

// Halaman daftar buku
Route::get('/buku', [BukuController::class, 'index'])
    ->name('buku.index');

// Halaman detail buku
Route::get('/buku/{id}', [BukuController::class, 'show'])
    ->name('buku.show');

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman dashboard
Route::get('/dashboard', function () {
    return 'Hallo';
});
