<div class="nav-item ">
    <a class="nav-link" href="/"><span
            class="nav-link-title {{ Request::is(patterns: '/') ? 'text-yellow' : '' }}">Beranda</span></a>
</div>
<div class="nav-item ">
    <a class="nav-link" href="/tentang-kami"><span
            class="nav-link-title {{ Request::is(patterns: 'tentang-kami') ? 'text-yellow' : '' }}">Tentang
            Kami</span></a>
</div>
<div class="nav-item ">
    <a class="nav-link" href="/berita"><span
            class="nav-link-title {{ Request::is(patterns: 'berita*') ? 'text-yellow' : '' }}">Berita</span></a>
</div>
<div class="nav-item ">
    <a class="nav-link" href="/kegiatan"><span
            class="nav-link-title {{ Request::is(patterns: 'kegiatan*') ? 'text-yellow' : '' }}">Kegiatan</span></a>
</div>
<div class="nav-item ">
    <a class="nav-link" href="/koleksi"><span
            class="nav-link-title {{ Request::is(patterns: 'koleksi*') ? 'text-yellow' : '' }}">Koleksi</span></a>
</div>
{{-- <div class="nav-item ">
    <a class="nav-link" href="/galeri"><span
            class="nav-link-title {{ Request::is(patterns: 'galeri') ? 'text-yellow' : '' }}">Galeri</span></a>
</div> --}}
<div class="nav-item ">
    <a class="nav-link" href="/kontak"><span
            class="nav-link-title {{ Request::is(patterns: 'kontak') ? 'text-yellow' : '' }}">Kontak</span></a>
</div>
{{-- <div class="nav-item ms-4">
    <a href="#" class="btn btn-primary">Buy now</a>
</div> --}}
