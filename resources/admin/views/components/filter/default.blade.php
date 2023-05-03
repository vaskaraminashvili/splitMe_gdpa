@props(['module' => 'slider', 'field_name' => 'filter_name'])
@php
  $url = Str::plural($module);
@endphp
{{--
for now filter component accepts two props

module --- this one is used to change url for example for witch module we are workin slider, news, blogs, etc

field_name --- this will be field name by whitch modele above will be queryied
--}}

<div class="table_filter mb-3">
  <div class="row">
    <div class="col-xl-3">
      <x-admin::components.form.input label='სახელი' :name='$field_name' :value="app('request')->input($field_name)" />
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <button class="btn btn-primary me-1 mb-1 filter_btn" type="button">
        {{ __('გაფილტვრა') }}
      </button>

    </div>
  </div>

</div>


@push('script')
  <script src="{{ asset('../back_assets/js/jquery.debounce.min.js') }}"></script>
  <script>
    $(function() {

      $(document).on('input', '#{{ $field_name }}nput1', $.debounce(250, function() {
        var $this = $(this);
        var value = $this.val();
        filterTable(value);
      }));
      $(document).on('click', '.filter_btn', $.debounce(250, function() {
        var value = $('#{{ $field_name }}nput1').val();
        filterTable(value);
      }));

      function filterTable(value, table = null) {
        $.ajax({
          type: "post",
          url: "/admin/filter?{{ $field_name }}=" + value,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            module: '{{ $module }}',

          },
          success: function(result) {
            $('#tableExample2').html(result);
            if (!value) {
              window.history.pushState('obj', 'newtitle', '/admin/{{ $url }}');
            } else {
              window.history.pushState('obj', 'newtitle', '/admin/{{ $url }}?{{ $field_name }}=' +
                value);
            }
          }
        });
      }
    });
  </script>
@endpush
