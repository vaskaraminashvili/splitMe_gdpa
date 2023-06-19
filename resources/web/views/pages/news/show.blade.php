<x-web::layouts.secondary>
  @php
    // dd($data['latest']);
  @endphp

  <!-- Teachers Area section -->
  <div class="event-details-1">
    <div class="event-details">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-lg-offset-2 post_left-side">
            <div class="row">

              <div class="col-sm-12">
                <div class="description-content">
                  <div class="description-heading">
                    <h3><a href="">{{ $data['news']->title }}</a></h3>

                  </div>
                  <div class="description-text">
                    <div class="row">

                      <div class="col-sm-12">
                        <div class="description-text-right">
                          {!! $data['news']->description !!}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-12">
                <div class="more-events">
                  <div class="row">
                    <h3>{{ __('სხვა სიახლეები') }}</h3>
                    @foreach ($data['latest'] as $item)
                      <div class="col-sm-6 col-md-4 event-single">
                        <div class="event-single-box">
                          {{-- <div class="img-box">
                          <img src="images/event/up-event-01.jpg" alt="" class="img-responsive">
                        </div> --}}
                          <div class="blog-content">
                            <h4><a href="{{ route('news-show', $item->id) }}">{{ $item->title }}</a></h4>

                            <div class="content-bottom">
                              <div class="content-text">
                                <p>{!! Str::limit(strip_tags($item->short_description), 50) !!} </p>
                              </div>
                              <span class="first-item"><a
                                  href="{{ route('news-show', $item->id) }}">{{ __('სრულად წაკითხვა') }}<i
                                    class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>
              </div>
              <!--End .row-->


            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- ./ End Teachers Area section -->
  @push('style')
    <style type="text/css">
      .content-text {
        min-height: 100px
      }
    </style>
  @endpush
</x-web::layouts.secondary>
