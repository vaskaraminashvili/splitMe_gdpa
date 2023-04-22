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
            @foreach ($sliders as $slide)
              <tr>
                <td class="">{{ $slide->id }}</td>
                <td class="">
                  @if ($slide->smallThumb())
                    <div class="avatar avatar-xl">
                      <img src="{{ $slide->smallThumb() }}" alt="" />
                    </div>
                  @endif
                </td>
                <td class="">{{ $slide->title }}</td>
                <td class="">{{ $slide->sort }}</td>
                <td class="text-end">
                  @if ($slide->link)
                    <a href="{{ $slide->link }}" class="me-1" title="{{ __('ლინკზე გადასვლა') }}" target="_blank">
                      <span class="fa-fw text-primary fas fa-link"></span>
                    </a>
                  @endif
                  <a href="#" class="me-1" title="{{ __('სტატუსი') }}">
                    <span class="fa-fw text-success far fa-eye"></span>
                  </a>
                  <a href="#" class="me-1" title="{{ __('შეცვლა') }}">
                    <span class="text-info fa-fw far fa-edit"></span>
                  </a>
                  <a href="#" class="me-1" title="{{ __('წაშლა') }}">
                    <span class="text-danger fa-fw fas fa-trash"></span>
                  </a>
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


</x-admin::layouts.master>
