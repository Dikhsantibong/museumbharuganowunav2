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
        <div class="container d-flex justify-content-center">
            <div class="col-6">
                <form action="{{ route('quiz.answer') }}" method="POST">
                    @csrf
                    <input type="hidden" name="attempt_id" value="{{ $attemptId }}">
                    <input type="hidden" name="time" id="time">

                    {{-- <h4>{{ $question->question }}</h4> --}}
                    <div class="alert alert-yellow rounded-3 d-flex justify-content-between" role="alert">

                        <h4 class="mb-0">
                            {{ $question->question }}
                        </h4>
                        <div class="" id="timer">15</div>
                    </div>

                    @foreach (['A', 'B', 'C', 'D'] as $opt)
                        <label class="mb-2">
                            <input type="radio" name="answer" value="{{ $opt }}" required class="form-input">
                            {{ $question['option_' . strtolower($opt)] }}
                        </label><br>
                    @endforeach

                    <div class="text-center">
                        <button class="btn btn-success mt-2">Jawab</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <script>
        let time = 15;
        setInterval(() => {
            time--;
            document.getElementById('timer').innerText = time;
            document.getElementById('time').value = time;
            if (time <= 0) document.forms[0].submit();
        }, 1000);
    </script>
@endsection
