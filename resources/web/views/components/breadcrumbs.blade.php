@unless ($breadcrumbs->isEmpty())
  @php
    $page_title = $breadcrumbs->last()->title ?? '';
  @endphp
  <h1>{{ $page_title }}</h1>
  <p>
    @foreach ($breadcrumbs as $breadcrumb)
      @if (!is_null($breadcrumb->url) && !$loop->last)
        <span><a href="{{ $breadcrumb->url }}">{{ __($breadcrumb->title) }} <i class="fa fa-angle-right"></i></a>
        @else
        </span><span class=""> {{ __($breadcrumb->title) }}</span>
      @endif
    @endforeach
  </p>
@endunless
