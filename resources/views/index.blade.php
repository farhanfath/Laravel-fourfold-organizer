@php
$site_name = get_setting_value('_site_name');
$jumbotron = get_section_data('JUMBOTRON');
$about = get_section_data('ABOUT');
$location = get_setting_value('_location');
$site_description = get_setting_value('_site_description');
$post_as = get_partner_data('post_as');
$post_as = get_event_data('post_as');

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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> --}}
  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          {{-- <img src="/themes/img/asal.png" class="header" alt="" /> --}}
          <img src="/themes/img/shapes/square.png" class="shape square" alt="" />
          <img src="/themes/img/shapes/circle.png" class="shape circle" alt="" />
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
          <img src="/themes/img/shapes/x.png" class="shape xshape" alt="" />
          <img src="/themes/img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="/themes/img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="/themes/img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="/themes/img/" class="letters" alt="" />
          <img src="/themes/img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
              <a href="../"><img src="/themes/img/four.png" alt="" /></a>
            </div>

            <div class="links">
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
                  <a href="#about">About</a>
                </li>
                {{-- <li>
                  <a href="#testimonials">Testimonials</a>
                </li> --}}
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li>
                  <a href="#hireme" class="active">Hire me</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
              <h1 class="header-title">{{ $site_name }}</h1>
              <p class="text">
                Hello, I'm Miley Brewer, web design and developer. Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Totam magni sit
                hic!
              </p>
              <a href="#" class="btn">Download CV</a>
            </div>

            <div class="column-2 image">
              <img
                src="/themes/img/shapes/points2.png"
                class="points points2"
                alt=""
              />
              <img src="/themes/img/person.png" class="img-element z-index" alt="" />
            </div>
          </div>
        </div>
      </header>

      {{-- service section --}}
      {{-- <section class="services section" id="services">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What I Do">Services</h3>
            <p class="text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
              vero?
            </p>
          </div>

          <div class="cards">
            <div class="card-wrap">
              <img
                src="/themes/img/shapes/points3.png"
                class="points points1 points-sq"
                alt=""
              />
              <div class="card" data-card="UI/UX">
                <div class="card-content z-index">
                  <img src="/themes/img/design-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Design</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                    est suscipit itaque?
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <div class="card" data-card="Code">
                <div class="card-content z-index">
                  <img src="/themes/img/code-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Development</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolores suscipit nobis dolore?
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <img
                src="/themes/img/shapes/points3.png"
                class="points points2 points-sq"
                alt=""
              />
              <div class="card" data-card="App">
                <div class="card-content z-index">
                  <img src="/themes/img/app-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">App Development</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum hic veniam nihil.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      {{-- Partner section --}}
      <section class="blog section" id="partner"> 
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Last News">partner</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo,
              deserunt?
            </p>
          </div>

          <div class="blog-wrapper">


            @foreach ($partner as $item)  
            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="{{ Storage::url($item->thumbnail) }}" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">August, 02 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. Sint atque culpa repellat
                    sunt sit amet nobis! Lorem ipsum dolor sit amet.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
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
            <img
              src="/themes/img/shapes/triangle.png"
              class="shape triangle"
              alt=""
            />
            <img src="/themes/img/shapes/x.png" class="shape xshape" alt="" />
          </div>
        </div>

        <div class="container"> 
          <div class="section-header">
            <h3 class="title" data-title="My works">event</h3>
          </div>

          <div class="section-body">
            {{-- Filter event --}}
            <div class="filter">
              <button class="filter-btn active" data-filter="*">All</button>
              <button class="filter-btn" data-filter=".ui">UI/UX</button>
              <button class="filter-btn" data-filter=".webdev">Web Dev</button>
              <button class="filter-btn" data-filter=".appdev">
                Mobile App
              </button>
              <button class="filter-btn" data-filter=".logo-design">
                Logo Design
              </button>
            </div>
            

            <div class="grid">
              @foreach ($event as $item)  
              <!-- Scrollable modal -->
              <div class="grid-item {{ $item->post_as }}" data-bs-toggle="modal" data-bs-target="#portfolioModal0">
                <div class="gallery-image ">
                  <img src="{{ Storage::url($item->thumbnail) }}" alt="..." />
                  <div class="img-overlay">
                    <div class="plus"><i class="fas fa-external-link fa-3x"></i></div>
                    <div class="img-description">
                      <h3>{{ $item ->title }}</h3>
                      <h5>{!! $item ->content !!}</h5>
                    </div>
                  </div>
                </div>
              </div> 
              @endforeach
            </div>
            {{-- <div class="more-folio">
              <a href="#" class="btn">More Folio</a>
            </div> --}}
          </div>
        </div>
      </section>


      <section class="about section" id="about">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Who Am I">About me</h3>
          </div>

          <div class="section-body grid-2">
            <div class="column-1">
              <h3 class="title-sm">Hello, I'm</h3>
              <p class="text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Praesentium distinctio doloribus quam? Ut, laudantium a dolore,
                minima repudiandae iure iste molestiae exercitationem earum
                neque tempora?
              </p>
              <div class="skills">
                <div class="skill html">
                  <h3 class="skill-title">HTML</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill css">
                  <h3 class="skill-title">CSS</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="80%"></div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn">Read more</a>
            </div>

            <div class="column-2 image">
              <img src="/themes/img/shapes/points4.png" class="points" alt="" />
              <img src="/themes/img/about.png" class="z-index" alt="" />
            </div>
          </div>
        </div>
      </section>

      {{-- <section class="records">
        <div class="overlay overlay-sm">
          <img src="/themes/img/shapes/square.png" alt="" class="shape square1" />
          <img src="/themes/img/shapes/square.png" alt="" class="shape square2" />
          <img src="/themes/img/shapes/circle.png" alt="" class="shape circle" />
          <img
            src="/themes/img/shapes/half-circle.png"
            alt=""
            class="shape half-circle"
          />
          <img src="/themes/img/shapes/wave.png" alt="" class="shape wave wave1" />
          <img src="/themes/img/shapes/wave.png" alt="" class="shape wave wave2" />
          <img src="/themes/img/shapes/x.png" alt="" class="shape xshape" />
          <img src="/themes/img/shapes/triangle.png" alt="" class="shape triangle" />
        </div>

        <div class="container">
          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="235">0</h2>
              <h4 class="sub-title">Projects</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle active">
              <h2 class="number" data-num="174">0</h2>
              <h4 class="sub-title">Happy Clients</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="892">0</h2>
              <h4 class="sub-title">Work Hour</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="368">0</h2>
              <h4 class="sub-title">Awards</h4>
            </div>
          </div>
        </div>
      </section> --}}

      {{-- <section class="testimonials section" id="testimonials">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What People Say">Testimonials</h3>
          </div>

          <div class="testi-content grid-2">
            <div class="column-1 reviews">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Laudantium adipisci veniam debitis quas, sapiente
                      repellendus mollitia. Laboriosam labore voluptate quos?
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Matias Butt</h3>
                      <h5 class="review-job">Photographer, Paris</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Fugiat voluptate consequatur aut tenetur fugit error
                      molestiae quaerat ex odio rem?
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Romeo Herbert</h3>
                      <h5 class="review-job">CEO, Munich</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Cupiditate voluptatum enim nemo quod amet dolorum aliquam,
                      sapiente omnis eaque consectetur.
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Jack Costa</h3>
                      <h5 class="review-job">Director of THR, London</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Perspiciatis ab incidunt, dicta quam inventore ipsum
                      dolor. Consectetur nam incidunt error!
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Reiss Mccartney</h3>
                      <h5 class="review-job">Engineer, San Francisco</h5>
                    </div>
                  </div>
                </div>

                <div class="review-nav swiper-button-prev">
                  <i class="fas fa-long-arrow-alt-left"></i>
                </div>
                <div class="review-nav swiper-button-next">
                  <i class="fas fa-long-arrow-alt-right"></i>
                </div>
              </div>
            </div>

            <div class="column-2 image">
              <img src="/themes/img/testi.png" alt="" class="img-element" />
            </div>
          </div>
        </div>
      </section> --}}

      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Get in touch</h3>
              <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                rerum odio incidunt doslorum officia dolorem eaque aprim?
              </p>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">92 Cherry Drive Unimodale, NY 11553</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">lorem@ipsum.com</p>
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
              <h3 class="title">Contact me</h3>
              <div class="row">
                <input
                  type="text"
                  class="contact-input"
                  placeholder="First Name"
                />
                <input
                  type="text"
                  class="contact-input"
                  placeholder="Last Name"
                />
              </div>

              <div class="row">
                <input type="text" class="contact-input" placeholder="Phone" />
                <input type="email" class="contact-input" placeholder="Email" />
              </div>

              <div class="row">
                <textarea
                  name="message"
                  class="contact-input textarea"
                  placeholder="Message"
                ></textarea>
              </div>
              <a href="#" class="btn">Send</a>
            </div>
          </div>
        </div>
      </section>

      <section class="hireme" id="hireme">
        <div class="container">
          <h3 class="title">Let's talk about a project</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio,
            culpa. Commodi suscipit animi officia dignissimos unde, ipsum fugiat
            consequuntur, fugit ratione vel aperiam, similique distinctio
            mollitia repellendus quasi rem vero!
          </p>
          <a href="#" class="btn">Hire me</a>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
              officiis quo officia quia?
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
                <a href="#about">About</a>
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
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">Web Dev</a>
              </li>
              <li>
                <a href="#">App Design</a>
              </li>
              <li>
                <a href="#">Marketing</a>
              </li>
              <li>
                <a href="#">UI Design</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-newstletter">
            <h3 class="title-sm">Subscribe</h3>
            <p class="text">
              Lorem ipsum dolor, sit amet ipsum dolor sit amet.
            </p>
            <div class="footer-input-wrap">
              <input type="email" class="footer-input" placeholder="Email" />
              <a href="#" class="input-arrow">
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2020 All rights reserved | Made by
              <span>{{ $site_name }}</span>
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow me</h3>
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

    <!-- Partner Modals-->
    @php
        $i = 0;
    @endphp

    @foreach ($event as $item)
    <!-- Partner Modal {{ $i }} -->
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $i }}" tabindex="-1" aria-labelledby="portfolioModal{{ $i }}" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Partner Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $item->title }}</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Partner Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="{{ Storage::url($item->thumbnail)}}" alt="..." />
                  <!-- Partner Modal - Text-->
                  {!! $item->content !!}
                  <div class="m-5">
                    Link : <a href="{{ $item->link }}" target="blank">{{ $item->link }}</a>
                  </div>
                  <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @php
        $i++;
    @endphp
    @endforeach
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/themes/js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/themes/js/app.js"></script>

    
    {{-- tambahan bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
