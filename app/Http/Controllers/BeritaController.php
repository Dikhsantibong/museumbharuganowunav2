<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\KomentarBerita;

class BeritaController extends Controller
{
    public function blog()
    {
        $berita = Berita::with('komentar')
            ->where('status', 'publish')
            ->latest()
            ->get();

        return view('pages.blog.blog', compact('berita'));
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        $berita->load('komentar');

        $beritaTerbaru = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        $kegiatanTerakhir = Kegiatan::orderBy('created_at', 'desc')->limit(5)->get();

        return view('pages.blog.detail', compact('berita', 'beritaTerbaru', 'kegiatanTerakhir'));
    }

    public function storeKomentar(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'nullable|email|max:150',
            'komentar' => 'required|string'
        ]);

        KomentarBerita::create([
            'id_berita' => $id,
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim.');
    }
}
