
<!-- =====header section===== -->
<header>
    <div class="home-one">
        <div class="top-header">
            <div class="top-header-content">
                <div class="container">
                    <div class="contact-top-information d-flex">
                        <div class="mobile-number-email d-flex">
                            <a href="tel:+62 812-3456-7890">
                                <i class="bi bi-telephone phone"></i>
                                +62 812-3456-7890
                            </a>
                            <a href="mailto:museumbharuganowuna@gmail.com">
                                <i class="bi bi-envelope email"></i>
                                museumbharuganowuna@gmail.com
                            </a>
                        </div>
                        <div class="language-socialLink d-flex ms-auto">
                            <div class="language">
                                <label for="language" class="text-white">Language:</label>
                                <select id="language">
                                    <option value="english">English</option>
                                    <option value="mandarin">Mandarin</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="french">French</option>
                                    <option value="modern">Modern</option>
                                    <option value="bengali">Bengali</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                            <div class="socialLink d-flex">
                                <p class="d-inline-block text-white">Follow on:</p>
                                <ul class="d-flex">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-vine"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar-details navbar navbar-expand-lg">
            <div class="container">
                <div class="brand-logo d-flex align-items-center">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/beranda') }}">
                        <img src="{{ asset('images/logo/logo-muna.png') }}" class="img-fluid me-2" alt="logo" style="max-height:60px; width:auto;">
                        <span class="fw-bold text-dark" style="font-size:1.25rem;">Museum Bharugano Wuna</span>
                    </a>
                </div>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navigation-link collapse navbar-collapse gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-normal hover-style" href="{{ url('/beranda') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-normal hover-style" href="{{ url('/tentang-kami') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Profil</span><i class="bi bi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/visi-misi') }}">Visi & Misi</a></li>
 
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-normal hover-style" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Kegiatan</span><i class="bi bi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/berita') }}">Berita</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/agenda') }}">Agenda</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-normal hover-style" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Koleksi</span><i class="bi bi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Geologika</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Biologika</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Etnografika</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Arkeologika</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Historika</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Numismatika & Heraldika</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Filologi</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Keramonologi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-normal hover-style" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Publikasi</span><i class="bi bi-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">Laporan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="blog-post.html">Jurnal Museum</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="blog-post.html">Perpustakaan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="blog-post.html">buku elektronik</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal" href="{{ url('/contact') }}"><span>Contact</span></a>
                        </li>
                    </ul>
                    <div
                        class="getStart-sideMenu d-flex align-items-center align-content-center justify-content-center justify-content-md-between gap-2 ">
                        <div class="d-flex align-items-center ms-sm-0 ms-lg-auto ms-xl-auto ms-xxl-auto cityWall-btn"
                            role="search">
                            <a href="contact.html">Get A
                                Quote <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="said-navbar ms-2">
                            <a href="#" class="navSidebar-button" onclick="openNav()">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </a>
                            <div id="mySidenav" class="sidenav">
                                <div class="side-logo-button">
                                    <a href="index.html">
                                        <img src="images/multiple-use/side-navmenu/side-logo.png" class="img-fluid"
                                            alt="">
                                    </a>
                                    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
                                </div>
                                <div class="our-mission ">
                                    <h4 class="text-white">Our mission</h4>
                                    <p>Our mission is to connect people to the heart and soul of cities around the
                                        world. From buildings to cobblestone streets, each has its own story,
                                        dedicated
                                        to sharing those stories with you..</p>
                                </div>
                                <div class="contact">
                                    <div class="con-info">
                                        <h4 class="text-white ">Contact Info</h4>
                                        <ul>
                                            <li><a href="#"><i class="bi bi-geo-alt"></i> Valentin, Street Road 24,
                                                    New
                                                    York,
                                                    USA - 67452</a></li>
                                            <li> <a href="tel:+1999806915">
                                                    <i class="bi bi-telephone phone"></i>
                                                    +199(980) 6915
                                                </a></li>
                                            <li><a href="mailto:shifamoni@gmail.com">
                                                    <i class="bi bi-envelope email"></i>
                                                    shifamoni@gmail.com
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                            <li><a href="#"><i class="bi bi-twitter-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>