<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('წევრის დანატება') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.members.index') }}" class="btn btn-falcon-primary me-1 mb-1 ms-auto"
        type="button">{{ __('უკან დაბრინება') }}
      </a>
    </x-slot:button>
    <form action="{{ route('admin.members.store') }}" method="post" class="moduel_create_form"
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
        <x-admin::components.form.textEditor label="აღწერა" name='description[ka]' />
        <x-slot:enSlot>
          <x-admin::components.form.textEditor label="აღწერა" name='description[ka]' />
        </x-slot:enSlot>
      </x-admin::components.form.tabs>
      {{-- description end --}}

      {{-- phone --}}
      <x-admin::components.form.input name='phone' label='საკონტაქტო' />
      {{-- phone end --}}

      {{-- registration --}}
      <x-admin::components.form.date name='date' label='რეგისრაციის თარიღი' />
      {{-- registration end --}}

      {{-- sort end --}}
      <x-admin::components.form.input name='sort' value="0" label='სორტირება' type='number' />
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

</x-admin::layouts.master>
