<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('სიახლის ცვლილება') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.gallery.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="post" class="moduel_create_form"
      enctype="multipart/form-data">
      @method('PUT')
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' :value="$gallery->title" label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' :value="$gallery->getTranslation('title', 'en')" label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}



      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor label="აღწერა" name='description[ka]' :value="$gallery->description" />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label="აღწერა" name='description[en]' :value="$gallery->getTranslation('description', 'en')" />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' :value="$gallery->sort" label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      <x-admin::components.form.image :item="$gallery" multiple='1' module='gallery' />
      {{-- image end --}}



      <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
        {{ __('შენახვა') }}
      </button>
    </form>
  </x-admin::card>


</x-admin::layouts.master>
