<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('ასოციაციის წევრი') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.members.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.members.update', $member->id) }}" method="post" class="moduel_create_form"
      enctype="multipart/form-data">
      @method('PUT')
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' :value="$member->title" label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' :value="$member->getTranslation('title', 'en')" label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}


      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor label="აღწერა" name='description[ka]' :value="$member->description" />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label="აღწერა" name='description[en]' :value="$member->getTranslation('description', 'en')" />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' :value="$member->sort" label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      @if ($member->smallThumb())
        <a href="{{ $member->bigThumb() }}" target="_blank">
          <img class="img-thumbnail mb-2" src="{{ $member->smallThumb() }}" alt="" />
        </a>
      @endif
      <div class="mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom"
        title="{{ __('მაქსიმალური ფაილის ზომა 2mb') }}">
        <label class="form-label" for="customFile">{{ __('ფოტოს ატვირთვა') }}</label>
        <input class="form-control" id="customFile" name="img" type="file" value="{{ $member->smallThumb() }}" />
      </div>
      {{-- image end --}}



      <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
        {{ __('შენახვა') }}
      </button>
    </form>
  </x-admin::card>


</x-admin::layouts.master>
