<div class="collapse navbar-collapse" id="navbarVerticalCollapse">
  <div class="navbar-vertical-content scrollbar">
    <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
      <li class="nav-item">
        <!-- label-->
        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
          <div class="col-auto navbar-vertical-label">{{ __('მენიუ') }}
          </div>
          <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider" />
          </div>
        </div>
        <!-- parent pages-->
        <a class="nav-link" href="{{ route('admin.sliders.index') }}" role="button" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="nav-link-icon d-flex justify-content-center align-items-center">
              <span class="material-icons text-900 fs-1">apps</span>

            </span>
            <span class="nav-link-text ps-1">{{ __('სლაიდები') }} </span>
          </div>
        </a>
        <a class="nav-link" href="{{ route('admin.news.index') }}" role="button" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="nav-link-icon d-flex justify-content-center align-items-center">
              <span class="material-icons text-900 fs-1">apps</span>

            </span>
            <span class="nav-link-text ps-1">{{ __('სიახლეები') }} </span>
          </div>
        </a>
        <a class="nav-link" href="{{ route('admin.conference.index') }}" role="button" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="nav-link-icon d-flex justify-content-center align-items-center">
              <span class="material-icons text-900 fs-1">apps</span>

            </span>
            <span class="nav-link-text ps-1">{{ __('კონფერენციის ბმულები') }} </span>
          </div>
        </a>

        <!-- parent pages-->
        <a class="nav-link" href="../app/chat.html" role="button" aria-expanded="false">
          <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span>
          </div>
        </a>
        <!-- parent pages-->

      </li>

    </ul>

  </div>
</div>
