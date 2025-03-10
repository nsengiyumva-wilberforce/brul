<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'BLESSED RIVERSTONES UGANDA LIMITED')</title>
    <meta name="description" content="@yield('description', 'MINING, AND EXPORT OF PRECIOUS STONES')">
    <meta name="keywords" content="@yield(
        'keywords',
        'GOLD MINING, GOLD EXPORT, GOLD IMPORT, DIAMOND MINING, PRECIOUS STONES, BLESSED RIVERSTONES UGANDA LIMITED, BLESSED RIVERSTONES, BLESSED RIVERSTONES UGANDA,RIVERSTONES, DIAMONDS, Blessed Riverstones Uganda Limited, COPPER AND
                TANTALITE'
    )">

    <!-- Favicons -->
    <link href="/assets/img/logo-2025.png" rel="icon">
    <link href="/assets/img/logo-2025.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
<!-- Disclaimer Alert -->
<div class="alert alert-warning text-center m-0 p-1" role="alert" id="top-alert">
    <marquee behavior="scroll" direction="left">
        <strong>Disclaimer:</strong> Be aware of scammers using our name. For more details, contact us via email or WhatsApp at <strong>0414673642</strong>.
    </marquee>
</div>

<!-- Header -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="/assets/img/logo-2025.png" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="{{ request()->routeIs('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="/services" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="/products" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Products</a></li>
                <li><a href="/contact-us" class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>



    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="/assets/img/logo.png" alt="">
                    </a>
                    <div class="footer-contact pt-3">
                        <p> Plot 1610 Mayanja Close, Bukoto</p>
                        <p>Kisasi Road, P.O Box 153884 Kampala (U)</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+256 414 673642/ +256 200 917871/ +256 772
                                906936/+256 702 352536/ +256 780 385820</span></p>
                        <p><strong>Email:</strong> <span>info@blessedriverstone.co.ug</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/services">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Mineral Mining</a></li>
                        <li><a href="#">Mineral Export</a></li>
                        <li><a href="#">Mineral Import</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Products</h4>
                    <ul>
                        <li><a href="#">Gold</a></li>
                        <li><a href="#">Copper</a></li>
                        <li><a href="#">Tantalite</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Product Info</h4>
                    <ul>
                        <li><a href="#">Country-Uganda</a></li>
                        <li><a href="#">City-Kampala</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Blessed Riverstone Uganda Limited</strong>
                <span>All Rights
                    Reserved</span>
            </p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
