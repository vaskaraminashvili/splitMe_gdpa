<x-web::layouts.master>
  <x-slot:header>
    <div class="rev_slider_wrapper">
      <div id="rev_slider_1" class="rev_slider" style="display:none">

        <!-- BEGIN SLIDES LIST -->
        <ul>
          @foreach ($data['slides'] as $slide)
            <li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text"
              data-thumb="{{ $slide->bigThumb() }}">
              <div class="slider-overlay"></div>
              <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
              <img src="{{ $slide->bigThumb() }}" alt="Sky" class="rev-slidebg">
              <!-- BEGIN BASIC TEXT LAYER -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
                data-x="left" data-hoffset="0" data-y="center" data-voffset="-100"
                data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; font-size:60px; color:#fff; white-space: nowrap;font-weight:700;">
                {{ $slide->title }}
              </div>


              <!-- LAYER NR. 3 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left"
                data-hoffset="0" data-y="center" data-voffset="-10"
                data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6;">
                <div class="slide_description">
                  {!! $slide->description !!}
                </div>
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center"
                data-voffset="90"
                data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 8;">
                @if ($slide->link)
                  <a href="{{ $slide->link }}" class="el-btn-regular slider-btn-left">{{ __('დეტალურად') }}</a>
                @endif
                {{-- <a href="#." class="el-btn-regular">View Courses</a> --}}
              </div>
            </li>
          @endforeach
        </ul><!-- END SLIDES LIST -->

      </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
  </x-slot:header>

  <div class="home_version_02 event-01">
    <!-- Start Welcome Area section -->
    <section class="Welcome-area events-grid-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-header-box">
            <div class="section-header">
              <h2>{{ __('მოგესალმებით') }}</h2>
              </p>
            </div><!-- ends: .section-header -->
          </div>
        </div>
        <div class="row event-body-content">
          @foreach ($data['news'] as $item)
            <div class="col-sm-4 single-item">
              <div class="events-single-box">
                <div class="row">


                  <div class="col-sm-12">
                    <div class="event-info">
                      <h3>{{ $item['title'] }}</h3>
                      <p>{!! Str::limit(strip_tags($item->short_description), 50) !!} </p>

                      <a class="event-btn" href="{{ route('news-show', $item->id) }}">{{ __('სრულად ნახვა') }}<i
                          class="fa fa-long-arrow-right events-btn-icon"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="event-bottom-btn">
              <a href="{{ route('news-index') }}" class="view-more-item">{{ __('ყველა სიახლის ნახვა') }}</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ./ End Welcome Area section -->

    <!-- Start Register Area section -->
    <section class="register-area">
      <div class="overlay-bg">
        <div class="container">
          <div class="row">

            <div class="col-sm-5">
              <div class="row">
                <div class="form-full-box">
                  <div class="header-box-top">
                    <div class="col-sm-12 section-header-box">
                      <div class="section-header">
                        <h2>{{ __('გაწევრიანდი ეხლავე') }}</h2>
                      </div><!-- ends: .section-header -->
                    </div>
                    {{-- <p>Create your free account now and get immediate access to 100s of online courses.</p> --}}
                  </div>
                  <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="register-form">
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="form-group">
                            <input autocomplete="off"
                              class="required form-control @error('fullname') border-error @enderror"
                              placeholder="{{ __('სახელი გვარი') }} *" name="name" type="text"
                              value="{{ old('fullname') }}">
                          </div>
                        </div>

                        <div class="col-xs-12">
                          <div class="form-group">
                            <input autocomplete="off"
                              class="required form-control @error('email') border-error @enderror"
                              placeholder="{{ __('ელ.ფოსტა') }} *" name="email" type="email"
                              value="{{ old('email') }}">
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="form-group">
                            @php
                              $options = [
                                  '0' => 'სტომატოლოგია',
                                  '1' => 'ორთოდონტია',
                              ];
                            @endphp
                            <select class="form-control select" name="specialization[]" multiple="multiple">
                              @foreach ($options as $key => $option)
                                <option value="{{ $key }}"
                                  {{ collect(old('specialization'))->contains($key) ? 'selected' : '' }}>
                                  {{ __($option) }}
                                </option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="form-group">
                            <input class="required form-control @error('password') border-error @enderror"
                              placeholder="{{ __('პაროლი') }} *" name="password" type="password">
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="form-group">
                            <input class="required form-control @error('password') border-error @enderror"
                              placeholder="{{ __('გაიმეორეთ პაროლი') }} *" name="password_confirmation"
                              type="password">
                          </div>
                        </div>
                        <div class="col-xs-12 register-btn-box">
                          <button class="register-btn" type="submit">Submit Now</button>
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>

            <div class="col-sm-7 form-content">
              <div class="row">
                <div class="col-sm-12 section-header-box">
                  <div class="section-header section-header-l">
                    <h2>{{ __('რატომ უნდა გაწევრიანდე ? ') }}</h2>
                  </div><!-- ends: .section-header -->
                </div>
              </div>
              <p>Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან
                იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5
                საუკუნის მანძილზე შემორჩა, არამედ მან დღემდე, ელექტრონული ტიპოგრაფიის დრომდეც უცვლელად მოაღწია.
                განსაკუთრებული პოპულარობა მას 1960-იან წლებში გამოსულმა Letraset-ის ცნობილმა ტრაფარეტებმა მოუტანა, უფრო
                მოგვიანებით კი — Aldus PageMaker-ის ტიპის საგამომცემლო პროგრამებმა, რომლებშიც Lorem Ipsum-ის სხვადასხვა
                ვერსიები იყო ჩაშენებული.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ./ End Register Area section -->
    <!-- Start Information Area Section -->
    <section class="information-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="info-content-box">
              <h2>{{ __('მეტის გასაგებად შეგიძლია დაგვიკავშირდე') }}</h2>
              {{-- <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra Pede phasell us eget Etiam maecenas --}}
              {{-- vel vici quis dictum rutrum nec nisi Ac penatibus.</p> --}}
              <div class="info-btn">
                <a href="{{ route('contact') }}" class="information-btn">{{ __('დაგვიკავშირდი') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ./ End Information Area section -->

  </div>
  @pushOnce('style')
    <style type="text/css">
      .select {
        max-height: 50px
      }

      .home_version_02 .register-area {
        background: #5e5e5e;
      }

      .home_version_02 .information-area {
        background: #bcbcbc;

      }
    </style>
  @endPushOnce
</x-web::layouts.master>
