@extends('layouts.app')

@section('content')
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="row justify-content-left mb-5">
            <div class="col-lg-8">
                <div class="text-box">
                    <h5>GALERI KEGIATAN</h5>
                </div>
            </div>
        </div>
        @if(isset($galeri) && count($galeri))
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach($galeri as $foto)
                <div class="col">
                    <div class="card image-box h-100 shadow-sm" style="overflow:hidden;">
                        <img src="{{ asset('storage/' . $foto->foto) }}" style="width:100%; height:210px; object-fit:cover; background:#eee;" alt="{{ $foto->caption ?? 'Galeri Museum' }}">
                        @if($foto->caption)
                        <div class="card-body py-2 px-2">
                            <div class="small text-muted">{{ $foto->caption }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <div class="row"><div class="col-12 text-center text-muted">Belum ada foto kegiatan.</div></div>
        @endif
    </div>
</section>
@endsection