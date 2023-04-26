<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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


  @vite(['resources/web/scss/app.scss', 'resources/web/scripts/app.js'])
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
              <li><i class="fa fa-phone top-icon"></i> +123 456 789</li>
              <li><i class="fa fa-envelope top-icon"></i> hello@eduread.com</li>
            </ul>
          </div>
          <div class="col-sm-6 col-xs-12 header-top-right">
            <ul class="list-unstyled">
              @auth
                <li><a href="register.html"><i class="fa fa-user top-icon"></i> {{ auth()->user()->name }}</a></li>

              @endauth
              @guest
                <li><a href="register.html"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
                <li><a href="{{ route('login-form') }}"><i class="fa fa-lock top-icon"></i>Login</a></li>
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
            <a href="index.html" class="navbar-brand  data-scroll"><img src="front_assets/images/logo.png"
                alt=""><span>EduRead</span></a>
          </div>

          <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
              <li class="active"><a data-scroll="" href="index.html">Home</a>
                <!-- dropdwon start -->
                <ul class="dropdown list-unstyled">
                  <li><a href="index.html">Home Version One</a></li>
                  <li><a href="index-02.html">Home Version Two</a></li>
                  <li><a href="index-03.html">Home Version Three</a></li>
                  <li><a href="index-04.html">Home Version Four</a></li>
                </ul>
                <!-- dropdown end -->
              </li>
              <li><a data-scroll="" href="courses-01.html">Courses</a>
                <!-- dropdwon start -->
                <ul class="dropdown list-unstyled">
                  <li><a href="courses-01.html">Course Style One</a></li>
                  <li><a href="courses-02.html">Course Style Two</a></li>
                  <li><a href="courses-03.html">Course Style Three</a></li>
                  <li class="dropdown-list-box-02"><a href="#">Dropdown<i
                        class="fa fa-angle-right menu-icon"></i></a>
                    <ul class="dropdown-list_2 list-unstyled">
                      <li><a href="#">Label One</a></li>
                      <li><a href="#">Label One</a></li>
                      <li><a href="#">Label One</a></li>
                      <li class="dropdown-list-box-03"><a href="#">Label One<i
                            class="fa fa-angle-right menu-icon"></i></a>
                        <ul class="dropdown-list_3 list-unstyled">
                          <li><a href="#">Label Two</a></li>
                          <li><a href="#">Label Two</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="courses-carousel.html">Course Carousel Style</a></li>
                  <li><a href="course-details.html">Course Details</a></li>
                  <li><a href="course-details-left-sidebar.html">Course Details Sidebar</a></li>
                </ul>
                <!-- dropdown end -->
              </li>
              <li><a data-scroll href="event-list.html">Event</a>
                <!-- dropdwon start -->
                <ul class="dropdown list-unstyled">
                  <li><a href="event-list.html">Event List One</a></li>
                  <li><a href="event-list-1.html">Event List Two</a></li>
                  <li><a href="event-grid-2.html">Event Two Grid</a></li>
                  <li><a href="event-grid-3.html">Event Three Grid</a></li>
                  <li><a href="event-details.html">Event Details</a></li>
                </ul>
                <!-- dropdown end -->
              </li>
              <li><a data-scroll href="#">Pages</a>
                <ul class="list-unstyled dropdown">
                  <li><a href="courses-01.html">Courses</a></li>
                  <li><a href="event-list.html">Events</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="teachers-01.html">Teachers</a></li>
                  <li class="dropdown-list-box-02"><a href="#">Dropdown<i
                        class="fa fa-angle-right menu-icon"></i></a>
                    <ul class="dropdown-list_2 list-unstyled">
                      <li><a href="#">Label One</a></li>
                      <li><a href="#">Label One</a></li>
                      <li><a href="#">Label One</a></li>
                      <li class="dropdown-list-box-03"><a href="#">Label One<i
                            class="fa fa-angle-right menu-icon"></i></a>
                        <ul class="dropdown-list_3 list-unstyled">
                          <li><a href="#">Label Two</a></li>
                          <li><a href="#">Label Two</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="teachers-profile.html">Teachers Porfile</a></li>
                  <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Registation</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-post.html">Post</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </li>
              <li><a data-scroll href="teachers-01.html">Teachers</a>
                <!-- dropdwon start -->
                <ul class="dropdown list-unstyled">
                  <li><a href="teachers-01.html">Teachers Style One</a></li>
                  <li><a href="teachers-02.html">Teachers Style Two</a></li>
                  <li><a href="teachers-profile.html">Teachers Porfile</a></li>
                  <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                </ul>
                <!-- dropdown end -->
              </li>
              <li><a data-scroll href="blog.html">Blog</a>
                <!-- dropdwon start -->
                <ul class="dropdown list-unstyled">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-post.html">Blog Post</a></li>
                </ul>
                <!-- dropdown end -->
              </li>
              <li><a data-scroll href="contact.html">Contact</a></li>
              <li><a data-scroll href="#"><i class="fa fa-search search_btn"></i></a>
                <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                    <input type="search" value="" placeholder="Search here...." required />
                    <button type="submit" class="btn btn_common blue">Search</button>
                  </form>
                </div>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </div>
    {{ $header }}
  </header>
  <!--  End header section-->
  {{ $slot }}
  <!-- Footer Area section -->
  <footer>
    <div class="container">
      <div class="row">
        <div class=" col-sm-12 footer-content-box">
          <div class="col-sm-3">
            <h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> EduRead</h3>
            <p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please
              send email and get latest news.</p>
            <ul class="list-unstyled">
              <li><span><i class="fa fa-phone footer-icon"></i></span>0123-456-789</li>
              <li><span><i class="fa fa-envelope footer-icon"></i></span>hello@education.com</li>
              <li><span><i class="fa fa-map-marker footer-icon"></i></span>01 Central Park, NYC</li>
            </ul>
          </div>

          <div class="col-sm-2">
            <h3>Courses</h3>
            <ul class="list-unstyled">
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Web Design</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Apps Developer</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Graphic Design</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>PHP Tranning</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>IOS Developer</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>App Design</a></li>
            </ul>
          </div>

          <div class="col-sm-2">
            <h3>Links</h3>
            <ul class="list-unstyled">
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About Us</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Teacher</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Blog</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Events</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a></li>
            </ul>
          </div>

          <div class="col-sm-2">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a></li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Language Packs</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Release Status</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a>
              </li>
              <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a></li>
            </ul>
          </div>

          <div class="col-sm-3">
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
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <div class="row">
            <div class="col-md-6 col-sm-12 footer-no-padding">
              <p>&copy; Copyright 2019 EcologyTheme | All rights reserved</p>
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

</html>
