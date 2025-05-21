   @extends('app')
   @section('title', 'Home - Blessed Riverstones Uganda')
   @section('description',
       'Welcome to the home page of Blessed Riverstones Uganda, where we specialize in riverstone
       products.')
   @section('keywords', 'riverstones, Uganda, home, riverstone products')
   @section('content')
       <!-- Hero Section -->
       <section id="hero" class="hero section dark-background mt-5">

           <div class="info d-flex align-items-center">
               <div class="container">
                   <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                       <div class="col-lg-6 text-center">
                           <h2>Blessed Riverstones Uganda Ltd</h2>
                           <p>
                               Blessed RiverStones (U) Limited is a registered Ugandan entity specializing in mining and
                               export of precious minerals, including gold, diamonds, copper, and tantalite.
                               Licensed by the Ministry of Energy and Mineral Development and compliant with
                               the Anti-Money Laundering Act, we operate with integrity and transparency.
                           </p>
                       </div>
                   </div>
               </div>
           </div>

           <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

               <div class="carousel-item">
                   <img src="assets/img/min-1.jpg" alt="">
               </div>

               <div class="carousel-item active">
                   <img src="assets/img/min-2.jpg" alt="">
               </div>

               {{-- <div class="carousel-item">
                   <img src="assets/img/min-3.jpg" alt="">
               </div> --}}

               <div class="carousel-item">
                   <img src="assets/img/min-4.jpg" alt="">
               </div>

               <div class="carousel-item">
                   <img src="assets/img/min-5.jpg" alt="">
               </div>

               <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
               </a>

               <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                   <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
               </a>

           </div>

       </section><!-- /Hero Section -->

       <!-- Get Started Section -->
       <section id="get-started" class="get-started section">
           <div class="container">
               <div class="row justify-content-between gy-4">
                   <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                       <div class="content">
                           <h3>Ethical Mineral Trade Solutions for Global Markets</h3>
                           <p>
                               At Blessed RiverStones (U) Limited, we combine Ugandan mineral wealth with international
                               compliance standards. Licensed by the Ministry of Energy and registered with
                               the Financial Intelligence Authority (FIA-2023-0001489), we ensure transparent sourcing and
                               export of gold, diamonds, copper, and tantalite. Our Kampala-based operations are backed by
                               certifications from the Uganda National Chamber of Commerce and CITI Bank-backed financial
                               integrity.
                           </p>
                           <p>
                               Partner with us for end-to-end mineral solutions: from ethical mining practices to seamless
                               global logistics. We prioritize quality, regulatory adherence, and sustainable partnerships
                               to deliver value across continents.
                           </p>
                       </div>
                   </div>

                   <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                       <form id="contactForm" class="php-email-form">
                           @csrf
                           <h3 style="color: #6EC5E9;">Request a Partnership Proposal</h3>
                           <p>
                               Explore tailored mineral sourcing or export opportunities. Share your requirements, and our
                               team will provide competitive pricing, compliance details, and logistics plans within 24
                               hours.
                           </p>

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
                           fetch("{{ route('contact-us-email') }}", {
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
       </section><!-- /Get Started Section -->

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
                                           Ethically mined and globally certified. Our gold meets LBMA
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

       <!-- Why Us Section -->
       <section id="why-us" class="why-us section">

           <!-- Section Title -->
           <div class="container section-title" data-aos="fade-up">
               <h2>Why Us</h2>
               <p>We stand for the following(Our Mission, Our Values, Our Vision)</p>
           </div><!-- End Section Title -->

           <div class="container">

               <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                   <div class="col-md-4">
                       <div class="card">
                           <div class="img">
                               <img src="assets/img/why-us-1.jpg" alt="" class="img-fluid">
                               <div class="icon"><i class="bi bi-hdd-stack"></i></div>
                           </div>
                           <h2 class="title"><a href="#" class="stretched-link">Our Mission</a></h2>
                           <p>
                               To provide a safe, reliable, and secure mineral sourcing, trading, and delivery platform for
                               both buyers and sellers, ensuring satisfaction for all, regardless of race, color, or origin.
                           </p>
                       </div>
                   </div><!-- End Card Item -->

                   <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                       <div class="card">
                           <div class="img">
                               <img src="assets/img/why-us-2.jpg" alt="" class="img-fluid">
                               <div class="icon"><i class="bi bi-brightness-high"></i></div>
                           </div>
                           <h2 class="title"><a href="#" class="stretched-link">Our Values</a></h2>
                           <p>
                               We are grounded in pure African and religious values of humanity, honesty, and prosperity for
                               all.

                           </p>
                       </div>
                   </div><!-- End Card Item -->

                   <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                       <div class="card">
                           <div class="img">
                               <img src="assets/img/why-us-3.jpg" alt="" class="img-fluid">
                               <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                           </div>
                           <h2 class="title"><a href="#" class="stretched-link">Our Vision</a></h2>
                           <p>
                               Blessed Riverstones (U) Limited (BRUL) aspires to be the leading link between miners and
                               buyers worldwide, connecting hard-to-reach communities to the global market for the benefit
                               of both parties. With a versatile team of logistics experts, we expedite negotiations and
                               ensure the timely and efficient delivery of consignments to their destinations.
                               We provide answers and dispel myths surrounding mineral mining and trade on the African
                               continent, offering the most essential professional knowledge on acquisition, processing, and
                               trade. Our purpose is to empower mining communities with critical developmental,
                               environmental, and technical knowledge.
                               We envision a holistic, secure, and beneficial mineral world for all.
                           </p>
                       </div>
                   </div><!-- End Card Item -->

               </div>

           </div>

       </section><!-- /Why Us Section -->

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
                               Compliant with Ministry of Energy guidelines.</p>
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
                       </div>
                   </div><!-- End Service Item -->
                   <!-- Value Addition & Smelting -->
                   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                       <div class="service-item position-relative">
                           <div class="icon">
                               <i class="fa-solid fa-fire"></i>
                           </div>
                           <h3>Value Addition & Smelting</h3>
                           <p>Refining and smelting of minerals to increase purity and market value, ensuring compliance
                               with
                               international standards.</p>
                       </div>
                   </div><!-- End Service Item -->

                   <!-- Mining Consultation Services -->
                   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                       <div class="service-item position-relative">
                           <div class="icon">
                               <i class="fa-solid fa-comments"></i>
                           </div>
                           <h3>Mining Consultation Services</h3>
                           <p>Expert advisory on mineral investments, regulatory compliance, and sustainable mining
                               strategies
                               tailored to your business.</p>
                       </div>
                   </div><!-- End Service Item -->
               </div>
           </div>
       </section><!-- /Services Section -->

       <!-- Why Partner with us Section -->
       <section id="alt-services" class="alt-services section">
           <div class="container">
               <div class="row justify-content-around gy-4">
                   <!-- Image Section -->
                   <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                       <img src="assets/img/min-1.jpg" alt="Ethical Gold Mining in Uganda – MDL 20240338 Certified">
                   </div>

                   <!-- Content Section -->
                   <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up"
                       data-aos-delay="200">
                       <h3>Why Partner With Us?</h3>
                       <p>
                           As Uganda’s licensed mineral exporter (Registration No: 80020003113202), we guarantee ethically
                           sourced gold, diamonds, copper, and tantalite. Our FIA-2023-0001489 certification ensures AML
                           compliance, while CITI Bank-backed transactions prioritize your financial security.
                       </p>

                       <!-- Globally Certified Products -->
                       <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                           <i class="bi bi-globe flex-shrink-0"></i>
                           <div>
                               <h4><a href="#" class="stretched-link">Globally Certified Minerals</a></h4>
                               <p>Lab-tested purity with Ministry of Energy approval. Export-ready for EU,
                                   Asia, and Americas.</p>
                           </div>
                       </div><!-- End Icon Box -->

                       <!-- Secure Financial Logistics -->
                       <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                           <i class="bi bi-shield-check flex-shrink-0"></i>
                           <div>
                               <h4><a href="#" class="stretched-link">Secure Transactions</a></h4>
                               <p>Guaranteed payments via DFCU Bank (Account 02360010088883) and SWIFT-enabled global
                                   transfers.</p>
                           </div>
                       </div><!-- End Icon Box -->

                       <!-- Ethical Sourcing -->
                       <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                           <i class="bi bi-gem flex-shrink-0"></i>
                           <div>
                               <h4><a href="#" class="stretched-link">Conflict-Free Supply Chain</a></h4>
                               <p>Traceable mining at Plot 1610, Bukoto-Kisasi Road. Aligned with Uganda National Chamber of
                                   Commerce standards.</p>
                           </div>
                       </div><!-- End Icon Box -->

                       <!-- Fast Turnaround -->
                       <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                           <i class="bi bi-speedometer2 flex-shrink-0"></i>
                           <div>
                               <h4><a href="#" class="stretched-link">24-Hour Export Readiness</a></h4>
                               <p>Pre-cleared shipments via Kampala Capital City Authority (KCCA License 0000490015).</p>
                           </div>
                       </div><!-- End Icon Box -->
                   </div>
               </div>
           </div>
       </section><!-- /why partner with us Section -->

       <!-- Projects Section -->
       <section id="projects" class="projects section">
           <!-- Section Title -->
           <div class="container section-title" data-aos="fade-up">
               <h2>Gallery</h2>
               <p>Explore our ethical mining journey through certified processes and sustainable practices in Uganda’s
                   mineral-rich landscapes</p>
           </div><!-- End Section Title -->

           <div class="container">
               <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                   <!-- Portfolio Filters -->
                   <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                       <li data-filter="*" class="filter-active">All</li>
                       <li data-filter=".filter-operations">Mining Operations</li>
                       <li data-filter=".filter-quality">Quality Control</li>
                       {{-- <li data-filter=".filter-extraction">Manual Extraction</li> --}}
                       <li data-filter=".filter-facilities">Our Facilities</li>
                   </ul><!-- End Portfolio Filters -->

                   <!-- Gallery Items -->
                   <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                       <!-- Open-Pit Mining Activity -->
                       <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-operations">
                           <div class="portfolio-content h-100">
                               <img src="assets/img/min-1.jpg" class="img-fluid"
                                   alt="Blessed RiverStones Uganda open-pit gold mining">
                               <div class="portfolio-info">
                                   <h4>Open-Pit Gold Mining</h4>
                                   <p>Licensed extraction under MDL 20240338, adhering to Ministry of Energy guidelines</p>
                                   <a href="assets/img/min-1.jpg" title="Gold Mining" data-gallery="portfolio-gallery"
                                       class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>

                           <div class="portfolio-content h-100">
                               <img src="assets/img/img-8.jpeg" class="img-fluid"
                                   alt="Blessed RiverStones Uganda open-pit gold mining">
                               <div class="portfolio-info">
                                   <h4>Harmless Mining Methods</h4>
                                   <p>A group of our employees manually extract our minerals mechanically to prevent
                                       environment harm</p>
                                   <a href="assets/img/img-8.jpeg" title="Gold Mining" data-gallery="portfolio-gallery"
                                       class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>


                           <div class="portfolio-content h-100">
                               <img src="assets/img/img-11.jpeg" class="img-fluid"
                                   alt="Blessed RiverStones Uganda open-pit gold mining">
                               <div class="portfolio-info">
                                   <h4>Open-Pit Gold Mining</h4>
                                   <p>Gold Extraction</p>
                                   <a href="assets/img/img-11.jpeg" title="Gold Mining" data-gallery="portfolio-gallery"
                                       class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>

                           <div class="portfolio-content h-100">
                               <img src="assets/img/img-13.jpeg" class="img-fluid"
                                   alt="Blessed RiverStones Uganda tool cleaning">
                               <div class="portfolio-info">
                                   <h4>Tool cleaning</h4>
                                   <p>Blessed Riverstones cleaning tools</p>
                                   <a href="assets/img/img-13.jpeg" title="Gold Mining" data-gallery="portfolio-gallery"
                                       class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->

                       <!-- Mineral Quality Inspection -->
                       <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-quality">
                           <div class="portfolio-content h-100">
                               <img src="assets/img/min-2.jpg" class="img-fluid"
                                   alt="Quality assurance for Ugandan tantalite">
                               <div class="portfolio-info">
                                   <h4>Laboratory Testing</h4>
                                   <p>FIA-certified (FIA-2023-0001489) purity checks for global export standards</p>
                                   <a href="assets/img/min-2.jpg" title="Quality Assurance"
                                       data-gallery="portfolio-gallery" class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->

                       <!-- Ethical Manual Extraction -->
                       <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-extraction">
                           <div class="portfolio-content h-100">
                               <img src="assets/img/min-3.jpeg" class="img-fluid"
                                   alt="Blessed Riverstone artisanal copper extraction in Uganda">
                               <div class="portfolio-info">
                                   <h4>Artisanal Copper Mining</h4>
                                   <p>Community-focused methods aligned with the License of Uganda</p>
                                   <a href="assets/img/min-3.jpeg" title="Manual Extraction"
                                       data-gallery="portfolio-gallery" class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->

                       <!-- Corporate Headquarters -->
                       <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-facilities">
                           <div class="portfolio-content h-100">
                               <img src="assets/img/min-4.jpg" class="img-fluid"
                                   alt="Blessed RiverStones Uganda headquarters in Kampala">
                               <div class="portfolio-info">
                                   <h4>Kampala Headquarters</h4>
                                   <p>Plot 1610, Mayanja Close – Hub for global mineral trade coordination</p>
                                   <a href="assets/img/min-4.jpg" title="Corporate Office"
                                       data-gallery="portfolio-gallery" class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->

                       <!-- Sustainable Mining Tools -->
                       <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-operations">
                           <div class="portfolio-content h-100">
                               <img src="assets/img/min-5.jpg" class="img-fluid"
                                   alt="Sustainable tantalite mining tools in Uganda">
                               <div class="portfolio-info">
                                   <h4>Eco-Friendly Extraction</h4>
                                   <p>Low-impact techniques endorsed by Uganda National Chamber of Commerce</p>
                                   <a href="assets/img/min-5.jpg" title="Sustainable Tools"
                                       data-gallery="portfolio-gallery" class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->

                       <!-- Sustainable Mining Tools -->
                       <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-operations">
                           <div class="portfolio-content h-100">
                               <img src="assets/img/min-6.jpg" class="img-fluid"
                                   alt="Sustainable tantalite mining tools in Uganda">
                               <div class="portfolio-info">
                                   <h4>Refining Gold</h4>
                                   <p>Refine Gold to remove impurities</p>
                                   <a href="assets/img/min-6.jpg" title="Sustainable Tools"
                                       data-gallery="portfolio-gallery" class="glightbox preview-link">
                                       <i class="bi bi-zoom-in"></i>
                                   </a>
                               </div>
                           </div>
                       </div><!-- End Portfolio Item -->
                   </div><!-- End Portfolio Container -->
               </div>
           </div>
       </section><!-- /Projects Section -->

       <!-- Team Section -->
       <section id="team" class="team section">

           <!-- Section Title -->
           <div class="container section-title" data-aos="fade-up">
               <h2>Team</h2>
               <div><span>Check Our</span> <span class="description-title">Team</span></div>
           </div><!-- End Section Title -->

           <div class="container">

               <div class="row gy-4">

                   <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                       <div class="member">
                           <img src="assets/img/avatar.png" class="img-fluid" alt="">
                           <h4>Jailes Bahati</h4>
                           <span>Director</span>
                       </div>
                   </div><!-- End Team Member -->

                   <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                       <div class="member">
                           <img src="assets/img/avatar.png" class="img-fluid" alt="">
                           <h4>Simon Obel Omondi</h4>
                           <span>Director Operations</span>
                       </div>
                   </div><!-- End Team Member -->


                   <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                       <div class="member">
                           <img src="assets/img/avatar.png" class="img-fluid" alt="">
                           <h4>David Musenero</h4>
                           <span>Director Marketing</span>
                       </div>
                   </div><!-- End Team Member -->

               </div>

           </div>

       </section><!-- /Team Section -->

       <!-- Recent Blog Posts Section -->
       <section id="recent-blog-posts" class="recent-blog-posts section">

           <!-- Section Title -->
           <div class="container section-title" data-aos="fade-up">
               <h2>Recent Blog Posts</h2>
               <p>Know what we are doing to serve you better! Keep up to date.</p>
           </div><!-- End Section Title -->

           <div class="container">

               <div class="row gy-5">
                   @foreach ($news as $item)
                       <div class="col-xl-4 col-md-6">
                           <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                               <div class="post-img position-relative overflow-hidden">
                                   <img src="{{ asset('assets/img/blog/blog-banner.png') }}" class="img-fluid"
                                       alt="Blessed Riverstone uganda Limited">
                                   <span class="post-date">{{ $item->created_at->format('F') }}
                                       {{ $item->created_at->format('d') }}</span>
                               </div>

                               <div class="post-content d-flex flex-column">

                                   <h3 class="post-title">{{ $item->title }}</h3>
                                   <hr>

                                   <a href="/news-detail/{{ $item->id }}" class="readmore stretched-link"><span>Read
                                           More</span><i class="bi bi-arrow-right"></i></a>

                               </div>

                           </div>
                       </div><!-- End post item -->
                   @endforeach
               </div>

           </div>

       </section><!-- /Recent Blog Posts Section -->

   @endsection
