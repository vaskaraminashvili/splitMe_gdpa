<x-web::layouts.secondary>


  <!-- Teachers Area section -->
  <section class=" event-01 blog_1">
    <div class="events-grid-3 container">
      <div class="row event-body-content">
        @foreach ($data['news'] as $item)
          <div class="col-sm-4 single-item mb-3">
            <div class="events-single-box">
              <div class="row">
                {{-- <div class="col-sm-12">
                <img src="images/event/events-01.jpg" alt="" class="img-responsive">
              </div> --}}

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

      {{ $data['news']->links('web::components.pagination') }}
    </div>
  </section>
  <!-- ./ End Teachers Area section -->
  @push('style')
    <style type="text/css">
      .single-item {
        margin-bottom: 10px;
      }

      .blog_1 .blog-area {
        min-height: auto;
        height: auto;
        padding: 10px 0;
      }
    </style>
  @endpush
</x-web::layouts.secondary>
