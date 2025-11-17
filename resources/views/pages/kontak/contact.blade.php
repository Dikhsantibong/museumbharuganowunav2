@extends('layouts.app')

@section('content')
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="row align-items-center">
           
            <!-- Info Kontak -->
            <div class="col-lg-5">
                <div class="contact-box">
                    <h6>Alamat</h6>
                    <p>Jl. Museum Bharugano Wuna<br>Kabupaten Muna, Sulawesi Tenggara</p>
                </div>
                <div class="contact-box">
                    <h6>Email</h6>
                    <a href="mailto:info@museumbharugano.com">info@museumbharugano.com</a>
                </div>
                <div class="contact-box">
                    <h6>Telepon</h6>
                    <a href="tel:+6281234567890">+62 812-3456-7890</a>
                </div>
            </div>
            <!-- Formulir Kontak -->
            <div class="col-lg-7">
                <form class="contact-form" method="POST" action="#">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="nama" required placeholder="Nama Lengkap" />
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" required placeholder="Email" />
                    </div>
                    <div class="mb-3">
                        <input type="text" name="subjek" required placeholder="Subjek" />
                    </div>
                    <div class="mb-3">
                        <textarea name="pesan" rows="5" required placeholder="Pesan"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="custom-button">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section Google Maps -->
<section class="content-section no-spacing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.7776319262646!2d122.58647757414213!3d-4.837120195070956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8befb98d98006f%3A0x6e6337cccb70b082!2sMuseum%20Bharugano%20Wuna!5e0!3m2!1sen!2sid!4v1688207152228!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection