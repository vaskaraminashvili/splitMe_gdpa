<x-admin::layouts.master>
  <x-admin::card>
    <x-slot:title>
      {{ __('სლაიდერი') }}
    </x-slot:title>
    <x-slot:create_button>
      <a href="{{ route('admin.sliders.create') }}" class="btn btn-falcon-success me-1 mb-1"
        type="button">{{ __('დამატება') }}
      </a>
    </x-slot:create_button>
    <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
      <div class="table-responsive scrollbar">
        <table class="table table-bordered table-striped mb-0 module_table">
          <thead class="bg-200 text-900">
            <tr>
              <th class="sort" data-sort="">ID</th>
              <th class="">{{ __('ფოტო') }}</th>
              <th class="sort" data-sort="">{{ __('სახელი') }}</th>
              <th class="sort" data-sort="" style="width: 10%">{{ __('დალაგება') }}</th>

              <th class="text-end" style="width:15%">
                <span class="text-900 fas fa-cogs"></span>
              </th>
            </tr>
          </thead>
          <tbody class="list index_table">
            @foreach ($sliders as $slider)
              <tr>
                <td class="">{{ $slider->id }}</td>
                <td class="">
                  @if ($slider->smallThumb())
                    <div class="avatar avatar-xl">
                      <a href="{{ $slider->bigThumb() }}" target="_blank">
                        <img src="{{ $slider->smallThumb() }}" alt="" />
                      </a>
                    </div>
                  @endif
                </td>
                <td class="">{{ $slider->title }}</td>
                <td class="">{{ $slider->sort }}</td>
                <td class="text-end">
                  @if ($slider->link)
                    <a href="{{ $slider->link }}" class="me-1" title="{{ __('ლინკზე გადასვლა') }}" target="_blank">
                      <span class="fa-fw text-primary fas fa-link"></span>
                    </a>
                  @endif
                  <a href="#" class="me-1 change_status" data-status="{{ $slider->status }}"
                    data-id="{{ $slider->id }}" title="{{ __('სტატუსი') }}">
                    <span class="fa-fw text-success far {{ $slider->status ? 'fa-eye' : 'fa-eye-slash' }}"></span>
                  </a>
                  <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="me-1" title="{{ __('შეცვლა') }}">
                    <span class="text-info fa-fw far fa-edit"></span>
                  </a>
                  <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST"
                    class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $slider->id }}">
                    <button class="btn btn-outline-light p-0 m-0" type="submit">
                      <span class="text-danger fa-fw fas fa-trash"></span>
                    </button>
                  </form>

                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
          data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
        <ul class="pagination mb-0"></ul>
        <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
          data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
      </div>
    </div>
  </x-admin::card>
  <x-slot:script>
    <x-admin::components.changeStatus />
  </x-slot:script>

</x-admin::layouts.master>
