<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel</title>

  <link rel="shortcut icon" href="{{ asset('../front_assets/images/favicon.ico" type="image/x-icon') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('../front_assets/css/assets/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('../front_assets/css/assets/font-awesome.min.css') }}">
  <!-- Popup -->
  <link href="{{ asset('../front_assets/css/assets/magnific-popup.css" rel="stylesheet') }}">
  <!-- Revolution Slider -->
  <link rel="stylesheet" href="{{ asset('../front_assets/css/assets/revolution/layers.css') }}">
  <link rel="stylesheet" href="{{ asset('../front_assets/css/assets/revolution/navigation.css') }}">
  <link rel="stylesheet" href="{{ asset('../front_assets/css/assets/revolution/settings.css') }}">
  <!-- Google Fonts -->
  <!-- Slick Slider -->
  <link href="{{ asset('../front_assets/css/assets/slick.css" rel="stylesheet') }}">
  <link href="{{ asset('../front_assets/css/assets/slick-theme.css" rel="stylesheet') }}">
  <!-- Mean Menu-->
  <link rel="stylesheet" href="{{ asset('../front_assets/css/assets/meanmenu.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('../front_assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('../front_assets/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('../front_assets/css/custom.css') }}">


  {{-- @vite(['resources/web/scss/app.scss', 'resources/web/scripts/app.js']) --}}
  @stack('style')
  {{--  <link rel="stylesheet" href="{{ asset('build/assets/app-4c41e8b9.css') }}"> --}}
</head>


<body class="antialiased">
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <header id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 header-top-left">
            <ul class="list-unstyled">
              <li><i class="fa fa-phone top-icon"></i> 032 294-03-94</li>
              <li><i class="fa fa-envelope top-icon"></i> info@gdpa.ge</li>
            </ul>
          </div>
          <div class="col-sm-6 col-xs-12 header-top-right">
            <ul class="list-unstyled">
              @auth
                <li><a href="{{ route('profile') }}"><i class="fa fa-user top-icon"></i>
                    {{ auth()->user()->name }}</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                      <i class="fa fa-power-off top-icon "> </i>
                    </button>
                  </form>

                </li>

              @endauth
              @guest
                <li><a href="{{ route('register-form') }}"><i class="fa fa-user-plus top-icon"></i>
                    {{ __('რეგისტრაცია') }}</a></li>
                <li><a href="{{ route('login-form') }}"><i class="fa fa-lock top-icon"></i>{{ __('შესვლა') }}</a></li>
              @endguest
            </ul>
          </div>
        </div>
      </div>
    </div><!-- Ends: .header-top -->

    <div class="header-body">
      <nav class="navbar edu-navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand  data-scroll">
              <img src="front_assets/images/gdpa_logo.png" alt="">
              {{-- <span>GDPA LOGO</span> --}}
            </a>
          </div>

          <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
            <x-web::components.navbar />
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </div>
    {{ $header ?? '' }}
  </header>
  <!--  End header section-->
  {{ $slot }}
  <!-- Footer Area section -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 footer-content-box">
          <div class="col-sm-3">
            <h3>
              <span>
                {{-- <i class="fa fa-graduation-cap footer-h-icon"></i> --}}
                GDPA LOGO
              </span>
              GDPA
            </h3>
            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც
              უცნობმა მბეჭდავმა ამწყობ დაზა. განსა</p>
            <ul class="list-unstyled">
              <li><span><i class="fa fa-phone footer-icon"></i></span>032 294-03-94</li>
              <li><span><i class="fa fa-envelope footer-icon"></i></span>info@gdpa.ge</li>
              <li><span><i class="fa fa-map-marker footer-icon"></i></span>დავით აღმაშენებლის 126</li>
            </ul>
          </div>


          {{-- <div class="col-sm-3 col-xs-offset-6">
            <h3>Get in touch</h3>
            <p>Enter your email and we'll send you more information.</p>

            <form action="#">
              <div class="form-group">
                <input placeholder="Your Email" type="email" required="">
                <div class="submit-btn">
                  <button type="submit" class="text-center">Subscribe</button>
                </div>
              </div>
            </form>
          </div> --}}
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <div class="row">
            <div class="col-md-6 col-sm-12 footer-no-padding">
              <p>&copy; Copyright 2019 | All rights reserved</p>
            </div>
            <div class="col-md-6 col-sm-12 footer-no-padding">
              <ul class="list-unstyled footer-menu text-right">
                <li>Follow us:</li>
                <li><a href=""><i class="fa fa-facebook facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter twitter"></i></a></li>
                <li><a href=""><i class="fa fa-instagram instagram"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus google"></i></a></li>
                <li><a href=""><i class="fa fa-skype skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!-- ./ End footer-bottom -->
  </footer><!-- ./ End Footer Area-->

</body>


<!-- ============================
JavaScript Files
============================= -->
<!-- jQuery -->
<script src="{{ asset('../front_assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('../front_assets/js/assets/bootstrap.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('../front_assets/js/assets/owl.carousel.min.js') }}"></script>
<!-- Revolution Slider -->
<script src="{{ asset('../front_assets/js/assets/revolution/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('../front_assets/js/assets/revolution/jquery.themepunch.tools.min.js') }}"></script>
<!-- Popup -->
<script src="{{ asset('../front_assets/js/assets/jquery.magnific-popup.min.js') }}"></script>
<!-- Sticky JS -->
<script src="{{ asset('../front_assets/js/assets/jquery.sticky.js') }}"></script>
<!-- Counter Up -->
<script src="{{ asset('../front_assets/js/assets/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('../front_assets/js/assets/waypoints.min.js') }}"></script>
<!-- Slick Slider-->
<script src="{{ asset('../front_assets/js/assets/slick.min.js') }}"></script>
<!-- Main Menu -->
<script src="{{ asset('../front_assets/js/assets/jquery.meanmenu.min.js') }}"></script>
<!-- Revolution Extensions -->
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
  src="{{ asset('../front_assets/js/assets/revolution/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../front_assets/js/assets/revolution/revolution.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('../front_assets/js/custom.js') }}"></script>
@stack('script')

</html>
