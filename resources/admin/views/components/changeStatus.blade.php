<script>
  $(function() {
    $(document).on('click', '.change_status', function() {
      var $this = $(this);
      var status = $this.data('status') == 1 ? 0 : 1;
      var id = $this.data('id');
      if (status == 1) {
        $this.find('svg').removeClass('fa-eye-slash');
        $this.find('svg').addClass('fa-eye');
      } else {
        $this.find('svg').removeClass('fa-eye');
        $this.find('svg').addClass('fa-eye-slash');
      }

      $.ajax({
        type: "PUT",
        url: "./sliders/" + id,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          status: status,
          statusUpdate: true,
        },
        success: function(result) {
          $this.data('status', status);
          var message = '{{ __('განახლდა') }}';
          var toast_html = `<x-admin::toast.default>${message}</x-admin::toast.default>`;
          $('.toast-container').append(toast_html);

          // Show the toast element
          var toast_bs = new bootstrap.Toast($('.toast:last')[0]);
          toast_bs.show();
        }
      });
    });

  });
</script>
