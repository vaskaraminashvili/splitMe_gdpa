<x-admin::layouts.master>
  <x-admin::card>
    <form action="{{ route('admin.sliders.update', $slider->id) }}" method="post" class="moduel_create_form"
      enctype="multipart/form-data">
      @method('PUT')
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' :value="$slider->title" label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' :value="$slider->getTranslation('title', 'en')" label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}

      {{-- link --}}
      <x-admin::components.form.input name='link' label='ბანერის ლინკი' :value="$slider->link" />
      {{-- link end --}}

      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor name='description[ka]' :value="$slider->description" />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor name='description[en]' :value="$slider->getTranslation('description', 'en')" />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' :value="$slider->sort" label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      @if ($slider->smallThumb())
        <a href="{{ $slider->bigThumb() }}" target="_blank">
          <img class="img-thumbnail mb-2" src="{{ $slider->smallThumb() }}" alt="" />
        </a>
      @endif
      <div class="mb-3">
        <label class="form-label" for="customFile">{{ __('ფოტოს ატვირთვა') }}</label>
        <input class="form-control" id="customFile" name="img" type="file" value="{{ $slider->smallThumb() }}" />
      </div>
      {{-- image end --}}



      <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
        {{ __('შენახვა') }}
      </button>
    </form>
  </x-admin::card>

  <x-slot:script>
    <script src="{{ asset('../back_assets/vendors/tinymce/tinymce.min.js') }}"></script>

  </x-slot:script>
</x-admin::layouts.master>
