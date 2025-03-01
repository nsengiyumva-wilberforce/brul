@extends('app')

@section('title', 'Services - Blessed Riverstones Uganda')
@section('description', 'Discover the various services provided by Blessed Riverstones Uganda, including riverstone
    supply and more.')
@section('keywords', 'services, riverstones, Uganda, construction services, stone supply')
@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Services</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Leveraging Uganda’s mineral wealth with integrity and global expertise</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <!-- Mineral Exploration & Sourcing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <h3>Mineral Exploration & Sourcing</h3>
                        <p>Ethical extraction of gold, diamonds, copper, and tantalite from licensed Ugandan mines.
                            Compliant with Ministry of Energy guidelines (MDL 20240338).</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <!-- Global Export Solutions -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3>Global Export Solutions</h3>
                        <p>Seamless logistics for worldwide mineral distribution, backed by CITI Bank-intermediated
                            transactions and FIA-2023-0001489 compliance.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <!-- Regulatory Compliance Assurance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div>
                        <h3>Regulatory Compliance Assurance</h3>
                        <p>End-to-end adherence to Ugandan Mining Act 2022, Anti-Money Laundering Act, and KCCA Trade
                            License standards.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <!-- Quality Control & Lab Testing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-microscope"></i>
                        </div>
                        <h3>Quality Control & Lab Testing</h3>
                        <p>Internationally recognized mineral certification and purity analysis, available on request for
                            transparency.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <!-- Sustainable Mining Practices -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <h3>Sustainable Mining Practices</h3>
                        <p>Environmentally responsible operations aligned with Uganda National Chamber of Commerce
                            sustainability pledges.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <!-- Financial & Trade Facilitation -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h3>Financial & Trade Facilitation</h3>
                        <p>Secure transactions via DFCU Bank (Account 02360010088883) and tailored trade agreements for
                            bulk buyers.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- /Services Section -->

@endsection
