<div class="table_filter mb-3">
  <div class="row">
    <div class="col-xl-3">
      <x-admin::components.form.input label='სახელი' name='filter_name' :value="app('request')->input('filter_name')" />
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

      $(document).on('input', '#filter_namenput1', $.debounce(250, function() {
        var $this = $(this);
        var value = $this.val();
        filterTable(value);
      }));
      $(document).on('click', $.debounce(250, function() {
        var value = $('#filter_namenput1').val();
        filterTable(value);
      }));

      function filterTable(value, table = null) {
        $.ajax({
          type: "post",
          url: "/admin/sliders?filter_name=" + value,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(result) {
            $('#tableExample2').html(result);
            window.history.pushState('obj', 'newtitle', '/admin/sliders?filter_name=' + value);
          }
        });
      }
    });
  </script>
@endpush
