<x-web::layouts.login>

  <!-- Teachers Area section -->
  <section class="login-area">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form action="{{ route('login') }}" method="post" class="learnpro-register-form text-center">
            @csrf
            <p class="lead">{{ __('კეთილი იყოს თქვენი დაბრუნება') }}</p>
            <div class="form-group">
              <input autocomplete="off" class="required form-control" placeholder="{{ __('ელ.ფოსტა') }} *" name="email"
                type="email">
            </div>
            <div class="form-group">
              <input class="required form-control" placeholder="{{ __('პაროლი') }} *" name="password" type="password">
            </div>
            <div class="form-group register-btn">
              <button type="submit" class="btn btn-primary btn-lg">{{ __('შესვლა') }}</button>
            </div>
            <a href="forgot_password.html"><strong>{{ __('დაგავიწყდა პაროლი ?') }}</strong></a>
            {{-- <p>Not a member? <a href="register.html"><strong>Join today</strong></a></p> --}}
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ./ End Teachers Area section -->
  @if (session()->has('profile_created'))
    @push('style')
      <link rel="stylesheet" type="text/css" href="{{ asset('../front_assets/css/assets/sweetalert2.min.css') }}" />
    @endpush
    @push('script')
      <script src="{{ asset('../front_assets/js/assets/sweetalert2.min.js') }}"></script>
      <script>
        $(function() {

          setTimeout(function() {
            Swal.fire({
              icon: 'success',
              title: "თქვენ წარმატებით გაიარეთ რეგისტრაცია",
            })
          }, 1000);
        });
      </script>
    @endpush
  @endif

</x-web::layouts.login>
