<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('სლაიდერი') }}
    </x-slot:title>
    <x-slot:button>
      <a href="{{ route('admin.sliders.create') }}" class="btn btn-falcon-success me-1 mb-1"
        type="button">{{ __('დამატება') }}
      </a>
    </x-slot:button>
    <x-admin::components.filter.default />
    <x-admin::pages.slider.table :sliders="$sliders" />
  </x-admin::card>
  <x-slot:script>
    <x-admin::components.changeStatus />
  </x-slot:script>

</x-admin::layouts.master>
