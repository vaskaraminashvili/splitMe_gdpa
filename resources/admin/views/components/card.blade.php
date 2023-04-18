    <div class="card mb-3 h-lg-100">
        @isset($title)
            <div class="card-header">
                {{$title}}
            </div>
        @endisset
        <div class="card-body bg-light">
            {{$slot}}
        </div>
    </div>
