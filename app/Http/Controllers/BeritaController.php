<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\KomentarBerita;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $berita = Berita::with('komentar')
            ->where('status', 'publish')
            ->when($request->search, function ($query) use ($request) {
                $query->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('konten', 'like', '%' . $request->search . '%');
            })
            ->latest()
            ->get();

        return view('pages.berita.index', compact('berita'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        $berita->load('komentar');


        return view('pages.berita.detail', compact('berita'));
    }

    public function storeKomentar(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'nullable|email|max:150',
            'komentar' => 'required|string'
        ]);

        $berita = Berita::findOrFail($id);

        KomentarBerita::create([
            'id_berita' => $id,
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar,
        ]);

        return redirect()->to(route('berita.show', $berita->slug) . '#komentar')
            ->with('success', 'Komentar berhasil dikirim.');

    }
}
