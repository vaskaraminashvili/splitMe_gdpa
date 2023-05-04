@props(['conferences' => ''])
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
          @foreach ($conferences as $conference)
            <tr>
              <td class="">{{ $conference->id }}</td>
              <td class="">
                @if ($conference->smallThumb())
                  <div class="avatar avatar-xl">
                    <a href="{{ $conference->bigThumb() }}" target="_blank">
                      <img src="{{ $conference->smallThumb() }}" alt="" />
                    </a>
                  </div>
                @endif
              </td>
              <td class="">{{ $conference->title }}</td>
              <td class="">{{ $conference->sort }}</td>
              <td class="text-end">
                @if ($conference->link)
                  <a href="{{ $conference->link }}" class="me-1" title="{{ __('ლინკზე გადასვლა') }}" target="_blank">
                    <span class="fa-fw text-primary fas fa-link"></span>
                  </a>
                @endif
                <a href="#" class="me-1 change_status" data-status="{{ $conference->status }}"
                  data-id="{{ $conference->id }}" title="{{ __('სტატუსი') }}">
                  <span class="fa-fw text-success far {{ $conference->status ? 'fa-eye' : 'fa-eye-slash' }}"></span>
                </a>
                <a href="{{ route('admin.conference.edit', $conference->id) }}" class="me-1"
                  title="{{ __('შეცვლა') }}">
                  <span class="text-info fa-fw far fa-edit"></span>
                </a>
                <form action="{{ route('admin.conference.destroy', $conference->id) }}" method="POST"
                  class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="id" value="{{ $conference->id }}">
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
      {{ $conferences->links('admin::components.pagination') }}
    </div>
  </div>

</x-admin::layouts.empty>