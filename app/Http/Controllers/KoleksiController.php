<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;
use App\Models\Berita;

class KoleksiController extends Controller
{
    public function koleksi()
    {
        $koleksi = Koleksi::all();
        $berita_populer = Berita::withCount('komentar')->orderByDesc('komentar_count')->take(4)->get();
        return view('pages.koleksi.koleksi', compact('koleksi', 'berita_populer'));
    }

    public function detailKoleksi($id)
    {
        $koleksi = Koleksi::with('foto')->findOrFail($id);
        return view('pages.koleksi.detail', compact('koleksi'));
    }
}
