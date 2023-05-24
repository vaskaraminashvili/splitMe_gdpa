@php
  $options = [
      '0' => 'სტომატოლოგია',
      '1' => 'ორთოდონტია',
  ];
@endphp
<div class="form-group @error('specialization') border-error @enderror">
  <select class="form-control select2-multiple " name="specialization[]" multiple="multiple">
    @foreach ($options as $key => $option)
      <option value="{{ $key }}" {{ collect(old('specialization'))->contains($key) ? 'selected' : '' }}>
        {{ __($option) }}
      </option>
    @endforeach
  </select>
</div>

@pushOnce('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script>
    $(function() {
      $(document).ready(function() {
        $('.select2-multiple').select2({
          placeholder: '{{ __('აირჩიეთ სპეციალობა') }}',
          selectionCssClass: 'sdsdssd'
        });
      });
    });
  </script>
@endPushOnce
@pushOnce('style')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
  <style type="text/css">
    .login .login-area .learnpro-register-form input[type="search"] {
      min-height: inherit;
      height: 20px;
      padding: 0px;
      border: none;
    }

    .select2-container--default .select2-selection--multiple {
      min-height: 50px;
      font-weight: 400;
      display: block;
      padding: 9px 15px;
      font-size: 14px;
      line-height: 1.428571429;
      color: #555;
      background-color: transparent;
      background-image: none;
      border-radius: 4px;
      box-shadow: none;
      -webkit-box-shadow: none;
      border: 1px solid #e9edf0;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
      border: 1px solid #e9edf0;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
      border: 1px solid #e9edf0;
    }

    .border-error {
      border-radius: 4px;
      border: 1px solid red;
    }
  </style>
@endPushOnce
