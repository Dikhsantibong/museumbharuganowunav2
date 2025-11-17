<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function koleksi()
    {
        return view('pages.koleksi.koleksi');
    }
}
