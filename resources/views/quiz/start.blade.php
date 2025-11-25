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
    <section class="section py-5">
        <div class="container text-center">
            <form action="{{ route('quiz.begin') }}" class="d-flex justify-content-center" method="POST">
                @csrf
                <div class="col-5 d-flex">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                    <button class="btn btn-warning ms-2">Mulai Quiz</button>
                </div>
            </form>
            <div class="d-flex justify-content-center">
                <div class="col-5 mt-5">
                    <h3 class="mb-2">Leaderboard</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Score</th>
                        </tr>
                        @foreach ($leaderboard as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->score }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
