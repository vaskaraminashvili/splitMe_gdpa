@props(['name' => '', 'value' => '', 'label' => 'სახელი', 'type' => 'text'])

<label class="form-label" for="{{ $name }}datepicker">{{ __($label) }}</label>
<input class="form-control datetimepicker" id="{{ $name }}datepicker" type="text" placeholder="d/m/y"
  data-options='{"disableMobile":true}' value="{{ $value }}" placeholder="{{ $label }}"
  name="{{ $name }}" />


@pushOnce('style')
  <link href="{{ asset('../back_assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endPushOnce

@pushOnce('script')
  <script src="{{ asset('../back_assets/js/flatpickr.js') }}"></script>
@endPushOnce
