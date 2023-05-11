<x-admin::layouts.master>
  <x-admin::card>

    {{-- card header --}}
    <x-slot:title>
      {{ __('გალერიები') }}
    </x-slot:title>

    <x-slot:button>
      <a href="{{ route('admin.gallery.create') }}" class="btn btn-falcon-success me-1 mb-1"
        type="button">{{ __('დამატება') }}
      </a>
    </x-slot:button>
    {{-- card header end --}}

    {{-- filter --}}
    <x-admin::components.filter.default module='gallery' />
    {{-- filter end --}}

    {{-- table which will be replaced dynamically when filtered --}}
    <x-admin::pages.gallery.table :items="$galleries" />
    {{-- table which will be replaced dynamically when filtered --}}

  </x-admin::card>

  <x-slot:script>

    {{-- js part for changing status on module --}}
    <x-admin::components.changeStatus module='gallery' />
    {{-- js part for changing status on module --}}

  </x-slot:script>

</x-admin::layouts.master>
