<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/frontend') }}/assets/img/ailcc.ico" rel="icon">
  <link href="{{ asset('/frontend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('/frontend') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ asset('/frontend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('/frontend') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('/frontend') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('/frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/frontend') }}/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- =======================================================
  * Template Name: BizLand - v1.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:ailc.course@yahoo.com">ailc.course@yahoo.com</a>
        <i class="icofont-phone"></i> 081615075516
      </div>
      <div class="social-links">

        <a href="https://www.facebook.com/ailc.course" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>

      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">AILC<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/join" target="_blank" >Join</a></li>
          <li><a href="#services">Kelas</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>

                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Kontak</a></li>
          <li><a href="/login2">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AILC<span>.</span></h3>
            <p>
              Jl. Petukangan Tengah No 12 <br>
              Surabaya <br><br>
              <strong>Phone:</strong> 081615075516<br>
              <strong>Email:</strong> ailc.course@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#join">Join</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Kelas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Program</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reguler</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Intensive</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Semi Intensive</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conversation</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p></p>
            <div class="social-links mt-3">
              <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
              <a href="https://www.facebook.com/ailc.course" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <span>{{ date("Y") }}</span>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend') }}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <script>
                @if(Session::has('success'))
                    toastr.success("{{ Session::get('success') }}", "Sukses");
                @endif

                @if(Session::has('error'))
                    toastr.error("{{ Session::get('error') }}", "Maaf");
                @endif

            </script>

</body>

</html>
