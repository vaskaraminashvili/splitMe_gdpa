<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('სიახლის ცვლილება') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.news.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.news.update', $news->id) }}" method="post" class="moduel_create_form"
      enctype="multipart/form-data">
      @method('PUT')
      @csrf
      {{-- title --}}
      <x-admin::components.form.tabs title="title">
        <x-admin::components.form.input name='title[ka]' :value="$news->title" label='სახელი' />
        <x-slot:enSlot>
          <x-admin::components.form.input name='title[en]' :value="$news->getTranslation('title', 'en')" label='სახელი ENG' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- title end --}}


      {{-- short_description --}}
      <x-admin::components.form.tabs title="short_description">
        <x-admin::components.form.textEditor label='მოკლე აღწერა' name='short_description[ka]' :value="$news->short_description" />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label='მოკლე აღწერა' name='short_description[en]' :value="$news->getTranslation('short_description', 'en')" />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- short_description end --}}


      {{-- description --}}
      <x-admin::components.form.tabs title="description">
        <x-admin::components.form.textEditor label="აღწერა" name='description[ka]' :value="$news->description" />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label="აღწერა" name='description[en]' :value="$news->getTranslation('description', 'en')" />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' :value="$news->sort" label='სორტირება' type='number' />
      {{-- sort end --}}


      {{-- image --}}
      <x-admin::components.form.image :item="$news" />
      {{-- image end --}}



      <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
        {{ __('შენახვა') }}
      </button>
    </form>
  </x-admin::card>


</x-admin::layouts.master>
