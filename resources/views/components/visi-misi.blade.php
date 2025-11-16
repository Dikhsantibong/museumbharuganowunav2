@extends('layout.app')
@section('title', 'Visi & Misi')
@section('content')
@include('components.header')

<section class="about-company ">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-7" data-aos="fade-right">
                <div class="mb-4">
                    <img src="images/01_home/about-company/image-01.png" class="img-fluid rounded w-100 mb-3" alt="Museum Bharugano Wuna">
                </div>
            </div>
            <div class="col-12 col-lg-5" data-aos="fade-left">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="mb-3" style="font-weight:600;">Visi & Misi</h5>
                        <p style="font-size: 16px; margin-bottom: 10px;">
                            Visi:
                            <ul>
                                <li>Mengembangkan museum sebagai pusat edukasi dan penelitian budaya Muna</li>
                                <li>Menyediakan koleksi artefak sejarah dan manuskrip yang autentik</li>
                                <li>Menyelenggarakan program edukasi dan pameran budaya yang menarik</li>
                            </ul>
                        </p>
                        <p style="font-size: 16px;">
                            Misi:
                            <ul>
                                <li>Mengumpulkan dan mengelola koleksi artefak sejarah dan manuskrip yang autentik</li>
                                <li>Menyelenggarakan program edukasi dan pameran budaya yang menarik</li>
                                <li>Menjalin kolaborasi dengan lembaga seni dan akademisi</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.footer')
@endsection