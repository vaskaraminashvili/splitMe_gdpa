<div class="card mb-3 h-lg-100">
  @isset($title)
    <div class="card-header d-flex align-items-center justify-content-between">
      {{ $title }}
      {{ $create_button ?? '' }}
    </div>
  @endisset
  <div class="card-body bg-light">
    {{ $slot }}
  </div>
</div>
