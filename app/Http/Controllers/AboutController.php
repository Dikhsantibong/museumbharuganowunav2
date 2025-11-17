<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function tentangKami()
    {
        return view('pages.about.tentang-kami');
    }

    public function visiMisi()
    {
        return view('pages.about.visi-misi');
    }
}
