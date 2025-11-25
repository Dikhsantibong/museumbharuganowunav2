<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Koleksi;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

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

        return view('pages.koleksi.index', compact('koleksi'));
    }

    public function show($id)
    {
        $koleksi = Koleksi::with('foto')->findOrFail($id);
        return view('pages.koleksi.detail', compact('koleksi'));
    }

}
