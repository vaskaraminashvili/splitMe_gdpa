@props(['name' => '', 'value' => '', 'label' => 'სახელი'])
<div class="min-vh-50">


  <div class="row mb-3">
    <label class="col-sm-2 col-form-label form-label" for="{{ $name }}nput1">
      <div class="d-flex align-items-center h-100">
        <span>{{ __($label) }}</span>
      </div>
    </label>
    <div class="col-sm-10">
      <textarea class="tinymce d-none" name="{{ $name }}">{{ $value }}</textarea>
    </div>
  </div>
</div>


@pushOnce('script')
  <script src="{{ asset('../back_assets/vendors/tinymce/tinymce.min.js') }}"></script>
@endPushOnce
