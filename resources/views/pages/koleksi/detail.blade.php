@extends('layouts.app')

@section('content')
<style>
.koleksi-main-img {
    width: 100%;
    max-width: 420px;
    height: 260px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 0 12px #0001;
    transition: transform .35s cubic-bezier(.18,.76,.43,1.3);
    cursor: zoom-in;
}
.koleksi-main-img:hover {
    transform: scale(1.23);
    z-index: 2;
}
.koleksi-thumb-img {
    width: 78px;
    height: 52px;
    object-fit: cover;
    margin-right:6px;
    border-radius: 5px;
    box-shadow: 0 1px 4px #0001;
    transition: box-shadow .18s;
}
.koleksi-thumb-img:hover {
    box-shadow: 0 2px 12px #bda12099;
}
</style>
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="mb-3">
            <a href="{{ url('koleksi') }}" class="custom-link">&larr; Kembali ke Daftar Koleksi</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Gambar utama dengan ukuran seragam dan zoom -->
                @php $fotoUtama = optional($koleksi->foto->first())->foto; @endphp
                @if($fotoUtama)
                    <img src="{{ asset('storage/' . $fotoUtama) }}" class="koleksi-main-img mb-3" alt="{{ $koleksi->nama_koleksi }}">
                @else
                    <img src="https://via.placeholder.com/420x260?text=No+Image" class="koleksi-main-img mb-3" alt="No Image">
                @endif
                <!-- Gallery foto lain (jika ada > 1) -->
                @if($koleksi->foto->count() > 1)
                    <div class="d-flex flex-row flex-wrap gap-2">
                        @foreach($koleksi->foto->slice(1) as $f)
                            <img src="{{ asset('storage/' . $f->foto) }}" class="koleksi-thumb-img" alt="Foto lain {{ $koleksi->nama_koleksi }}">
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="text-box">
                    <h2 style="font-family: 'Cinzel', serif;">{{ $koleksi->nama_koleksi }}</h2>
                    <table class="table table-borderless table-sm my-2" style="background:transparent;">
                        <tr><td><b>Tahun Pembuatan</b></td><td>:</td><td>{{ $koleksi->tahun_pembuatan }}</td></tr>
                        <tr><td><b>Jenis Koleksi</b></td><td>:</td><td>{{ $koleksi->jenis_koleksi }}</td></tr>
                        <tr><td><b>Asal Koleksi</b></td><td>:</td><td>{{ $koleksi->tempat_perolehan }}</td></tr>
                        <tr><td><b>Tanggal Masuk</b></td><td>:</td><td>{{ $koleksi->tanggal_masuk }}</td></tr>
                        <tr><td><b>Cara Perolehan</b></td><td>:</td><td>{{ $koleksi->cara_perolehan }}</td></tr>
                    </table>
                    <div class="mt-3">
                        <h5>Deskripsi</h5>
                        <p style="text-align:justify">{{ $koleksi->uraian }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
