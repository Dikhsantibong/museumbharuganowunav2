<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Berita;

class KegiatanController extends Controller
{
    public function berita()
    {
        $berita = Berita::all();
        return view('pages.kegiatan.berita', compact('berita'));

    }
}
