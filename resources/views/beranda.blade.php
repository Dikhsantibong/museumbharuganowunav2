@extends('layout.app')
@section('title', 'city Wall')
@section('content')
    <!-- =====header section===== -->
    <header>
        <div class="home-one">
            <div class="top-header">
                <div class="top-header-content">
                    <div class="container">
                        <div class="contact-top-information d-flex">
                            <div class="mobile-number-email d-flex">
                                <a href="tel:+1999806915">
                                    <i class="bi bi-telephone phone"></i>
                                    +199(980) 6915
                                </a>
                                <a href="mailto:shifamoni@gmail.com">
                                    <i class="bi bi-envelope email"></i>
                                    shifamoni@gmail.com
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
                    <div class="brand-logo">
                        <a class="navbar-brand" href="index.html"><img src="images/multiple-use/header/logo.png"
                                class="img-fluid" alt="logo"></a>
                    </div>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navigation-link collapse navbar-collapse gap-4" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-normal hover-style" href="index.html" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Home</span><i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html">Home One</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="home-two.html">Home Tow</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="home-three.html">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-normal hover-style" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Pages</span><i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="faq-page.html">FAQ</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="projects-gird.html">Project Grid</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="projects-details.html">Project Details</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="error-page.html">Error</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-normal hover-style" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Services</span><i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="service.html">service</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="service-detail.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-normal hover-style" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Teams</span><i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="team.html">Team</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="team-details.html">Team Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-normal hover-style" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>News</span><i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog.html">Blog Standard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="blog-post.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal" href="contact.html"><span>Contact</span></a>
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
    <!-- =====main section===== -->
    <main class="home-one">
        <!-- =====Banner Section===== -->
        <div class="banner">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="images-optimization position-relative ">
                            <img src="images/multiple-use/banner/banner-one.png" class="d-block img-fluid " alt="...">
                            <div class="cover-images-overlay">
                                <div class="container">
                                    <div class="banner-content ">
                                        <div class="sentence-underline">
                                            <div class="text-white banner-semi-title">City Government Online Services
                                            </div>
                                        </div>
                                        <h1 class="text-white my-3">
                                            <span class="cssanimation lePopUp sequence">Good Governance is Part</span>
                                            <br>
                                            <span class="cssanimation lePopUp sequence">of The Democracy</span>
                                        </h1>
                                        <div class="buttons">
                                            <div class="cityWall-btn" role="search">
                                                <a href="contact.html">Discover More <i
                                                        class="bi bi-arrow-right"></i></a>
                                                <a href="contact.html">Visit Museum <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="images-optimization position-relative ">
                            <img src="images/multiple-use/banner/Lond.png" class="d-block img-fluid" alt="...">
                            <div class="cover-images-overlay">
                                <div class="container">
                                    <div class="banner-content ">
                                        <div class="sentence-underline">
                                            <div class="text-white banner-semi-title">City Government Online Services
                                            </div>
                                        </div>
                                        <h1 class="text-white my-3">
                                            <span class="cssanimation lePopUp sequence">Good Governance is Part</span>
                                            <br>
                                            <span class="cssanimation lePopUp sequence">of The Democracy</span>
                                        </h1>
                                        <div class="buttons">
                                            <div class="cityWall-btn" role="search">
                                                <a href="contact.html">Discover More <i
                                                        class="bi bi-arrow-right"></i></a>
                                                <a href="contact.html">Visit Museum <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =====banner card===== -->
        <div class="banner-card" data-aos="fade-up">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 g-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/church-animation.gif"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Any Type of Medical
                                        Emergency</h4>
                                </a>
                                <p class="card-text">In moments of medical emergencies, swift action is imperative.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/planning-animation.gif"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">For Police and Law
                                        Enforcement</h4>
                                </a>
                                <p class="card-text">Tortor neque sed tellus est eget dui
                                    id ante tristique tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/recycle-animation.gif"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Recycling & Garbage
                                        Related</h4>
                                </a>
                                <p class="card-text">Tortor neque sed tellus est eget dui
                                    id ante tristique tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/travel-insurance-animation.gif"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Travels & Tourism
                                        Information</h4>
                                </a>
                                <p class="card-text">Tortor neque sed tellus est eget dui
                                    id ante tristique tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="#" class="mt-5 m-auto ">
                    <div class="d-flex banner-input-field input-field">
                        <input type="text" name="solution" id="solution"
                            placeholder="The official guide to living, working, visiting, and investing in Texas">
                        <a href="service-detail.html">Find Your Solution</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- ======About Company section======= -->
        <section class="about-company">
            <div class="container">
                <div class="row align-items-center py-4">
                    <div class="col-12 col-md-12 col-lg-5 col-xl-5" data-aos="fade-up">
                        <div class="images">
                            <img class="img-fluid img-one" src="images/01_home/about-company/image-01.png" alt="">
                            <img class="img-fluid img-tow left-slider" src="images/01_home/about-company/image-02.png"
                                alt="">
                        </div>
                    </div>
                    <div class="remove-div one-first col-12 col-md-12 col-lg-7 col-xl-7" data-aos="fade-up">
                        <div class="company-details">
                            <div class="semi-title">
                                <div class="animated-circles">
                                    <div class="small-circle-start"></div>
                                    <span class="title">About Municipality</span>
                                </div>
                            </div>
                            <h2> <span class="cssanimation lePopUp sequence">Whitehall is an Liner</span> <br>
                                <span class="cssanimation lePopUp sequence">Metropolitan Municipality </span>
                            </h2>
                            <p>Payment solutions enable businesses to accept payments Payment scions enable basin
                                accept payments from city customers city securely. scions enable businesses
                                to accept payments from city customers city securely.</p>

                            <div class="company-list row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                                <div class="col gap-3">
                                    <ul class="gap-3">
                                        <li> <span class="square"></span> <span>Making a quality health</span>
                                        </li>
                                        <li> <span class="square"></span> <span>Get Building Permission</span>
                                        </li>
                                        <li> <span class="square"></span> <span>Health & Education</span></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="gap-3">
                                        <li> <span class="square"></span> <span>Most premium education</span>
                                        </li>
                                        <li> <span class="square"></span> <span>Business & Economy</span></li>
                                        <li> <span class="square"></span> <span>Research & development</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="company-videos d-flex align-items-center cityWall-btn-two">
                                <a href="about.html">Visit Museum <i class="bi bi-arrow-right"></i></a>
                                <div class="video-and-text">
                                    <div class="home-pages-video-popup d-flex align-content-center gap-3 ">
                                        <button onclick="videoPlayBtnOneFirst()" id="video-play-btn-one-first"
                                            class="video-play-btn"><i class="bi bi-play"></i></button>
                                        <div class="video-modal-wrapper one-first">
                                            <div class="video-modal-content">
                                                <span onclick="videoCloseBtnOneFirst()"
                                                    class="video-close-btn one-first">&times;</span>
                                                <video class="web-video one-first" controls>
                                                    <source src="videos/cityWall.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                        <p class="m-0 ">Video Intro <br>
                                            About Our Municipal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======Find Government Services Section====== -->
        <section class="government-service">
            <div class="container">
                <div class="section-title">
                    <div class="semi-title" data-aos="fade-up">
                        <div class="animated-circles justify-content-center">
                            <div class="small-circle-start"></div>
                            <div class="title">Our City Government Services</div>
                            <div class="small-circle-end"></div>
                        </div>
                    </div>
                </div>
                <div class="title text-center mb-5" data-aos="fade-up">
                    <h2 class="cssanimation lePopUp sequence">Find Government Services</h2>
                </div>
                <!-- card -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/skills.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Jobs & Unemployment</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details<i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/police.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Policing and Crime</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/elections.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Government & Elections</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/money-transfer.gif"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Finance & Legal</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/planning.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">National Planning</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/profit.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Business & Industry</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/parking.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Sidewalks & Parking</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card h-100 border-0 rounded-0">
                            <img src="images/01_home/goverment-service/spinach.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Agriculture and Food</h4>
                                </a>
                                <p class="card-text">City employment issue opportunist
                                    are position descriptions are </p>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <a href="service-detail.html" class="card-btn">More Details <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======Our Dedicated Investigators======= -->
        <section class="our-investigators ">
            <div class="container">
                <div class="section-title">
                    <div class="semi-title" data-aos="fade-up">
                        <div class="animated-circles justify-content-center">
                            <div class="small-circle-start"></div>
                            <div class="title">Check our Teamer</div>
                            <div class="small-circle-end"></div>
                        </div>
                    </div>
                    <div class="title text-center mb-5" data-aos="fade-up">
                        <h2 class="cssanimation lePopUp sequence">Our Dedicated Investigators</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col" data-aos="fade-right">
                        <div class="card h-100 border-0">
                            <img src="images/multiple-use/investigator/david.png" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <ul class="social-links hideLink">
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-vimeo-v"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <button class="share-btn border-0 share-button"><i
                                        class="fa-solid fa-share-nodes"></i></button>
                                <div class="info mt-1 px-2 py-3">
                                    <a href="team-details.html">
                                        <h5 class="card-title tow text-white ps-3 m-0">David Malawn</h5>
                                    </a>
                                    <p class="card-text text-white ps-3">Chief Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-right">
                        <div class="card h-100 border-0">
                            <img src="images/multiple-use/investigator/brawn.png" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <ul class="social-links hideLink">
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-vimeo-v"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <button class="share-btn border-0 share-button"><i
                                        class="fa-solid fa-share-nodes"></i></button>
                                <div class="info mt-1 px-2 py-3">
                                    <a href="team-details.html">
                                        <h5 class="card-title tow text-white ps-3 m-0">Brawn Jack</h5>
                                    </a>
                                    <p class="card-text text-white ps-3">Head Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-left">
                        <div class="card h-100 border-0">
                            <img src="images/multiple-use/investigator/marla.png" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <ul class="social-links hideLink">
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-vimeo-v"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <button class="share-btn border-0 share-button"><i
                                        class="fa-solid fa-share-nodes"></i></button>
                                <div class="info mt-1 px-2 py-3">
                                    <a href="team-details.html">
                                        <h5 class="card-title tow text-white ps-3 m-0">Marla Jashon</h5>
                                    </a>
                                    <p class="card-text text-white ps-3">Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-left">
                        <div class="card h-100 border-0">
                            <img src="images/multiple-use/investigator/mike.png" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <ul class="social-links hideLink">
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-vimeo-v"></i></a></li>
                                    <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                                <button class="share-btn border-0 share-button"><i
                                        class="fa-solid fa-share-nodes"></i></button>
                                <div class="info mt-1 px-2 py-3">
                                    <a href="team-details.html">
                                        <h5 class="card-title tow text-white ps-3 m-0">Mike Mink</h5>
                                    </a>
                                    <p class="card-text text-white ps-3">Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======Best City Government & Municipal Service Based On USA====== -->
        <section class="best-city-government remove-div one-second" data-aos="fade-up">
            <div class="images-and-overlay">
                <img class="img-fluid" src="images/01_home/best-city/image-footer.png" alt="best-city">
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="city-content">
                    <div class="home-pages-video-popup text-center">
                        <button onclick="videoPlayBtnOneSecond()" id="video-play-btn_one-second"
                            class="video-play-btn one-second"><i class="bi bi-play"></i></button>
                        <div class="video-modal-wrapper one-second">
                            <div class="video-modal-content one-second">
                                <span onclick="videoCloseBtnOneSecond()"
                                    class="video-close-btn one-second">&times;</span>
                                <video class="web-video one-second" controls>
                                    <source src="videos/cityWall.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="city-title" data-aos="fade-up">
                        <h2 class="text-white text-center "> <span class="cssanimation lePopUp sequence">Best
                                City
                                Government and Municipal</span> <br>
                            <span class="cssanimation lePopUp sequence">Service Based On
                                USA</span>
                        </h2>
                    </div>
                    <div class="city-service-list">
                        <div class="row city-footer-content">
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-right">
                                <ul>

                                    <li class="hove">
                                        <a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Introduction to Top-Performing City Governments in the USA</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li>
                                        <a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Criteria for Evaluating Municipal Services
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>The Role of Technology in City Management</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer"> <span>Case
                                                Study: New
                                                York City's Public Safety Initiatives</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>San Francisco's Green Energy and Sustainability Efforts</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Conclusion: Best Practices for Municipal Excellence</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Transparency and Accountability in Local Governance in Dallas</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down">

                                <ul>
                                    <li class="hove"><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Traffic and Road Maintenance in Atlanta</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Public Transportation Innovations in Portland
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Chicago's Urban Planning and Infrastructure Development
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Healthcare and
                                                Social Services in Boston
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Education System Overhaul in Seattle
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Waste Management and Recycling in Austin
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Water Supply and Sanitation in Denver
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-left">
                                <ul>
                                    <li class="hove"><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Housing and Homelessness Programs in Los Angeles
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Digital Government Services in Washington, D.C.
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Public Parks and Recreation in Minneapolis
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer"> <span>Economic
                                                Development and Job Creation in Houston
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Community Engagement and Public Participation in Philadelphia
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Emergency Management and Disaster Preparedness in Miami
                                            </span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                    <li><a href="service.html" target="_blank" rel="noopener noreferrer">
                                            <span>Smart City Initiatives in San Jose</span>
                                            <i class="bi bi-chevron-right float-end me-2"></i></a>
                                        <div class="divide-row"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====Sponsor Company Logo===== -->
        <section class="company-brand-logo">
            <div class="divide-row" data-aos="fade-up"></div>
            <div class="container">
                <div class="section-title">
                    <div class="semi-title" data-aos="fade-up">
                        <div class="animated-circles justify-content-center">
                            <div class="small-circle-start"></div>
                            <div class="title">Our Supporters</div>
                            <div class="small-circle-end"></div>
                        </div>
                    </div>
                    <div class="title text-center mb-5" data-aos="fade-up">
                        <h2 class="cssanimation lePopUp sequence">Our Partners And Supporters</h2>
                    </div>
                </div>
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/1.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/2.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/3.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/4.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/5.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/6.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/7.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/3.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/2.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/4.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/5.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/7.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/multiple-use/sponsors-company-logo/6.png" alt="" class="img-fluid ">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====Upcoming City Activities & Events Schedule===== -->
        <section class="upcoming-city" data-aos="fade-up">
            <div class="container py-5 ">
                <div class="row align-items-center flex-md-column flex-lg-row flex-xl-row ">
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7" data-aos="fade-right">
                        <div class="section-title">
                            <div class="semi-title">
                                <div class="animated-circles">
                                    <div class="small-circle-start"></div>
                                    <span class="title">Upcoming Events</span>
                                </div>
                            </div>
                            <h2 class="title"> <span class="cssanimation lePopUp sequence">Upcoming City
                                    Activities</span>
                                <br> <span class="cssanimation lePopUp sequence">And Events Schedule</span>
                            </h2>
                        </div>
                        <div class="upcoming-events-card mt-5">
                            <div class="card mb-3 border-end-0 border-start-0 border-top-0 bg-transparent rounded-0  ">
                                <div class="details-information">
                                    <div class="upcoming-photo">
                                        <img src="images/multiple-use/upcoming-city/1.png"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="upcoming-info ">
                                        <div class="info">
                                            <h4 class="card-title fw-bold ">Events Schedule</h4>
                                            <ul>
                                                <li><i class="bi bi-clock-fill"></i> 7:00 am - 3:00 pm</li>
                                                <li><i class="bi bi-geo-alt-fill"></i> 8 Street, San Marcos London,
                                                    UK
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="upcoming-link ms-auto">
                                            <a href="#">
                                                <span class="card-footer border-0">
                                                    <i class="bi bi-arrow-up-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card mb-3 border-end-0 border-start-0 border-top-0 bg-transparent rounded-0  ">
                                <div class="details-information">
                                    <div class="upcoming-photo">
                                        <img src="images/multiple-use/upcoming-city/2.png"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="upcoming-info ">
                                        <div class="info">
                                            <h4 class="card-title fw-bold ">Get Ready for Fun!</h4>
                                            <ul>
                                                <li><i class="bi bi-clock-fill"></i> 7:00 am - 3:00 pm</li>
                                                <li><i class="bi bi-geo-alt-fill"></i> 8 Street, San Marcos London,
                                                    UK
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="upcoming-link ms-auto">
                                            <a href="#">
                                                <span class="card-footer border-0">
                                                    <i class="bi bi-arrow-up-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 ps-2" data-aos="fade-left">
                        <div class="download-city bg-white p-4 p-xl-5 p-xxl-5 p-md-5">
                            <h2 class="cssanimation lePopUp sequence">Download City Recent Documents</h2>
                            <div class="card mb-2 p-4 rounded-0">
                                <div class="eyes-download-icons">
                                    <div> <img class="img-fluid" src="images/multiple-use/upcoming-city/eye.gif" alt="">
                                    </div>
                                    <div class="uploadFile-icon">
                                        <input type="file" name="uploadFile" id="uploadFile">
                                        <label for="uploadFile"><img class="img-fluid down"
                                                src="images/multiple-use/upcoming-city/upload.gif" alt=""></label>

                                    </div>
                                </div>
                                <h6 class="text-white ">june 15. 2024</h6>
                                <h3 class="text-white mt-1 ">Explore the latest files uploaded</h3>
                            </div>
                            <div class="card p-4 rounded-0 ">
                                <div
                                    class="eyes-download-icons d-flex justify-content-between align-items-center mb-2 ">
                                    <div>
                                        <img class="img-fluid" src="images/multiple-use/upcoming-city/eye.gif" alt="">
                                    </div>
                                    <div class="downloadFile-icon">
                                        <a href="images/multiple-use/upcoming-city/download.gif" download><img
                                                class="img-fluid down"
                                                src="images/multiple-use/upcoming-city/download.gif" alt=""></a>
                                    </div>
                                </div>
                                <h6 class="text-white ">june 07. 2024</h6>
                                <h3 class="text-white mt-1 ">Most downloaded files</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====Good words From People=====-->
        <section class="our-testimonials" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <div class="semi-title" data-aos="fade-up">
                        <div class="animated-circles justify-content-center">
                            <div class="small-circle-start"></div>
                            <div class="title">Our testimonials</div>
                            <div class="small-circle-end"></div>
                        </div>
                    </div>
                    <div class="title text-center mb-5">
                        <h2 class="cssanimation lePopUp sequence">Godhoods From People</h2>
                    </div>
                </div>
                <div class="testimonial-slider">
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Henry M. Becerra</h4>
                                <p>Product Designer</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Jack Son</h4>
                                <p>Marketer</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Jon Henry</h4>
                                <p>Photographs</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Oliver Jake</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Noah James</h4>
                                <p>Professor</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Jack Connor</h4>
                                <p>Product Manager</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                    <div class="card border-0 rounded-0 m-3 ">
                        <div class="testi-single-box p-4">
                            <img src="images/multiple-use/testimonial/quote.gif" alt="" class="img-fluid ">
                            <p class="py-3">Clean and user friendly testimonial kit. Highly
                                remanded and easy to implementation project.
                                Highly remanded testimonial kit for developers.</p>
                            <ul class="d-flex column-gap-2 pt-2">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-half"></i></li>
                            </ul>
                            <div class="name-title">
                                <h4>Liam John</h4>
                                <p>Teacher</p>
                            </div>
                        </div>
                        <span class="small-box-border"></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====Explore our beautiful city highlights photos===== -->
        <section class="" data-aos="fade-up">
            <div class="city-highlights-photos">
                <div class="container-fluid">
                    <div class="section-title">
                        <div class="Portfolio-header">
                            <div class="semi-title" data-aos="fade-up">
                                <div class="animated-circles">
                                    <div class="small-circle-start"></div>
                                    <div class="title">Rect Work Portfolio</div>
                                    <div class="small-circle-end"></div>
                                </div>
                            </div>
                            <div class="title-link">
                                <div class="title col-12 col-md-6 ">
                                    <h2 class="text-white"> <span class="cssanimation lePopUp sequence">Explore our
                                            beautiful city</span> <br>
                                        <span class="cssanimation lePopUp sequence">highlights photos</span>
                                    </h2>
                                </div>
                                <div class="visit-link cityWall-btn col-12 col-md-6">
                                    <a class="" href="projects-gird.html">Visit Museum <img
                                            src="images/multiple-use/beautiful-city/right.gif" alt=""
                                            class="img-fluid "></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-3">
                        <div class="col" data-aos="fade-right">
                            <div class="card border-0 ">
                                <img class="img-fluid " src="images/multiple-use/beautiful-city/01.png" alt="">
                                <div class="image-title d-flex align-items-center ">
                                    <div class="m-2 pe-5">
                                        <a href="projects-details.html">
                                            <h5 class="text-white ">New York City Museum</h5>
                                        </a>
                                        <p class="text-white ">Exploring the Rich Cultural Heritage</p>
                                    </div>
                                    <div class="button-background-color">
                                        <a href="projects-details.html"><i class="bi bi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up">
                            <div class="card border-0 ">
                                <img class="img-fluid " src="images/multiple-use/beautiful-city/02.png" alt="">
                                <div class="image-title d-flex align-items-center ">
                                    <div class="m-2 pe-5">
                                        <a href="projects-details.html">
                                            <h5 class="text-white ">Co-Working Meeting</h5>
                                        </a>
                                        <p class="text-white ">Connecting Minds for Success</p>
                                    </div>
                                    <div class="button-background-color"><a href="projects-details.html">
                                            <i class="bi bi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-down">
                            <div class="card border-0 ">
                                <img class="img-fluid " src="images/multiple-use/beautiful-city/03.png" alt="">
                                <div class="image-title d-flex align-items-center ">
                                    <div class="m-2 pe-5">
                                        <a href="projects-details.html">
                                            <h5 class="text-white ">Museum of New york</h5>
                                        </a>
                                        <p class="text-white ">Discover History and Cultural
                                        </p>
                                    </div>
                                    <div class="button-background-color"><a href="projects-details.html"><i
                                                class="bi bi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left">
                            <div class="card border-0 ">
                                <img class="img-fluid " src="images/multiple-use/beautiful-city/04.png" alt="">
                                <div class="image-title d-flex align-items-center ">
                                    <div class="m-2 pe-5">
                                        <a href="projects-details.html">
                                            <h5 class="text-white ">Melton Art Museum</h5>
                                        </a>
                                        <p class="text-white ">Technical Analysis product</p>
                                    </div>
                                    <div class="button-background-color"><a href="projects-details.html"><i
                                                class="bi bi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====Latest From Our Newsroom===== -->
        <section class="newsroom m-0" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <div class="Newsroom-header mb-4">
                        <div class="semi-title" data-aos="fade-up">
                            <div class="animated-circles justify-content-center">
                                <div class="small-circle-start"></div>
                                <div class="title">Check our News & Blog</div>
                                <div class="small-circle-end"></div>
                            </div>
                        </div>
                        <div class="title">
                            <h2 class="text-center cssanimation lePopUp sequence">Latest From Our Newsroom</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0 rounded" data-aos="fade-right">
                            <img src="images/multiple-use/newsroom/01.png" class="card-img-top img-fluid " alt="...">
                            <div class="card-body p-3">
                                <div class="date-comment d-flex justify-content-between gap-3">
                                    <div class="date">
                                        <div class="text-white fw-bold ">28</div>
                                        <div class="text-white month">January</div>
                                    </div>
                                    <div class="align-items-center d-flex gap-1">
                                        <lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="loop"
                                            delay="2000" style="width:20px; height:20px">
                                        </lord-icon>
                                        <span>Admin</span>
                                    </div>
                                    <div class="align-items-center d-flex gap-1">
                                        <lord-icon src="https://cdn.lordicon.com/fdxqrdfe.json" trigger="loop"
                                            delay="2000" style="width:20px; height:20px;">
                                        </lord-icon>
                                        <span>Comm...</span>
                                    </div>
                                </div>
                                <a href="blog.html">
                                    <h3 class="card-title">Best Municipal City Government
                                        2024 Year</h3>
                                </a>
                            </div>
                            <div
                                class="card-footer bg-white border-0 d-flex align-items-center justify-content-between mb-3 ">
                                <div class="divide-row-tow"></div>
                                <a href="blog.html" class="more-link ms-2">More details <i
                                        class="bi bi-arrow-up-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 rounded" data-aos="fade-right">
                            <img src="images/multiple-use/newsroom/02.png" class="card-img-top img-fluid " alt="...">
                            <div class="card-body p-3">
                                <div class="date-comment d-flex justify-content-between gap-3">
                                    <div class="date">
                                        <div class="text-white fw-bold ">28</div>
                                        <div class="text-white month">January</div>
                                    </div>
                                    <div class="align-items-center d-flex gap-1">
                                        <lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="loop"
                                            delay="2000" style="width:20px; height:20px">
                                        </lord-icon>
                                        <span>Admin</span>
                                    </div>
                                    <div class="align-items-center d-flex gap-1">
                                        <lord-icon src="https://cdn.lordicon.com/fdxqrdfe.json" trigger="loop"
                                            delay="2000" style="width:20px; height:20px;">
                                        </lord-icon>
                                        <span>Comm...</span>
                                    </div>
                                </div>
                                <a href="blog.html">
                                    <h3 class="card-title">Leverage Agile Frameworks New
                                        Provide City</h3>
                                </a>
                            </div>
                            <div
                                class="card-footer bg-white border-0 d-flex align-items-center justify-content-between mb-3 ">
                                <div class="divide-row-tow"></div>
                                <a href="blog.html" class="more-link ms-2">More details <i
                                        class="bi bi-arrow-up-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 rounded" data-aos="fade-right">
                            <img src="images/multiple-use/newsroom/03.png" class="card-img-top img-fluid " alt="...">
                            <div class="card-body p-3">
                                <div class="date-comment d-flex justify-content-between gap-3">
                                    <div class="date">
                                        <div class="text-white fw-bold ">28</div>
                                        <div class="text-white month">January</div>
                                    </div>
                                    <div class="align-items-center d-flex gap-1">
                                        <lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="loop"
                                            delay="2000" style="width:20px; height:20px">
                                        </lord-icon>
                                        <span>Admin</span>
                                    </div>
                                    <div class="align-items-center d-flex gap-1">
                                        <lord-icon src="https://cdn.lordicon.com/fdxqrdfe.json" trigger="loop"
                                            delay="2000" style="width:20px; height:20px;">
                                        </lord-icon>
                                        <span>Comm...</span>
                                    </div>
                                </div>
                                <a href="blog.html">
                                    <h3 class="card-title">Supporting Business Explore
                                        Bounce Back</h3>
                                </a>
                            </div>
                            <div
                                class="card-footer bg-white border-0 d-flex align-items-center justify-content-between mb-3 ">
                                <div class="divide-row-tow"></div>
                                <a href="blog.html" class="more-link ms-2">More details <i
                                        class="bi bi-arrow-up-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- =====Footer section===== -->
    <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 subscribe-field g-4 ">
                <div class="col ">
                    <div class="subscribe-content position-relative ">
                        <div class="divide-column position-absolute "></div>
                        <h3 class="tow ms-3 mb-1 text-white">Subscribe To Newsletter</h3>
                        <p class=" ms-3 text-white-50">Stay updated with our latest news and offers.</p>
                    </div>
                </div>
                <div class="col">
                    <form action="#" class="d-flex ">
                        <input type="email" name="email" id="footerEmail" placeholder="Enter Your Email Address"
                            required>
                        <button class="subscript" type="submit">Subscript</button>
                    </form>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-4 our-details">
                <div class="col">
                    <div class="card h-100 bg-transparent border-0  ">
                        <a href="index.html"><img src="images/multiple-use/footer/footer-logo.png"
                                class="card-img-top img-fluid " alt="..."></a>
                        <div class="card-body px-0 py-3 ">
                            <p class="card-text text-white ">At Citywall, we are dedicated to enhancing urban living
                                through innovative technology and sustainable practices</p>
                        </div>
                        <div class="social-info">
                            <div class="position-relative">
                                <div class="divide-column position-absolute "></div>
                                <h4 class="ms-3 text-white ">Social Info</h4>
                            </div>
                            <ul class="d-flex mt-2 gap-3 ms-3  ">
                                <li><a class="text-white " href="#"><i
                                            class="link-icons fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="text-white " href="#"><i class="link-icons fa-brands fa-twitter"></i></a>
                                </li>
                                <li><a class="text-white " href="#"><i class="link-icons fa-brands fa-vine"></i></a>
                                </li>
                                <li><a class="text-white " href="#"><i
                                            class="link-icons fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <div class="industry-info">
                            <div class="position-relative">
                                <div class="divide-column position-absolute "></div>
                                <h4 class="ms-3 text-white ">Industry Sector</h4>
                            </div>
                            <ul class="d-flex flex-column  mt-3 row-gap-2  ms-3  ">
                                <li><a class="text-white " href="#">Our Time</a></li>
                                <li><a class="text-white " href="#">How it works</a></li>
                                <li><a class="text-white " href="#">Office Create</a></li>
                                <li><a class="text-white " href="#">Residential Explore</a></li>
                                <li><a class="text-white " href="#">Terms $ Service</a></li>
                                <li><a class="text-white " href="#">Jos $ unemployment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <div class="touch-info">
                            <div class="position-relative">
                                <div class="divide-column position-absolute "></div>
                                <h4 class="ms-3 text-white ">Get In Touch</h4>
                            </div>
                            <ul class="d-flex flex-column  mt-3 row-gap-2  ms-3  ">
                                <li class="text-white mb-2">Valentin, Street Road 24, New York, USA - 67452</li>
                                <li>
                                    <a class="text-white" href="tel:+1999806915">
                                        <i class="bi bi-telephone phone"></i>
                                        +199(980) 6915
                                    </a>
                                </li>
                                <li> <a class="text-white" href="mailto:shifamoni@gmail.com">
                                        <i class="bi bi-envelope email"></i>
                                        shifamoni@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                        <div class="working-info">
                            <div class="position-relative">
                                <div class="divide-column position-absolute "></div>
                                <h4 class="ms-3 text-white ">Working Hours</h4>
                            </div>
                            <ul class="mt-3 ms-3 text-white   ">
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <div>Monday</div>
                                        <div>10.00 - 11.00</div>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <div>Tuesday</div>
                                        <div>11.00 - 12.00</div>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <div>Wednesday</div>
                                        <div>01.00 - 02.00</div>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <div>Thursday</div>
                                        <div>02.00 - 03.00</div>
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
                    <div class="text-white copy-right">© 2024 - 2025 | Alrights reserved by <span>Website_Stock</span>
                    </div>
                    <div class="button-div">
                        <a href="#" class="up-to-down-btn to-top"><i class="bi bi-chevron-double-up"></i></a>
                    </div>
                    <div>
                        <ul class="d-flex gap-3 ">
                            <li><a class="text-white " href="#">Terms</a></li>
                            <li><a class="text-white " href="#">Privacy</a></li>
                            <li><a class="text-white " href="#">License</a></li>
                            <li><a class="text-white " href="#">Privacy</a></li>
                            <li><a class="text-white " href="#">Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection