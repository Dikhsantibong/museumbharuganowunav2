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
        $koleksi = Koleksi::with('foto')
            ->when($request->search, function ($query, $search) {
                $query->where('nama_koleksi', 'like', "%{$search}%")
                    ->orWhere('jenis_koleksi', 'like', "%{$search}%");
            })
            ->orderByDesc('created_at')
            ->paginate(18)
            ->appends($request->query());

        return view('pages.koleksi.index', compact('koleksi'));
    }

    public function show($id)
    {
        $koleksi = Koleksi::with('foto')->findOrFail($id);
        return view('pages.koleksi.detail', compact('koleksi'));
    }
}
