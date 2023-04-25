<div class="card mb-3 h-lg-100">
  @if (isset($title) || isset($button))
    <div class="card-header d-flex align-items-center justify-content-between">
      {{ $title ?? '' }}
      {{ $button ?? '' }}
    </div>
  @endif
  <div class="card-body bg-light">
    {{ $slot }}
  </div>
</div>
