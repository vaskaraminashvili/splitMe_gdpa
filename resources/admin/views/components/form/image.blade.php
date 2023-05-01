@props(['item' => ''])
@if ($item && $item->smallThumb())
  <a href="{{ $item->bigThumb() }}" target="_blank">
    <img class="img-thumbnail mb-2" src="{{ $item->smallThumb() }}" alt="" />
  </a>
@endif

<label class="form-label" for="customFile">{{ __('ფოტოს ატვირთვა') }}</label>
<input class="form-control" id="customFile" name="img" type="file" value="" />
<small>{{ __('მაქსიმალური ფაილის ზომა 2mb') }}</small>
