<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('კონფერენციის ბმული') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.conference.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.conference.update', $conference->id) }}" method="post" class="moduel_create_form"
      enctype="multipart/form-data">
      @method('PUT')
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' :value="$conference->title" label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' :value="$conference->getTranslation('title', 'en')" label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}

      {{-- link --}}
      <x-admin::components.form.input name='link' label='ბანერის ლინკი' :value="$conference->link" />
      {{-- link end --}}

      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor label="აღწერა" name='description[ka]' :value="$conference->description" />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label="აღწერა" name='description[en]' :value="$conference->getTranslation('description', 'en')" />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' :value="$conference->sort" label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      @if ($conference->smallThumb())
        <a href="{{ $conference->bigThumb() }}" target="_blank">
          <img class="img-thumbnail mb-2" src="{{ $conference->smallThumb() }}" alt="" />
        </a>
      @endif
      <div class="mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom"
        title="{{ __('მაქსიმალური ფაილის ზომა 2mb') }}">
        <label class="form-label" for="customFile">{{ __('ფოტოს ატვირთვა') }}</label>
        <input class="form-control" id="customFile" name="img" type="file"
          value="{{ $conference->smallThumb() }}" />
      </div>
      {{-- image end --}}



      <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
        {{ __('შენახვა') }}
      </button>
    </form>
  </x-admin::card>


</x-admin::layouts.master>
