<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $kegiatan = Kegiatan::with('fotos')
            ->where('status', 'Publish')
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                        ->orWhere('deskripsi', 'like', "%{$search}%");
                });
            })
            ->orderByDesc('tanggal_mulai')
            ->paginate(10)
            ->appends($request->query());

        return view('pages.kegiatan.index', compact('kegiatan'));
    }

    public function show($slug)
    {
        $koleksi = Kegiatan::where('slug', $slug)
            ->where('status', 'Publish')
            ->firstOrFail();

        return view('pages.kegiatan.detail', compact('koleksi'));
    }
}
