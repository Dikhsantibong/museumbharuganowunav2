<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

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
}
