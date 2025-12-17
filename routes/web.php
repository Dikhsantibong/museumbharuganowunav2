<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuisController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KegiatanController;

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
Route::get('/kontak', [ContactController::class, 'contact'])->name('kontak.index');
Route::post('/kontak/kirim', [ContactController::class, 'kirim'])->name('kontak.kirim');


Route::get('/quiz', [QuizController::class, 'start'])->name('quiz.start');
Route::post('/quiz/begin', [QuizController::class, 'begin'])->name('quiz.begin');
Route::get('/quiz/play/{attempt}', [QuizController::class, 'play'])->name('quiz.play');
Route::post('/quiz/answer', [QuizController::class, 'answer'])->name('quiz.answer');
Route::get('/quiz/result/{attempt}', [QuizController::class, 'result'])->name('quiz.result');

Route::get('/virtual-tour', function () {
    return view('pages.virtualtour.virtual-tour');
});
