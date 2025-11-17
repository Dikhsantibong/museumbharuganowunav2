<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleryController;

Route::get('/', function () {
    return view('beranda');
});


Route::get('/tentang-kami', [AboutController::class, 'tentangKami']);
Route::get('/berita', [KegiatanController::class, 'berita']);
Route::get('/kontak', [ContactController::class, 'contact']);
Route::get('/koleksi', [KoleksiController::class, 'koleksi']);
Route::get('/galery', [GaleryController::class, 'galery']);

Route::get('/virtual-tour', function () {
    return view('pages.virtualtour.virtual-tour');
});