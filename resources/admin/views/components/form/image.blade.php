@props(['item' => '', 'multiple' => false, 'module' => false])
@if ($item && $item->smallThumb() && !$module)
  <a href="{{ $item->bigThumb() }}" target="_blank">
    <img class="img-thumbnail mb-2" src="{{ $item->smallThumb() }}" alt="" />
  </a>
@endif

<label class="form-label" for="customFile">{{ __('ფოტოს ატვირთვა') }}</label>
@if ($multiple)
  <input class="form-control" id="customFile" name="img[]" type="file" value=""
    {{ $multiple ? 'multiple' : '' }} />
@else
  <input class="form-control" id="customFile" name="img" type="file" value="" />
@endif
<small>{{ __('მაქსიმალური ფაილის ზომა 2mb') }}</small>

@if ($item && $module)

  @push('style')
    <link href="{{ asset('../back_assets/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet" />
    <style type="text/css">
      .gallery-row {
        max-height: 100px;
        overflow: auto;
      }
    </style>
  @endpush
  @push('script')
    <script src="{{ asset('../back_assets/vendors/glightbox/glightbox.min.js') }}"></script>
  @endpush



  <div class="row mt-xl-3 gallery-row">
    @foreach ($item->getMedia($module) as $img)
      <div class="col-xl-1 mb-2">
        <a href="{{ $img->getFullUrl('big-thumb') }}" data-gallery="gallery-2">
          <img class="img-fluid rounded" src="{{ $img->getFullUrl('small-thumb') }}" alt="" />
        </a>
      </div>
    @endforeach
  </div>
@endif
