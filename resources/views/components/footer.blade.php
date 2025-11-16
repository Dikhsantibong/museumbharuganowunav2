<!-- =====Footer section===== -->
<footer>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 subscribe-field g-4 ">
            <div class="col ">
                <div class="subscribe-content position-relative ">
                    <div class="divide-column position-absolute "></div>
                    <h3 class="tow ms-3 mb-1 text-white">Berlangganan Informasi</h3>
                    <p class=" ms-3 text-white-50">Dapatkan kabar terbaru seputar pameran, agenda budaya, dan program edukasi Museum Bharugano Wuna.</p>
                </div>
            </div>
            <div class="col">
                <form action="#" class="d-flex ">
                    <input type="email" name="email" id="footerEmail" placeholder="Masukkan Email Anda" required>
                    <button class="subscript" type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-4 our-details">

            <!-- MUSEUM INTRO -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0  ">
                    <a href="{{ url('/beranda') }}"><img src="{{ asset('images/logo/logo-muna.png') }}"
                            class="card-img-top img-fluid " alt="Logo Museum"></a>
                    <div class="card-body px-0 py-3 ">
                        <p class="card-text text-white ">
                            Museum Bharugano Wuna hadir sebagai pusat pelestarian sejarah 
                            dan kebudayaan Muna, menghadirkan koleksi autentik dan edukasi publik yang berkelanjutan.
                        </p>
                    </div>
                    <div class="social-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute "></div>
                            <h4 class="ms-3 text-white ">Media Sosial</h4>
                        </div>
                        <ul class="d-flex mt-2 gap-3 ms-3  ">
                            <li><a class="text-white " href="#"><i class="link-icons fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="text-white " href="#"><i class="link-icons fa-brands fa-twitter"></i></a></li>
                            <li><a class="text-white " href="#"><i class="link-icons fa-brands fa-vine"></i></a></li>
                            <li><a class="text-white " href="#"><i class="link-icons fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- INFORMASI MUSEUM -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <div class="industry-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute "></div>
                            <h4 class="ms-3 text-white ">Informasi Museum</h4>
                        </div>
                        <ul class="d-flex flex-column  mt-3 row-gap-2  ms-3  ">
                            <li><a class="text-white " href="#">Profil Museum</a></li>
                            <li><a class="text-white " href="#">Sejarah & Budaya</a></li>
                            <li><a class="text-white " href="#">Pameran & Koleksi</a></li>
                            <li><a class="text-white " href="#">Layanan Edukasi</a></li>
                            <li><a class="text-white " href="#">Kebijakan Pengunjung</a></li>
                            <li><a class="text-white " href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CONTACT -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <div class="touch-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute "></div>
                            <h4 class="ms-3 text-white ">Kontak</h4>
                        </div>
                        <ul class="d-flex flex-column mt-3 row-gap-2 ms-3">
                            <li class="text-white mb-2">Museum Bharugano Wuna<br>Kabupaten Muna, Sulawesi Tenggara</li>
                            <li>
                                <a class="text-white" href="tel:+6200000000">
                                    <i class="bi bi-telephone phone"></i>
                                    +62 000-0000-000
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="mailto:museum@bharuganowuna.id">
                                    <i class="bi bi-envelope email"></i>
                                    museum@bharuganowuna.id
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- JAM KUNJUNGAN -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <div class="working-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute "></div>
                            <h4 class="ms-3 text-white ">Jam Kunjungan</h4>
                        </div>
                        <ul class="mt-3 ms-3 text-white">
                            <li>
                                <div class="d-flex justify-content-between ">
                                    <div>Senin – Jumat</div>
                                    <div>08.00 - 16.00</div>
                                </div>
                                <hr>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between ">
                                    <div>Sabtu</div>
                                    <div>09.00 - 14.00</div>
                                </div>
                                <hr>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between ">
                                    <div>Minggu</div>
                                    <div>Tutup</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="term-and-condition">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center copy-right-content ">
                <div class="text-white copy-right">© 2024 - 2025 | Museum Bharugano Wuna — All Rights Reserved</div>
                <div class="button-div">
                    <a href="#" class="up-to-down-btn to-top"><i class="bi bi-chevron-double-up"></i></a>
                </div>
                <div>
                    <ul class="d-flex gap-3 ">
                        <li><a class="text-white " href="#">Kebijakan</a></li>
                        <li><a class="text-white " href="#">Privasi</a></li>
                        <li><a class="text-white " href="#">Lisensi</a></li>
                        <li><a class="text-white " href="#">Syarat Penggunaan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
