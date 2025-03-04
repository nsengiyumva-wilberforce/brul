@extends('app')

@section('title', 'Contact Us - Blessed Riverstones Uganda')
@section('description', 'Get in touch with Blessed Riverstones Uganda for inquiries, quotes, or more information about
    our riverstone products and services.')
@section('keywords', 'contact, riverstones, Uganda, inquiry, construction, stone products')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Contact Us</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <!-- Address -->
                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p>PLOT 1610, MAYANJA CLOSE, BUKOTO-KISASI RD<br>P.O. BOX 1172, KAMPALA, UGANDA</p>
                    </div>
                </div><!-- End Info Item -->

                <!-- Phone Numbers -->
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+256 414 673642/ +256 200 917871/ +256 772 906936/<br>+256 702 352536/ +256 780 385820</p>
                    </div>
                </div><!-- End Info Item -->

                <!-- Emails -->
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@blessedrivestones.co.ug<br>blessedrivestones.gold@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class="row gy-4 mt-1">
                <!-- Google Maps (Kampala Office) -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.739775106715!2d32.58258277480012!3d0.3478713640615443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb6f6a4c4b1b%3A0x1e8e7b7d3a0a3a3d!2sBukoto-Kisasi%20Rd%2C%20Kampala%2C%20Uganda!5e0!3m2!1sen!2sus!4v1717052345678"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <form id="contactForm" class="php-email-form">
                        @csrf
                        <!-- Success and Error Messages -->
                        <div id="responseMessage" class="alert" style="display: none;"></div>

                        <div class="row gy-3">
                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6"
                                    placeholder="Message (e.g., mineral type, volume, destination)" required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <div class="loading" style="display: none;">Loading...</div>
                                <button type="submit">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Quote Form -->

                <script>
                    document.getElementById("contactForm").addEventListener("submit", function(event) {
                        event.preventDefault(); // Prevent default form submission

                        let formData = new FormData(this);
                        let loadingIndicator = document.querySelector('.loading');
                        let responseMessage = document.getElementById('responseMessage');

                        // Show loading
                        loadingIndicator.style.display = 'block';

                        // Clear previous messages
                        responseMessage.style.display = 'none';
                        responseMessage.classList.remove('alert-success', 'alert-danger');

                        // Send the form data via AJAX
                        fetch("{{ route('contact-us') }}", {
                                method: 'POST',
                                body: formData,
                            })
                            .then(response => response.json())
                            .then(data => {
                                loadingIndicator.style.display = 'none'; // Hide loading indicator

                                if (data.status === 'success') {
                                    responseMessage.classList.add('alert-success');
                                    responseMessage.textContent = data.message;
                                } else {
                                    responseMessage.classList.add('alert-danger');
                                    responseMessage.textContent = data.message;
                                }

                                responseMessage.style.display = 'block';
                            })
                            .catch(error => {
                                loadingIndicator.style.display = 'none'; // Hide loading indicator
                                responseMessage.classList.add('alert-danger');
                                responseMessage.textContent = 'An error occurred. Please try again later.';
                                responseMessage.style.display = 'block';
                            });
                    });
                </script>
            </div>
        </div>
    </section><!-- /Contact Section -->
@endsection
