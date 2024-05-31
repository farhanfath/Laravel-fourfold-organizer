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
  <title>{{ $site_name }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" href="assets-gallery/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-gallery/css/magnific-popup.css">
  <link rel="stylesheet" href="assets-gallery/css/jquery-ui.css">
  <link rel="stylesheet" href="assets-gallery/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets-gallery/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="assets-gallery/css/lightgallery.min.css">    

  <link rel="stylesheet" href="assets-gallery/css/bootstrap-datepicker.css">

  

  <link rel="stylesheet" href="assets-gallery/css/swiper.css">

  <link rel="stylesheet" href="assets-gallery/css/aos.css">

  <link rel="stylesheet" href="assets-gallery/css/style.css">

  <!-- Favicons -->
  <link href="assets-home/img/fourfold1-logo.png" rel="icon">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="/gallery" class="text-white h2 mb-0" style="font-family: 'Times New Roman', Times, serif; text-transform: uppercase;">{{ $site_name }}<span style="color: #feb900;">.</span></a></h1>
          </div>
        </div>
      </div> 
    </header>

    <div class="site-section"  data-aos="fade">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Workshop Gallery</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="lightgallery">
          @foreach ($event as $item)
            @if ($item->category === 'workshop')
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{ Storage::url($item->thumbnail) }}" data-sub-html="<h4>{{ $item->title }}</h4><p>{{ $item->content }}</p>">
              <a href="#"><img src="{{ Storage::url($item->thumbnail) }}" alt="Image" class="img-fluid"></a>
            </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
        <p>
        </p>
      </div>
    </div>
  </div>

  <script src="assets-gallery/js/jquery-3.3.1.min.js"></script>
  <script src="assets-gallery/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets-gallery/js/jquery-ui.js"></script>
  <script src="assets-gallery/js/popper.min.js"></script>
  <script src="assets-gallery/js/bootstrap.min.js"></script>
  <script src="assets-gallery/js/owl.carousel.min.js"></script>
  <script src="assets-gallery/js/jquery.stellar.min.js"></script>
  <script src="assets-gallery/js/jquery.countdown.min.js"></script>
  <script src="assets-gallery/js/jquery.magnific-popup.min.js"></script>
  <script src="assets-gallery/js/bootstrap-datepicker.min.js"></script>
  <script src="assets-gallery/js/swiper.min.js"></script>
  <script src="assets-gallery/js/aos.js"></script>

  <script src="assets-gallery/js/picturefill.min.js"></script>
  <script src="assets-gallery/js/lightgallery-all.min.js"></script>
  <script src="assets-gallery/js/jquery.mousewheel.min.js"></script>

  <script src="assets-gallery/js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

</body>
</html>