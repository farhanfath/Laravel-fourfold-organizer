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
                    <source src="assets-event/video/weddingvid.mp4" type="video/mp4">
                </video>
            </div>

            <div class="home-slider-img">
                <video autoplay muted loop playsinline>
                    <source src="assets-event/video/wedding2.mp4" type="video/mp4">
                </video>
            </div>

            <div class="home-slider-img">
                <video autoplay muted loop playsinline>
                    <source src="assets-event/video/beachwedding.mp4" type="video/mp4">
                </video>
            </div>

            <div class="home-slider-img">
                <video autoplay muted loop playsinline>
                    <source src="assets-event/video/nightwedding.mp4" type="video/mp4">
                </video>
            </div>

        </div>

        <div class="overlay"></div>

        <div class="home-content">

            <div class="home-logo">
                <a href="/">
                    <h2 style="font-family: 'Times New Roman', Times, serif; text-transform: uppercase;">
                        {{ $site_name }}<span style="color: #feb900">.</span></h2>
                </a>
            </div>

            <div class="home-content__main">

                <div class="col-eight home-content__text pull-right">
                    <h3>Welcome to Fourfold Organizer!</h3>

                    <h1>
                        Let us organize your dream wedding into a magical and unforgettable moment.
                    </h1>

                    <p>
                        At Fourfold Organizer, we believe that every wedding is a unique and personal expression of
                        love.
                        That's why we offer customized event-organizing services that cater to your individual needs and
                        preferences.
                        We have a network of trusted vendors and partners who can provide everything you need for your
                        wedding, from venue, and decor, to entertainment, photography, and videography.
                    </p>

                </div> <!-- end home-content__text -->
            </div> <!-- end home-content__main -->

            <ul class="home-social">
                <li>
                    <a href="{{ $facebook }}"><i class="fab fa-facebook-f"
                            aria-hidden="true"></i><span>Facebook</span></a>
                </li>
                <li>
                    <a href="{{ $twitter }}"><i class="fab fa-twitter"
                            aria-hidden="true"></i><span>Twiiter</span></a>
                </li>
                <li>
                    <a href="{{ $instagram }}"><i class="fab fa-instagram"
                            aria-hidden="true"></i><span>Instagram</span></a>
                </li>
                <li>
                    <a href="{{ $youtube }}"><i class="fab fa-youtube"
                            aria-hidden="true"></i><span>Youtube</span></a>
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
                    <p>Organize Your Events with Us</p>
                </div>

                <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($event as $item)
                            @if ($item->post_as === 'wedding')
                                <div class="swiper-slide">
                                    <div class="event-item">
                                        <div class="col-lg-6">
                                            <img src="{{ Storage::url($item->thumbnail) }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                                            <h3>{{ $item->title }}</h3>
                                            <div class="price">
                                                <p><span>{{ $item->price }}</span></p>
                                            </div>
                                            <p class="fst-italic">
                                                {!! $item->deskripsi !!}
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                            @endif
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <div class="row info-wrapper">



            <div class="container" data-aos="fade-up" id="booking">
                <div class="section-title">
                    <h2>Reservation</h2>
                    <p>Make a Reservation</p>
                </div>

                <form
                    action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdJd5A6NB_Y-nayMcFcLqOFbo6GDk3mBmxTDLOvwiATKUCh3A/formResponse"
                    id="myForm" method="post" role="form" class="php-email-form" data-aos="fade-up" target="_blank"
                    data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group mt-0 mt-md-0">
                            <input type="email" class="form-control" name="emailAddress" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"
                                required>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="entry.169393584" class="form-control" id="name"
                                placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                required>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-0 mt-md-0">
                            <input type="text" class="form-control" name="entry.1007643834" id="phone"
                                placeholder="Your Phone" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" required>
                        </div>
                    </div>
                    <div class="form-group mt-0">
                        <textarea class="form-control" name="entry.1994901952" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit" onclick="deleteForm()">Book a Reservation</button></div>
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
        new Swiper('.events-slider', {
            speed: 600,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });

        function deleteForm() {
            setTimeout(function() {
                document.getElementById("myForm").reset();
            }, 1500);
        }

        
    </script>


</body>

</html>
