@extends('layouts.app')

@section('content')
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('{{ asset('img/hero.png') }}') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-7">
            <div class="container text-center">

                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Quiz Interaktif Museum
                </h1>

                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    Uji pengetahuanmu tentang sejarah, budaya, dan koleksi Museum Bharugano Wuna melalui kuis seru dan
                    edukatif.
                </p>
            </div>
        </div>
    </header>
@endsection
