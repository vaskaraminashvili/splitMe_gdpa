<x-admin::layouts.master>
    <x-admin::card>
        <form action="{{route('admin.sliders.store')}}" method="post" class="moduel_create_form">
            @csrf

            <x-admin::components.tabs title="title">
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">{{__('სახელი')}}</label>
                    <input class="form-control" id="exampleFormControlInput1" type="text" name="title[ka]"
                           placeholder="name@example.com"/>
                </div>
                <x-slot:enSlot>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">{{__('სახელი')}}</label>
                        <input class="form-control" id="exampleFormControlInput1" type="text" name="title[en]"
                               placeholder="name@example.com"/>
                    </div>
                </x-slot:enSlot>
            </x-admin::components.tabs>
            <x-admin::components.tabs title="description">
                <div class="min-vh-50">
                    <textarea class="tinymce d-none" name="description[ka]"></textarea>
                </div>
                <x-slot:enSlot>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" name="description[en]"></textarea>
                    </div>

                </x-slot:enSlot>
            </x-admin::components.tabs>



            <button class="btn btn-falcon-primary me-1 mb-1 ms-auto d-block" type="submit">
                {{__('დამატება')}}
            </button>
        </form>
    </x-admin::card>

    <x-slot:scipts>
        <script src="{{asset('../back_assets/vendors/tinymce/tinymce.min.js')}}"></script>

    </x-slot:scipts>
</x-admin::layouts.master>
