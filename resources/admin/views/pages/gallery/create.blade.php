<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('გალერიის დანატება') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.gallery.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.gallery.store') }}" method="post" class="moduel_create_form"
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



      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor label='აღწერა' name='description[ka]' />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label='აღწერა' name='description[ka]' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' value="0" label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      <x-admin::components.form.image multiple='1' />
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
