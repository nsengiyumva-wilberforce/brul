@extends('app')

@section('title', 'Products - Blessed Riverstones Uganda')
@section('description', 'Explore the latest products by Blessed Riverstones Uganda, showcasing our riverstone products
    and services.')
@section('keywords', 'products, riverstones, Uganda, construction, riverstone products')
@section('content')
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
    <div class="container position-relative">
        <h1>Products</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Products</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

       <!-- Products Section -->
       <section id="constructions" class="constructions section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Products</h2>
            <p>Globally Certified Minerals from Uganda’s Rich Deposits</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <!-- Gold -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg">
                                    <img src="assets/img/gold.jpg" alt="Ethical Ugandan Gold – MDL 20240338 Certified">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">High-Purity Gold</h4>
                                    <p>
                                        Ethically mined and globally certified (MDL 20240338). Our gold meets LBMA
                                        standards for international trade, with lab-tested purity of 99.6%. Exported
                                        under Ministry of Energy permits to Europe, Asia, and the Americas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <!-- Diamonds -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg">
                                    <img src="assets/img/diamond.jpg"
                                        alt="Conflict-Free Ugandan Diamonds – FIA Certified">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Conflict-Free Diamonds</h4>
                                    <p>
                                        KPCS-compliant diamonds with FIA-2023-0001489 certification. Mined under Uganda’s
                                        Mining Act 2022, graded for clarity and carat weight. Ideal for luxury markets
                                        and industrial applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <!-- Copper -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg">
                                    <img src="assets/img/copper.jpg" alt="Sustainably Mined Ugandan Copper">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Industrial-Grade Copper</h4>
                                    <p>
                                        99.9% pure electrolytic copper, sourced sustainably from licensed mines.
                                        Certified by KCCA (License 0000490015) for global export. Used in electronics,
                                        construction, and renewable energy sectors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <!-- Tantalite -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg">
                                    <img src="assets/img/tantalite.jpg"
                                        alt="Certified Ugandan Tantalite for Global Markets">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Rare Earth Tantalite</h4>
                                    <p>
                                        High-grade tantalite (Ta₂O₅ content >30%) for aerospace and electronics
                                        industries. Exported under CITI Bank-intermediated contracts. Compliant with OECD
                                        Due Diligence Guidelines.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
            </div>
        </div>
    </section><!-- /Products Section -->
@endsection
