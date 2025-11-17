<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function berita()
    {
        return view('pages.kegiatan.berita');
    }
}
