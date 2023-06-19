<x-web::layouts.secondary>
  <div class="contact">
    <!-- Contact Area section -->
    <section class="contact-area-02">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 contact-info">
            <div class="col-sm-12 contact-title">
              <h2>{{ __('საკონტაქტო ინფრომაცია') }}</h2>
              <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
            </div>
            <div class="col-sm-12 contact-box">
              <div class="row">
                <div class="col-sm-12 col-md-6 single-address-box">
                  <div class="single-address">
                    <i class="fa fa-phone"></i>
                    <h4>{{ __('ტელეფონი:') }}</h4>
                    <p>(995 32) 294-03-94</p>
                    <p>(995 32) 296-71-26</p>
                    <p>(995 32) 295-44-57</p>
                    <p>(995 32) 296-44-66</p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6  single-address-box">
                  <div class="single-address">
                    <i class="fa fa-envelope"></i>
                    <h4>{{ __('ელ.ფოსტა :') }}</h4>
                    <p>info@gdpa.ge</p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 single-address-box">
                  <div class="single-address">
                    <i class="fa fa-map-marker"></i>
                    <h4>{{ __('მისამართი :') }}</h4>
                    <p>დავით აღმაშენებლის 126</p>
                  </div>
                </div>
                {{-- <div class="col-sm-12 single-address-box">
                  <ul class="list-unstyled">
                    <li><a href=""><i class="fa fa-facebook teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram teacher-icon"></i></a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </div>

          <div class="col-sm-6  col-sm-offset-1 contact-form">
            <div class="row">
              <div class="col-sm-12 contact-title-btm">
                <h2>{{ __('მოგვწერე') }}</h2>
                <p class="content-sub_p">{{ __('კითხვის შემთხვევაში შეგიცლია მოგვწერო') }}</p>
              </div>
            </div>
            <div class="input-contact-form">


              <div>
                <form method="post" action="{{ route('sendEmail') }}" name="contactform">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('სახელი') }}" name="name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="{{ __('ელ.ფოსტა') }}" name="email">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('თემა') }}" name="subject">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="6" placeholder="{{ __('შეტყობინება') }}" name="comments"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="full-width">
                        <button type="submit">{{ __('გაგზავნა') }}</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ./ End Contact Area section -->

  </div>
  @if (session()->has('emailSent'))
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
              title: "თქვენ შეტყობინება გაგზავნილია",
            })
          }, 1000);
        });
      </script>
    @endpush
  @endif
</x-web::layouts.secondary>
