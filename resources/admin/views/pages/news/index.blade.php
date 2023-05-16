<x-admin::layouts.master>
  <x-admin::card>

    {{-- card header --}}
    <x-slot:title>
      {{ __('სიახლეები') }}
    </x-slot:title>

    <x-slot:button>
      <a href="{{ route('admin.news.create') }}" class="btn btn-falcon-success me-1 mb-1"
        type="button">{{ __('დამატება') }}
      </a>
    </x-slot:button>
    {{-- card header end --}}

    {{-- filter --}}
    {{-- <x-admin::components.filter.default module='news' /> --}}
    {{-- filter end --}}

    {{-- table which will be replaced dynamically when filtered --}}
    <x-admin::pages.news.table :news="$news" />
    {{-- table which will be replaced dynamically when filtered --}}

  </x-admin::card>

  <x-slot:script>

    {{-- js part for changing status on module --}}
    <x-admin::components.changeStatus module='news' />
    {{-- js part for changing status on module --}}

  </x-slot:script>

</x-admin::layouts.master>
