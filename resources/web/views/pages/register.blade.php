<x-web::layouts.login>
  @php
    // dd($errors);
  @endphp
  <!-- Teachers Area section -->
  <section class="login-area">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form action="{{ route('register') }}" method="post" class="learnpro-register-form text-center">
            @csrf
            <p class="lead">{{ __('რეგისტრაცია') }}</p>
            <div class="form-group">
              <input autocomplete="off" class="required form-control @error('fullname') border-error @enderror"
                placeholder="{{ __('სახელი გვარი') }} *" name="name" type="text" value="{{ old('fullname') }}">
            </div>
            <div class="form-group">
              <input autocomplete="off" class="required form-control @error('email') border-error @enderror"
                placeholder="{{ __('ელ.ფოსტა') }} *" name="email" type="email" value="{{ old('email') }}">
            </div>
            {{-- select specialization --}}
            <x-web::components.form.select2 title="description" />
            {{-- end select specialization --}}

            <div class="form-group">
              <input class="required form-control @error('password') border-error @enderror"
                placeholder="{{ __('პაროლი') }} *" name="password" type="password">
            </div>
            <div class="form-group">
              <input class="required form-control @error('password') border-error @enderror"
                placeholder="{{ __('გაიმეორეთ პაროლი') }} *" name="password_confirmation" type="password">
            </div>
            <div class="form-group register-btn">
              <button type="submit" class="btn btn-primary btn-lg">{{ __('რეგისტრაცია') }}</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>
  @push('style')
    <style type="text/css">
      .border-error {
        border-color: red !important;
        color: red !important;
      }
    </style>
  @endpush

  <!-- ./ End Teachers Area section -->
</x-web::layouts.login>
