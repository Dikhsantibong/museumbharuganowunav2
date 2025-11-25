<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;
use App\Models\Berita;

class KoleksiController extends Controller
{
    public function index(Request $request)
    {
        $query = Koleksi::with('foto');

        // Jika ada request search
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama_koleksi', 'like', "%{$search}%")
                    ->orWhere('jenis_koleksi', 'like', "%{$search}%");
            });
        }

        $koleksi = $query->get();
        $berita_populer = Berita::withCount('komentar')->orderByDesc('komentar_count')->take(4)->get();
        return view('pages.koleksi.index', compact('koleksi', 'berita_populer'));
    }

    public function show($id)
    {
        $koleksi = Koleksi::with('foto')->findOrFail($id);
        return view('pages.koleksi.detail', compact('koleksi'));
    }

}
