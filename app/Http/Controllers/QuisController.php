<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuisController extends Controller
{
    public function kuis()
    {
        return view('pages.quis.kuis');
    }
}
