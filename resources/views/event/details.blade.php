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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets-event/css/base.css">
    <link rel="stylesheet" href="assets-event/css/vendor.css">
    <link rel="stylesheet" href="assets-event/css/main.css">

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
                    <h2>FOURFOLD.</h2>
                </a>
            </div>

            <div class="row home-content__main">

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

                    <div class="home-content__subscribe">
                        <form id="mc-form" class="group" novalidate="true">
                            <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                                placeholder="Email Address" required="">
                            <input type="submit" name="subscribe" value="Notify Me">
                            <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div>
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
        <div class="row info-wrapper">

            <h1 class="section">Price List</h1>
            <div class="main__cards cards">
                <div class="cards__inner">
                    <div class="cards__card card">
                        <h2 class="card__heading">Basic</h2>
                        <p class="card__price">$9.99</p>
                        <ul role="list" class="card__bullets flow">
                            <li>Access to standard workouts and nutrition plans</li>
                            <li>Email support</li>
                        </ul>
                        <a href="#basic" class="card__cta cta">Get Started</a>
                    </div>

                    <div class="cards__card card">
                        <h2 class="card__heading">Pro</h2>
                        <p class="card__price">$19.99</p>
                        <ul role="list" class="card__bullets flow">
                            <li>Access to advanced workouts and nutrition plans</li>
                            <li>Priority Email support</li>
                            <li>Exclusive access to live Q&A sessions</li>
                        </ul>
                        <a href="#pro" class="card__cta cta">Upgrade to Pro</a>
                    </div>

                    <div class="cards__card card">
                        <h2 class="card__heading">Ultimate</h2>
                        <p class="card__price">$29.99</p>
                        <ul role="list" class="card__bullets flow">
                            <li>Access to all premium workouts and nutrition plans</li>
                            <li>24/7 Priority support</li>
                            <li>1-on-1 virtual coaching session every month</li>
                            <li>Exclusive content and early access to new features</li>
                        </ul>
                        <a href="#ultimate" class="card__cta cta">Go Ultimate</a>
                    </div>
                </div>
                <div class="overlay__price cards__inner"></div>
            </div> <!-- end price list  -->

            <div class="container" data-aos="fade-up" id="booking">
                <div class="section-title">
                    <h2>Reservation</h2>
                    <p>Book a Package</p>
                </div>

                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-0 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                      <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-0 mt-md-0">
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
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
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Book a Table</button></div>
                </form>




            </div>

        </div> <!-- end info wrapper -->
    </div> <!-- end s-info -->

    <script src="assets-event/js/price.js"></script>

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

</body>

</html>
