<x-web::layouts.secondary>
  @php
    $user = auth()->user();
  @endphp
  <div class="register ">
    <section class="top_section register-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <form action="{{ route('updateProfile') }}" method="POST" class="learnpro-register-form">
              @csrf
              <p class="lead">{{ __('პროფილის რედაქტირება') }}</p>
              <div class="form-group">
                <input autocomplete="off" class="form-control" placeholder="{{ __('სახელი') }}"
                  value="{{ $user->name }}" type="text">
              </div>

              <div class="form-group">
                <input class="required form-control" placeholder="{{ __('პაროლი') }}" type="password">
              </div>
              <div class="form-group">
                <input class="required form-control" placeholder="{{ __('ელ.ფოსტა') }}" value="{{ $user->email }}"
                  type="email">
              </div>
              <textarea class="form-control" placeholder="{{ __('ბიო') }}" name="bio" rows="3" style="resize: none;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, eveniet.</textarea>

              <div class="form-group register-btn">
                <button type="submit" class="btn btn-primary btn-lg">{{ __('შენახვა') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>


</x-web::layouts.secondary>
