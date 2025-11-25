@extends('layouts.app')

@section('content')
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('{{ asset('img/hero.png') }}') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-7">
            <div class="container text-center">

                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Hubungi Kami
                </h1>

                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    Punya pertanyaan, saran, atau ingin berkunjung ke Museum Bharugano Wuna? Silakan hubungi kami melalui
                    form di bawah ini.
                </p>

            </div>
        </div>
    </header>

    <section class="py-5 section">
        <div class="container">
            <div class="row justify-content-center g-4">
                <!-- Informasi Kontak -->
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="mb-4" style="font-weight:600;">Informasi Kontak</h3>
                            <div class="mb-3 d-flex align-items-start">
                                <span class="me-3 text-primary">
                                    <i class="ti ti-map-pin fs-2"></i>
                                </span>
                                <div>
                                    <strong>Alamat</strong>
                                    <p class="mb-0 text-muted">
                                        Museum Bharugano Wuna, Kabupaten Muna, Sulawesi Tenggara
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <span class="me-3 text-primary">
                                    <i class="ti ti-phone fs-2"></i>
                                </span>
                                <div>
                                    <strong>Telepon</strong>
                                    <p class="mb-0 text-muted">+62 812-xxxx-xxxx</p>
                                </div>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <span class="me-3 text-primary">
                                    <i class="ti ti-mail fs-2"></i>
                                </span>
                                <div>
                                    <strong>Email</strong>
                                    <p class="mb-0 text-muted">info@museumwuna.id</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Form Kontak -->
                <div class="col-lg-7">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h3 class="mb-4" style="font-weight:600;">Kirim Pesan</h3>

                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama"
                                        placeholder="Masukkan nama Anda" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Masukkan email Anda" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subjek</label>
                                    <input type="text" class="form-control" name="subjek" placeholder="Judul pesan"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pesan</label>
                                    <textarea class="form-control" name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                                </div>

                                <button type="submit" class="btn btn-warning px-4">
                                    Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
