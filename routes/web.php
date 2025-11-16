<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang-kami', function () {
    return view('components.tentang-kami');
});

Route::get('/visi-misi', function () {
    return view('components.visi-misi');
});

Route::get('/berita', function () {
    return view('components.berita');
});

Route::get('/agenda', function () {
    return view('components.agenda');
});

Route::get('/contact', function () {
    return view('components.contact');
});

Route::get('/virtual-tour', function () {
    return view('fitur.virtual-tour');
});