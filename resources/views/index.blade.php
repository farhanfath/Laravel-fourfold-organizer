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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $site_name }}</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/themes/css/style.css" />

    {{-- tambahan bootstrap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> --}}
  </head>
  <body>
    <main>
      <header id="header">
        {{-- swiper lobby --}}
        <swiper-container class="overlay overlay-lg mySwiper" pagination="true" pagination-clickable="true" loop="true"
        autoplay-delay="2500" autoplay-disable-on-interaction="false" style="--swiper-pagination-color: #fff;">
            <swiper-slide><img src="/themes/img/konser.png" alt="" class="overlay overlay-lg"></swiper-slide>
            <swiper-slide><img src="/themes/img/konser3.png" alt="" class="overlay overlay-lg"></swiper-slide>
        </swiper-container>

        <nav class="navbar">
          <div class="container">
            <div class="logo">
              <a href="#header"><img src="/themes/img/fourfold1-logo.png" alt="" /></a>
            </div>

            <div class="navbar-menu links">
              <ul>
                <li>
                  <a href="#header">Home</a>
                </li>
                <li>
                  <a href="#partner">partner</a>
                </li>
                <li>
                  <a href="#event">event</a>
                </li>
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li>
                  <a href="/about" class="active">About</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>
        <br><br><br><br>
        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
              <h1 class="header-title">{{ $site_name }}</h1>
              <p class="text">
                {{ $site_description  }}
              </p>
            </div>
          </div>
        </div>
      </header>


      {{-- Partner section --}}
      <section class="blog section" id="partner"> 
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Last News">partner</h3>
            <p class="text">
              partnership that support us
            </p>
          </div>

          <swiper-container class="blog-wrapper" id="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
          slides-per-view="3" style="--swiper-pagination-color: #fff">
              @foreach ($partner as $item)  
              <swiper-slide class="blog-wrap">
                <div class="blog-card">
                  <div class="blog-image">
                    <img src="{{ Storage::url($item->thumbnail) }}" alt="" />
                  </div>

                  <div class="blog-content">
                    <div class="blog-info">
                      <h5 class="blog-date">{{ $item->updated_at->format('Y-m-d') }}</h5>
                      {{-- <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5> --}}
                    </div>
                    <h3 class="title-sm">{{ $item ->title }}</h3>
                    <p class="blog-text">
                      {!! $item ->content !!}
                    </p>
                    <br>
                    <a href="{{ $item->link }}" class="btn small" target="blank">Join Us Now</a>
                  </div>
                </div>
              </swiper-slide>
              <div class="swiper-pagination"></div>
              @endforeach
          </swiper-container>
        </div>
      </section>

      <section class="portfolio section" id="event">
        <div class="background-bg">
          <div class="overlay overlay-sm">
            <img
              src="/themes/img/shapes/half-circle.png"
              class="shape half-circle1"
              alt=""
            />
            <img
              src="/themes/img/shapes/half-circle.png"
              class="shape half-circle2"
              alt=""
            />
            <img src="/themes/img/shapes/square.png" class="shape square" alt="" />
            <img src="/themes/img/shapes/wave.png" class="shape wave" alt="" />
            <img src="/themes/img/shapes/circle.png" class="shape circle" alt="" />
            <img src="/themes/img/shapes/triangle.png" class="shape triangle" alt=""/>
            <img src="/themes/img/shapes/x.png" class="shape xshape" alt=""/>
          </div>
        </div>

        <div class="container"> 
          <div class="section-header">
            <h3 class="title" data-title="Our Services">event</h3>
          </div>

          <div class="section-body">
            {{-- Filter event --}}
            <div class="filter">
              <button class="filter-btn active" data-filter="*">All</button>
              <button class="filter-btn" data-filter=".festival">Festival</button>
              <button class="filter-btn" data-filter=".party">Party</button>
              <button class="filter-btn" data-filter=".concert">
                Concert
              </button>
              <button class="filter-btn" data-filter=".workshop">
                Workshop
              </button>
            </div>

            {{-- event section --}}
            <div class="grid">
              @foreach ($event as $item)  
              <!-- Scrollable modal -->
              <div class="grid-item {{ $item->post_as }}">
                <div class="gallery-image">
                  <img src="{{ Storage::url($item->thumbnail) }}" alt="..." />
                  <a class="img-overlay" href="{{ $item ->link }}"> 
                      <div class="plus"></div>
                      <div class="img-description">
                        <h3>{{ $item ->title }}</h3>
                        <h5>{!! $item ->content !!}</h5>
                      </div>
                  </a>
                </div>
              </div> 

              @endforeach
            </div>
          </div>
        </div>
      </section>



      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Get in touch</h3>
              <p class="text">
                Need a hand? We got you.
              </p>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">{{ $location }}</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">fourfold@gmail.com</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <p class="info-text">123-456-789</p>
                </div>
              </div>
            </div>

            <div class="contact-form">
              <h3 class="title">Contact Us</h3>
              <form action="https://formsubmit.co/fc0c39b0b97dffe5632ecbe81be7fbcc"method="post">
                <div class="row">
                  <input type="text" class="contact-input" placeholder="Name"/>
                </div>
                <div class="row">
                  <input type="text" class="contact-input" placeholder="Phone" />
                  <input type="email" class="contact-input" placeholder="Email" />
                </div>
                <div class="row">
                  <textarea name="message" class="contact-input textarea" placeholder="Message"></textarea>
                  <input type="hidden" name="_captcha" value="false">
                </div>
                <button class="btn" type="submit">send</button>    
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About</h3>
            <p class="text">
              Event Organizer for talented youth generation
            </p>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Links</h3>
            <ul>
              <li>
                <a href="#services">Services</a>
              </li>
              <li>
                <a href="#portfolio">Portfolio</a>
              </li>
              <li>
                <a href="#testimonials">Testimonials</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Services</h3>
            <ul>
              <li>
                <a href="#">Festival</a>
              </li>
              <li>
                <a href="#">Party</a>
              </li>
              <li>
                <a href="#">Concert</a>
              </li>
              <li>
                <a href="#">Workshop</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2023 All rights reserved | Made by
              <span>{{ $site_name }}</span>
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow Us</h3>
              <span class="footer-line"></span>
              <div class="social-media">
                <a href="{{ $facebook }}">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ $twitter }}">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="{{ $instagram }}">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="{{ $youtube }}">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>

            <div class="back-btn-wrap">
              <a href="#" class="back-btn">
                <i class="fas fa-chevron-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/themes/js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/themes/js/app.js"></script>

    {{-- tambahan bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    {{-- tambahan swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  </body>
</html>
