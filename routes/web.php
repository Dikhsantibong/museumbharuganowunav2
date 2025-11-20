<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\QuisController;

Route::get('/', function () {
    return view('beranda');
});


Route::get('/tentang-kami', [AboutController::class, 'tentangKami']);
Route::get('/berita', [KegiatanController::class, 'berita']);
Route::get('/blog', [BeritaController::class, 'blog']);
Route::get('/kontak', [ContactController::class, 'contact']);
Route::get('/koleksi', [KoleksiController::class, 'koleksi']);
Route::get('/koleksi/{id}', [App\Http\Controllers\KoleksiController::class, 'detailKoleksi'])->name('koleksi.detail');
Route::get('/galery', [GaleryController::class, 'galery']);
Route::get('/kuis-museum', [QuisController::class, 'kuis']);

Route::get('/virtual-tour', function () {
    return view('pages.virtualtour.virtual-tour');
});