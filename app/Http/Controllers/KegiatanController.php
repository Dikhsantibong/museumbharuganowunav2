<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class KegiatanController extends Controller
{
    public function berita()
    {
        $berita = Berita::with(['kategori', 'komentar'])->orderByDesc('tanggal_publikasi')->get();
        return view('pages.kegiatan.berita', compact('berita'));
    }
}
