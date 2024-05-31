@php
    $site_name = get_setting_value('_site_name');
    $jumbotron = get_section_data('JUMBOTRON');
    $about = get_section_data('ABOUT');

    // setting
    $location = get_setting_value('_location');
    $site_description = get_setting_value('_site_description');

    $post_as = get_partner_data('post_as');
    $post_as = get_event_data('post_as');

    // setting list link
    $youtube = get_setting_value('_youtube');
    $facebook = get_setting_value('_facebook');
    $instagram = get_setting_value('_instagram');
    $twitter = get_setting_value('_twitter');

    // all data
    $section = get_section();
    $partner = get_partner();
    $event = get_event();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $site_name }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets-home/img/fourfold1-logo.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets-home/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets-home/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets-home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets-home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets-home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets-home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets-home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets-home/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <nav id="topbar" class="fh5co-nav" role="navigation">
                <div class="col-xs-12 text-center logo-wrap">
                    <div id="fh5co-logo"><a href="/"
                            style="text-transform: uppercase;">{{ $site_name }}<span>.</span></a></div>
                </div>
            </nav>

        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#event">Event</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">testimonials</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#partner">Partner</a></li>
                    <li class="dropdown"><a href="#"><span>More Link</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/about">About us</a></li>
                            <li class="dropdown"><a href="#"><span>More Gallery</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/gallery">All Events</a></li>
                                    <li><a href="/wedding">Wedding</a></li>
                                    <li><a href="/party">Party</a></li>
                                    <li><a href="/festival">Festival</a></li>
                                    <li><a href="/concert">Concert</a></li>
                                    <li><a href="/workshop">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Services</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/details-wedding">Wedding</a></li>
                                    <li><a href="/details-party">Party</a></li>
                                    <li><a href="/details-concert">Concert</a></li>
                                    <li><a href="/details-workshop">Workshop</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#contact" class="book-a-table-btn scrollto d-none d-lg-flex">contact us</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>We Are <span>{{ $site_name }}</span></h1>
                    <h2>{{ $site_description }}</h2>

                    {{-- <div class="btns">
            <a href="/about" class="btn-menu animated fadeInUp scrollto"></a>
          </div> --}}
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=FBx38gbMPco" class="glightbox play-btn"></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="video-wrap">
                            <video autoplay="" loop="" muted="" class="custom-video"
                                poster="">
                                <source src="themes-video/video/weddingvid.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>{{ $site_name }} Event Organizer</h3>
                        <p class="fst-italic">
                            Penyedia layanan acara yang siap mengubah ide-ide Anda menjadi peristiwa spektakuler!
                            Dengan pengalaman kami sebagai Event Organizer, kami siap mengatur berbagai jenis acara
                            mulai dari pernikahan hingga acara korporat dengan penuh dedikasi dan keahlian.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Membantu membangun acara milik anda dengan totalitas
                            </li>
                            <li><i class="bi bi-check-circle"></i> Menciptakan pengalaman yang mengesankan bagi seluruh
                                hadirin </li>
                            <li><i class="bi bi-check-circle"></i> Memberikan sebuah konsep yang kreatif </li>
                        </ul>
                        <p>
                            Kreasikan momen tak terlupakan Anda bersama kami!
                            Bersama kami Fourfold,
                            kami siap menghadirkan pengalaman acara yang spektakuler dan sesuai dengan keinginan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Why Us</h2>
                    <p>Why Choose {{ $site_name }}?</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span><i class="bi bi-palette"></i></span>
                            <h4>Creative</h4>
                            <p>Kami memberikan sebuah konsep yang kreatif dan unik sehingga dapat menjadikan momen
                                menjadi tak terlupakan</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span><i class="bi bi-clock"></i></span>
                            <h4>Time Saving</h4>
                            <p>Kami berkolaborasi dengan banyak partner event sehingga membantu anda menghemat waktu
                                untuk merekrut vendor dalam jumlah banyak</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span><i class="bi bi-lightbulb"></i></span>
                            <h4>Innovative Ideas</h4>
                            <p>Kami memperkenalkan sebuah acara dengan segala pengalaman yang baru bagi seleuruh hadirin
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="event" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Event</h2>
                    <p>Check Our event</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    {{-- Filter --}}
                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-wedding">Wedding</li>
                        <li data-filter=".filter-party">Party</li>
                        <li data-filter=".filter-concert">Concert</li>
                        <li data-filter=".filter-workshop">Workshop</li>
                    </ul><!-- End event Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($event as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->post_as }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ Storage::url($item->thumbnail) }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4 style="color: black; font-weight: bold;">{{ $item->title }}</h4>
                                        <p>{!! $item->content !!}</p>
                                        <a href="{{ Storage::url($item->thumbnail) }}" title="{{ $item->title }}"
                                            data-gallery="portfolio-gallery-{{ $item->post_as }}"
                                            class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                        <a href="{{ $item->link }}" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->
                        @endforeach
                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What they're saying about us</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($section as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ $item->content }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ Storage::url($item->thumbnail) }}" class="testimonial-img"
                                        alt="">
                                    <h3>{{ $item->title }}</h3>
                                    <h4>{{ $item->subtitle }}</h4>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Some photos from Our Events</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">

                    @php $counter = 0 @endphp

                    @foreach ($event as $item)
                        @if ($counter < 8)
                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="{{ Storage::url($item->thumbnail) }}" class="gallery-lightbox"
                                        data-gall="gallery-item">
                                        <img src="{{ Storage::url($item->thumbnail) }}" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            @php $counter++ @endphp
                        @endif
                    @endforeach

                </div>
            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= partner Section ======= -->
        <section id="partner" class="chefs  ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Partner</h2>
                    <p>Our Partner</p>
                </div>

                <div class="row">
                    @foreach ($partner as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <img src="{{ Storage::url($item->thumbnail) }}" class="photo-sizing img-fluid"
                                    alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h3>{{ $item->title }}</h3>
                                        <span>{!! $item->content !!}</span>
                                    </div>
                                    <div class="social">
                                        <a href="{{ $item->link }}" target="blank"><i
                                                class="bi bi-box-arrow-up-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End partner Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.646799339649!2d106.95411047607176!3d-6.178012060539287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b00d3454fc5%3A0xacd1835e26adc7bf!2sJakarta%20Garden%20City%20JGC%20-%20Cakung!5e0!3m2!1sid!2sid!4v1702144692212!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>{{ $location }}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $site_name }}@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 8131 2345 678</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="#" class="php-email-form" id="myForm">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="namaPengirim" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="linkemail" placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                              </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" id="message" name="message" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" id="btnEmail">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3 class="text-white h2 mb-0"
                                style="font-family: 'Times New Roman', Times, serif; text-transform: uppercase;">
                                {{ $site_name }}<span style="color: #feb900;">.</span></h3>
                            <br>
                            <p style="font-family: Arial, Helvetica, sans-serif">
                                <strong>Phone&nbsp;:&nbsp;</strong> +62 8131 2345 678<br>
                                <strong>Email&nbsp;:&nbsp;</strong> {{ $site_name }}@example.com<br>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/gallery">Gallery</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/details-wedding">Wedding</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/details-party">Party</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="details-concert">Concert</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="details-workshop">Workshop</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links text-center">
                        <h4>Our Social Media</h4>
                        <div class="social-links mt-3">
                            <a href="{{ $twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{ $facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{ $instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{ $youtube }}" class="google-plus"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ $site_name }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets-home/vendor/aos/aos.js"></script>
    <script src="assets-home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-home/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets-home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets-home/vendor/php-email-form/validate.js"></script>
    <script src="assets-home/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-home/vendor/purecounter/purecounter_vanilla.js"></script>
    <!-- Template Main JS File -->
    <script src="assets-home/js/main.js"></script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- smtp --}}
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>
