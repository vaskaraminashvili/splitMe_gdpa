<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="shortcut icon" href="front_assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front_assets/css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="front_assets/css/assets/font-awesome.min.css">
    <!-- Popup -->
    <link href="front_assets/css/assets/magnific-popup.css" rel="stylesheet">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="front_assets/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="front_assets/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="front_assets/css/assets/revolution/settings.css">
    <!-- Google Fonts -->
    <!-- Slick Slider -->
    <link href="front_assets/css/assets/slick.css" rel="stylesheet">
    <link href="front_assets/css/assets/slick-theme.css" rel="stylesheet">
    <!-- Mean Menu-->
    <link rel="stylesheet" href="front_assets/css/assets/meanmenu.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="front_assets/css/style.css">
    <link rel="stylesheet" href="front_assets/css/responsive.css">


    {{-- @vite(['resources/web/scss/app.scss', 'resources/web/scripts/app.js']) --}}
    {{--  <link rel="stylesheet" href="{{ asset('build/assets/app-4c41e8b9.css') }}">--}}
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
						<li><a href="register.html"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
						<li><a href="login.html"><i class="fa fa-lock top-icon"></i>Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Ends: .header-top -->

	<div class="header-body">
		<nav class="navbar edu-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand  data-scroll"><img src="front_assets/images/logo.png" alt=""><span>EduRead</span></a>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
						<li class="active" ><a data-scroll="" href="index.html">Home</a>
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
                                <li class="dropdown-list-box-02"><a href="#">Dropdown<i class="fa fa-angle-right menu-icon"></i></a>
	                                <ul class="dropdown-list_2 list-unstyled">
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li class="dropdown-list-box-03"><a href="#">Label One<i class="fa fa-angle-right menu-icon"></i></a>
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
                                <li class="dropdown-list-box-02"><a href="#">Dropdown<i class="fa fa-angle-right menu-icon"></i></a>
	                                <ul class="dropdown-list_2 list-unstyled">
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li class="dropdown-list-box-03"><a href="#">Label One<i class="fa fa-angle-right menu-icon"></i></a>
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
							   		 <input type="search" value="" placeholder="Search here...."  required/>
							   		 <button type="submit" class="btn btn_common blue">Search</button>
							 	 </form>
							</div>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</div>

</header>
	<!--  End header section-->
{{ $slot }}
</body>


<!-- ============================
JavaScript Files
============================= -->
<!-- jQuery -->
<script src="front_assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="front_assets/js/assets/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="front_assets/js/assets/owl.carousel.min.js"></script>
<!-- Revolution Slider -->
<script src="front_assets/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="front_assets/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
<!-- Popup -->
<script src="front_assets/js/assets/jquery.magnific-popup.min.js"></script>
<!-- Sticky JS -->
<script src="front_assets/js/assets/jquery.sticky.js"></script>
<!-- Counter Up -->
<script src="front_assets/js/assets/jquery.counterup.min.js"></script>
<script src="front_assets/js/assets/waypoints.min.js"></script>
<!-- Slick Slider-->
<script src="front_assets/js/assets/slick.min.js"></script>
<!-- Main Menu -->
<script src="front_assets/js/assets/jquery.meanmenu.min.js"></script>
<!-- Revolution Extensions -->
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="front_assets/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="front_assets/js/assets/revolution/revolution.js"></script>
<!-- Custom JS -->
<script src="front_assets/js/custom.js"></script>

</html>
