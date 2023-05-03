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
          {{-- <img src="front_assets/images/logo.png" alt=""> --}}
          <span>GDPA LOGO</span>
        </a>
      </div>

      <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
        <x-web::components.navbar />
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="intro-text ">
          <h1>Login</h1>
          {{-- <p>{{ Breadcrumbs::render('web.login') }}</p> --}}
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</div>
