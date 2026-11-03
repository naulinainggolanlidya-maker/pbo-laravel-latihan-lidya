<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');

Route::get('/', function () {
    return view('welcome');
});

route::get('/dashboard', function () {
    return "Hallo";
});