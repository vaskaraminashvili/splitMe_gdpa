@props(['name' => '', 'value' => '', 'label' => 'სახელი', 'type' => 'text'])

<div class="mb-3">
  <label class="form-label" for="{{ $name }}nput1">{{ __($label) }}</label>
  <input class="form-control" id="{{ $name }}nput1" type="{{ $type }}" name="{{ $name }}"
    value="{{ $value }}" placeholder="{{ $label }}" />
</div>
