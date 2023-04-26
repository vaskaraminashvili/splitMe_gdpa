@props(['sliders' => ''])
<x-admin::layouts.empty>
  <div id="tableExample2">
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
        <tbody class=" index_table">
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
                <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline-block">
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
    <div class="d-flex justify-content-center mt-3 custom_pagination">
      {{ $sliders->links('admin::components.pagination') }}
    </div>
  </div>

</x-admin::layouts.empty>