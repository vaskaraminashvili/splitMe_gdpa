<!DOCTYPE html>
<html lang="ka" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Falcon | Dashboard &amp; Web App Template</title>
  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../back_assets/img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32"
    href=""{{ asset('../back_assets/img/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16"
    href=""{{ asset('../back_assets/img/favicons/favicon-16x16.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href=""{{ asset('../back_assets/img/favicons/favicon.ico') }}">
  <link rel="manifest" href=""{{ asset('../back_assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="../back_assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="" {{ asset('../back_assets/js/config.js') }}"></script>
  <script src="" {{ asset('../back_assets/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="{{ asset('../back_assets/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../back_assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('../back_assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
  <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {

    }
  </script>
  @vite(['resources/admin/scss/app.scss', 'resources/admin/scripts/app.js'])
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container" data-layout="container">
      <script>
        var isFluid = JSON.parse(localStorage.getItem('isFluid'));
        if (isFluid) {
          var container = document.querySelector('[data-layout]');
          container.classList.remove('container');
          container.classList.add('container-fluid');
        }
      </script>
      <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
        <script>
          var navbarStyle = localStorage.getItem("navbarStyle");
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
          }
        </script>
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
              data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                  class="toggle-line"></span></span></button>
          </div>
          <a class="navbar-brand" href="../index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                src="{{ asset('../back_assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                width="40" /><span class="font-sans-serif">falcon</span>
            </div>
          </a>
        </div>
        <x-admin::components.mainNav></x-admin::components.mainNav>
      </nav>
      <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center"><img class="me-2"
                src="{{ asset('../back_assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                width="40" /><span class="font-sans-serif">falcon</span>
            </div>
          </a>

          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                  data-theme-control="theme" value="dark" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                    class="fas fa-sun fs-0"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                    class="fas fa-moon fs-0"></span></label>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="{{ asset('../back_assets/img/team/3-thumb.png') }}"
                    alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">

                  <a class="dropdown-item" href="../pages/user/settings.html">Profile</a>
                  <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        {{ $slot }}
        <footer class="footer">
          <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">Thank you for creating with ME <span class="d-none d-sm-inline-block">|
                </span><br class="d-sm-none" /> 2023 &copy;
              </p>
            </div>
            <div class="col-12 col-sm-auto text-center">
            </div>
          </div>
        </footer>
      </div>
      <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" role="document">
          <div class="modal-content border-0">
            <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
              <div class="position-relative z-index-1 light">
                <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
              </div>
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 px-5">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="modal-auth-name">Name</label>
                  <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="modal-auth-email">Email address</label>
                  <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                </div>
                <div class="row gx-2">
                  <div class="mb-3 col-sm-6">
                    <label class="form-label" for="modal-auth-password">Password</label>
                    <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                  </div>
                  <div class="mb-3 col-sm-6">
                    <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                    <input class="form-control" type="password" autocomplete="on"
                      id="modal-auth-confirm-password" />
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                  <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms
                    </a>and <a href="#!">privacy policy</a></label>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">
                    Register
                  </button>
                </div>
              </form>
              <div class="position-relative mt-5">
                <hr class="bg-300" />
                <div class="divider-content-center">or register with</div>
              </div>
              <div class="row g-2 mt-2">
                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                    href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span>
                    google</a>
                </div>
                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span
                      class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span>
                    facebook</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <x-admin::components.toast.container />
  <x-admin::components.toast.success />


  {{-- toast --}}

  {{-- toast --}}
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->

  <script src="{{ asset('../back_assets/vendors/popper/popper.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/anchorjs/anchor.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/is/is.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/fontawesome/all.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/lodash/lodash.min.js') }}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ asset('../back_assets/vendors/list.js/list.min.js') }}"></script>
  <script src="{{ asset('../back_assets/js/theme.js') }}"></script>
  <script src="{{ asset('../back_assets/js/jquery-3.6.4.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/tinymce/tinymce.min.js') }}"></script>

  {{ $script ?? '' }}
</body>

</html>
