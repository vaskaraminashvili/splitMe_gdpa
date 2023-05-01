<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('სიახლის დანატება') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.news.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.news.store') }}" method="post" class="moduel_create_form" enctype="multipart/form-data">
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}


      {{-- short_description --}}
      <x-admin::components.form.tabs title="short_description">
        <x-admin::components.form.textEditor label='მოკლე აღწერა' name='short_description[ka]' />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label='მოკლე აღწერა' name='short_description[en]' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- short_description end --}}

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
      <x-admin::components.form.image />
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
