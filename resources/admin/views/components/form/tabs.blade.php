@php
$title = isset($title) ? $title : rand(1,100);
@endphp
<ul class="nav nav-tabs mb-1" id="Tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="ka-tab-{{$title}}" data-bs-toggle="tab" href="#tab-ka-{{$title}}"
           role="tab" aria-controls="tab-ka-{{$title}}" aria-selected="false">{{__('ქართული')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " id="en-tab-{{$title}}" data-bs-toggle="tab" href="#tab-en-{{$title}}"
           role="tab" aria-controls="tab-en-{{$title}}" aria-selected="true">{{__('ინგლისური')}}</a>
    </li>
</ul>
<div class="tab-content mb-3" id="TabContent">
    <div class="tab-pane fade show active" id="tab-ka-{{$title}}" role="tabpanel" aria-labelledby="ka-tab-{{$title}}">
        {{$slot}}
    </div>
    <div class="tab-pane fade" id="tab-en-{{$title}}" role="tabpanel" aria-labelledby="en-tab-{{$title}}">
        {{$enSlot ?? ''}}
    </div>
</div>
