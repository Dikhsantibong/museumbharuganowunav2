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
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::post('/berita/{id}/komentar', [BeritaController::class, 'storeKomentar'])->name('komentar.store');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/{slug}', [KegiatanController::class, 'show'])->name('kegiatan.show');

Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');
Route::get('/koleksi/{id}', [KoleksiController::class, 'show'])->name('koleksi.show');
Route::get('/kontak', [ContactController::class, 'contact']);
Route::get('/galeri', [GaleryController::class, 'galery']);
Route::get('/kuis-museum', [QuisController::class, 'kuis']);

Route::get('/virtual-tour', function () {
    return view('pages.virtualtour.virtual-tour');
});
