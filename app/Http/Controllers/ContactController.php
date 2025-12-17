<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.kontak.contact');
    }

    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email',
            'subjek' => 'required|string|max:150',
            'pesan'  => 'required|string',
        ]);

        // Kirim email (opsional, bisa diganti simpan ke database)
        Mail::raw(
            "Nama: {$request->nama}\nEmail: {$request->email}\n\nPesan:\n{$request->pesan}",
            function ($message) use ($request) {
                $message->to('museumbharunowuna@gmail.com')
                        ->subject('[Kontak Website] ' . $request->subjek);
            }
        );

        // Redirect dengan pesan sukses
        return back()->with('success', 'Pesan berhasil dikirim. Terima kasih telah menghubungi kami.');
    }
}
