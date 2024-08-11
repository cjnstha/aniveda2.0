<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ANIVEDA Animation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('front/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('front/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('front/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
 @include('layouts.front_layouts.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center p-0">
    <video class="full-width-video" id="hero-video" playsinline="" muted="" autoplay="" loop="" src="{{asset('front/assets/videos/AA-Logo-Animation.mp4')}}">
    </video>
  </section><!-- End Hero -->

<main id="main">
  @yield('content')
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer> --> <!-- End Footer -->

  <footer id="footer">


    <div class="container">

      <h3>Ani-Veda Animations</h3>

      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright 2022 <strong><span>Aniveda Animations</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="index.html">Aniveda Animations</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="{{url('front/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('front/assets/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('front/assets/js/vidGallery.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('front/assets/js/main.js')}}"></script>

  <script type="text/javascript">
    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
    });
  </script>

  <script>
    (function () {
      
      // other stuff
      function setClickHandler(id, fn) {
        document.getElementById(id).onclick = fn
      }

      setClickHandler('video_container', function (e) {
        var className = e.target.className
        if (~className.indexOf('htmlvid')) {
          BigPicture({
            el: e.target,
            vidSrc: e.target.getAttribute('vidSrc'),
          })
        } else if (~className.indexOf('vimeo')) {
          BigPicture({
            el: e.target,
            vimeoSrc: e.target.getAttribute('vimeoSrc'),
          })
        } else if (~className.indexOf('twin-peaks')) {
          BigPicture({
            el: e.target,
            ytSrc: e.target.getAttribute('ytSrc'),
            dimensions: [1226, 900],
          })
        } else if (~className.indexOf('youtube')) {
          BigPicture({
            el: e.target,
            ytSrc: e.target.getAttribute('ytSrc'),
          })
        }
      })

      setClickHandler('iframe_example', function (e) {
        e.preventDefault()
        BigPicture({
          el: e.target,
          iframeSrc: e.target.getAttribute('data-iframe'),
          dimensions: [800, 800],
        })
      })

      
    })()
  </script>

</body>

</html>