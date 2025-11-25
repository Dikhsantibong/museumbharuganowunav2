@extends('layouts.app')

@section('content')
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('/img/hero.png') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-9">
            <div class="container text-center">

                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Koleksi Museum
                </h1>

                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    Jelajahi berbagai koleksi bersejarah Museum Bharugano Wuna yang memiliki nilai sejarah penting bagi
                    masyarakat.
                </p>

                <!-- Search Bar -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <form class="row g-3 justify-content-center" method="GET" action="{{ route('koleksi.index') }}">
                            <div class="col-9">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari koleksi..." class="form-control form-control-solid">
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-yellow w-100 fw-bold">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <main class="main">
        <section class="section py-5">
            <div class="container">
                <div class="row">
                    @if (request('search'))
                        <style>
                            .search-result {
                                display: inline-block;
                                background: #fff;
                            }
                        </style>
                        <div class="mb-4">
                            <div class="search-result border rounded-3 px-3 py-2 text-muted">
                                Hasil Pencarian : {{ request('search') }}
                                <a href="/koleksi" class="ms-3 align-items-center text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon m-1">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M18 6l-12 12" />
                                        <path d="M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    @endif
                    <div class="col-lg-8">

                        @php
                            $columns = 3;
                            $total = count($koleksi);
                            $rows = ceil($total / $columns);
                        @endphp

                        <div class="row g-2 justify-content-center">

                            @for ($col = 0; $col < $columns; $col++)
                                <div class="col-lg-4 col-md-4">

                                    @for ($row = 0; $row < $rows; $row++)
                                        @php
                                            $index = $col * $rows + $row;
                                            if ($index >= $total) {
                                                break;
                                            }
                                            $data = $koleksi[$index];
                                        @endphp
                                        <div class="card mb-2">
                                            <span class="ribbon bg-yellow-lt">{{ $data->jenis_koleksi }}</span>
                                            <a href="/koleksi/{{ $data->id_koleksi }}" class="d-block"><img
                                                    src="{{ $data->foto->first() ? asset('storage/' . $data->foto->first()->foto) : asset('img/image.png') }}"
                                                    class="card-img-top border-bottom rounded-top-3"></a>
                                            <a href="/koleksi/{{ $data->id_koleksi }}" class="card-body p-2 px-3">
                                                <div class="fs-4">{{ $data->nama_koleksi }}</div>
                                            </a>
                                        </div>
                                    @endfor
                                </div>
                            @endfor
                        </div>
                    </div>
                    @include('components.side-content')
                </div>
            </div>
        </section>

    </main>
@endsection
