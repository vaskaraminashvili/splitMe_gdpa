<x-web::layouts.master>
  <x-slot:header>
    <div class="rev_slider_wrapper">
      <div id="rev_slider_1" class="rev_slider" style="display:none">

        <!-- BEGIN SLIDES LIST -->
        <ul>
          @foreach ($data['slides'] as $slide)
            <li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text"
              data-thumb="{{ $slide->bigThumb() }}">
              <div class="slider-overlay"></div>
              <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
              <img src="{{ $slide->bigThumb() }}" alt="Sky" class="rev-slidebg">
              <!-- BEGIN BASIC TEXT LAYER -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
                data-x="left" data-hoffset="0" data-y="center" data-voffset="-100"
                data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; font-size:60px; color:#fff; white-space: nowrap;font-weight:700;">
                {{ $slide->title }}
              </div>


              <!-- LAYER NR. 3 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left"
                data-hoffset="0" data-y="center" data-voffset="-10"
                data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6;">
                <div class="slide_description">
                  {!! $slide->description !!}
                </div>
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center"
                data-voffset="90"
                data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 8;">
                @if ($slide->link)
                  <a href="{{ $slide->link }}" class="el-btn-regular slider-btn-left">{{ __('დეტალურად') }}</a>
                @endif
                {{-- <a href="#." class="el-btn-regular">View Courses</a> --}}
              </div>
            </li>
          @endforeach
        </ul><!-- END SLIDES LIST -->

      </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
  </x-slot:header>
  sdfsd fsd

</x-web::layouts.master>
