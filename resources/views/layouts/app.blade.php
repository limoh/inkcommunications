
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INK Communications</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::to('images/favicon.png') }}" rel="icon">
  <link href="{{ URL::to('images/favicon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:inkcommunications0@gmail.com">inkcommunications0@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 7 10 655 086</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

       <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>
     Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo"><img src="images/ic.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{Request::is('/') ? 'active' : ''}} nav-link scrollto" href="/">Home</a></li>
          <li><a class="{{Request::is('/about-us') ? 'active' : ''}} nav-link scrollto" href="/about-us">About</a></li>
          <li class="dropdown"><a href="#"><span>OUR SERVICES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <!---     <li><a href="#">Our Services</a></li>
           <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>-->
              <li><a href="/search-engine-optimization">Search Engine Optimization</a></li>
              <li><a href="/digital-marketing">Digital Marketing</a></li>
              <li><a href="/web-design">Website Design</a></li>
              <li><a href="/content-writing">Content Writing</a></li>
              <li><a href="/copywriting">Blogging & CopyWriting</a></li>
              <li><a href="/e-commerce">e-Commerce</a></li>
            </ul>
          </li>
          <li><a class="{{Request::is('/contact-us') ? 'active' : ''}} nav-link scrollto" href="/contact-us">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  



  <main id="main">

   @yield('content')

  </main><!-- End #main -->

  

<!-- ======= Footer ======= -->
  <footer id="footer">

   <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4> Newsletter</h4>
            <p>Subscribe to read our monthly Newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>--->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><span>INK Communications</span></h3>
            <p>
               Ngong Road <br/>
              Kamburu Drive<br/>
              Pinetree Plaza<br/>
              <strong>Phone:</strong> +254 7 10 655 086<br>
              <strong>Email:</strong> inkcommunications0@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about-us">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact-us">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/web-design">Website Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/search-engine-optimization">Search Engine Optimization</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/content-writing">Content Writing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/digital-marketing">Digital Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/copywriting">Blogging & CopyWriting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/e-commerce">eCommerce</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us for more updates</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; <?php echo date("Y"); ?> <strong><span>INK Communications</span>  </strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>