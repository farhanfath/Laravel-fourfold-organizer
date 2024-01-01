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
    $partner = get_partner();
    $event = get_event();
@endphp

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Event Details</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap CSS ================================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets-event/css/base.css">
    <link rel="stylesheet" href="assets-event/css/vendor.css">
    <link rel="stylesheet" href="assets-event/css/main.css">

    <!-- Swiper CSS ================================================== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- script
    ================================================== -->
    <script src="assets-event/js/modernizr.js"></script>
    <script src="assets-event/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link href="assets-home/img/fourfold1-logo.png" rel="icon">
</head>

<body>

    <!-- home
    ================================================== -->
    <main class="s-home s-home--slides">

        <div class="home-slider">
            <div class="home-slider-img">
                <video autoplay muted loop playsinline>
                    <source src="assets-event/video/concert.mp4" type="video/mp4">
                </video>
            </div>
            <div class="home-slider-img">
                <video autoplay muted loop playsinline>
                    <source src="assets-event/video/weddingvid.mp4" type="video/mp4">
                </video>
            </div>
            <div class="home-slider-img" style="background-image: url(assets-event/images/slides/slide-02.jpg);"></div>
            <div class="home-slider-img" style="background-image: url(assets-event/images/slides/slide-03.jpg);"></div>
        </div>

        <div class="overlay"></div>

        <div class="home-content">

            <div class="home-logo">
                <a href="/">
                    <h2 style="font-family: 'Times New Roman', Times, serif;">FOURFOLD<span
                            style="color: #feb900">.</span></h2>
                </a>
            </div>

            <div class="home-content__main">

                <div class="col-eight home-content__text pull-right">
                    <h3>Welcome to Count</h3>

                    <h1>
                        We are currently working <br>
                        on a new super awesome <br> website.
                    </h1>

                    <p>
                        Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat.
                        Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                        Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat.
                    </p>

                    {{-- <div class="home-content__subscribe">
                        <form id="mc-form" class="group" novalidate="true">
                            <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                                placeholder="Email Address" required="">
                            <input type="submit" name="subscribe" value="Notify Me">
                            <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div> --}}
                </div> <!-- end home-content__text -->
            </div> <!-- end home-content__main -->

            <ul class="home-social">
                <li>
                    <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
                </li>
            </ul> <!-- end home-social -->

            <div class="row home-copyright">
                <span>Copyright 2023</span>
                <span><a href="#"> fourfold Organizer</a></span>
            </div> <!-- end home-copyright -->


            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

    </main> <!-- end s-home -->


    <!-- info
    ================================================== -->
    <a class="info-toggle" href="#0">
        <span class="info-menu-icon"></span>
    </a>

    <div class="s-info">

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Events</h2>
                    <p>Organize Your Events in our Restaurant</p>
                </div>

                <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="event-item">
                                <div class="col-lg-6">
                                    <img src="assets-home/img/event-birthday.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Birthday Parties</h3>
                                    <div class="price">
                                        <p><span>$189</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="event-item">
                                <div class="col-lg-6">
                                    <img src="assets-home/img/event-private.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Private Parties</h3>
                                    <div class="price">
                                        <p><span>$290</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="event-item">
                                <div class="col-lg-6">
                                    <img src="assets-home/img/event-custom.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Custom Parties</h3>
                                    <div class="price">
                                        <p><span>$99</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <div class="row info-wrapper">



            <div class="container" data-aos="fade-up" id="booking">
                <div class="section-title">
                    <h2>Reservation</h2>
                    <p>Book a Package</p>
                </div>

                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-0 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-0 mt-md-0">
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-0">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                            confirm your reservation. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Book a Table</button></div>
                </form>
            </div> <!-- end contact -->

        </div> <!-- end info wrapper -->
    </div> <!-- end s-info -->

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="assets-event/js/jquery-3.2.1.min.js"></script>
    <script src="assets-event/js/plugins.js"></script>
    <script src="assets-event/js/main.js"></script>

    <!-- Swiper JS
    ================================================== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mySwiper = new Swiper('.events-slider', {
                slidesPerView: 1, // Menampilkan satu testimonial pada satu waktu
                spaceBetween: 10, // Jarak antara testimonial
                loop: true, // Untuk pengalaman swipe yang tanpa batas
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>


</body>

</html>
