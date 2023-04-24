@if (Session::has('success'))
  <div class="toast-container position-fixed p-3 top-0 end-0" style="z-index: 26021">
    <div class="toast show mb-2  bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex justify-content-between align-items-center">
        <div class="toast-body">{{ Session::get('success') }}</div>
        <button class="ms-2 btn-close p-3" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
@endif
