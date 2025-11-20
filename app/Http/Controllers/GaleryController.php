<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanFoto;

class GaleryController extends Controller
{
    public function galery()
    {
        $galeri = KegiatanFoto::all();
        return view('pages.galery.galery', compact('galeri'));
    }
}
