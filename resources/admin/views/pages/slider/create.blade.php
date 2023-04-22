<x-admin::layouts.master>
  <x-admin::card>
    <form action="{{ route('admin.sliders.store') }}" method="post" class="moduel_create_form"
      enctype="multipart/form-data">
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}

      {{-- link --}}
      <x-admin::components.form.input name='link' label='ბანერის ლინკი' />
      {{-- link end --}}

      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor name='description[ka]' />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor name='description[ka]' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      <div class="mb-3">
        <label class="form-label" for="customFile">File input example</label>
        <input class="form-control" id="customFile" name="img" type="file" />
      </div>
      {{-- image end --}}



      <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
        {{ __('დამატება') }}
      </button>
    </form>
  </x-admin::card>

  <x-slot:scipts>
    <script src="{{ asset('../back_assets/vendors/tinymce/tinymce.min.js') }}"></script>

  </x-slot:scipts>
</x-admin::layouts.master>
