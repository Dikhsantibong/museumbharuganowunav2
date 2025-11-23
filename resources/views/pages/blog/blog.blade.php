@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/header/image.png);">
            <div class="container position-relative">
                <h1>Blog</h1>
                <p>Berita terkini seputar Museum</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li class="current">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section id="speakers" class="speakers section">

            <div class="container">

                <div class="speakers-list">

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-lg-12 speaker-entry">

                                <div class="speaker-profile rounded-5">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img src="{{ asset('assets/img/not-found/image.png') }}"
                                                class="img-thumbnail p-0 rounded-4 mx-auto d-block" alt="...">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="speaker-meta">
                                                <div class="speaker-info">
                                                    <a href="">
                                                        <h4>Jennifer Walsh</h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="speaker-details">
                                                <div class="speaker-topic">
                                                    <i class="bi bi-mic"></i>
                                                    <span>Advanced Neural Networks in Real-World Applications</span>
                                                </div>
                                                <p class="speaker-summary">Exercitation ullamco laboris nisi ut aliquip ex
                                                    ea
                                                    commodo
                                                    consequat duis aute irure dolor in reprehenderit voluptate.</p>
                                                <div class="speaker-actions">
                                                    <a href="#" class="profile-btn">Full Biography</a>
                                                    <div class="speaker-social">
                                                        <a href="#" class="social-link"><i
                                                                class="bi bi-linkedin"></i></a>
                                                        <a href="#" class="social-link"><i
                                                                class="bi bi-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Speaker Entry -->
                        </div>
                        <div class="col-lg-4">
                            tes
                        </div>

                    </div>

                </div>

            </div>

        </section>
    </main>
@endsection
