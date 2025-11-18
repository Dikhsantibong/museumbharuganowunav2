<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;

class KoleksiController extends Controller
{
    public function koleksi()
    {
        $koleksi = Koleksi::all();
        return view('pages.koleksi.koleksi', compact('koleksi'));
    }
}
