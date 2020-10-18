<!-- Section Slider Start -->
<!-- Slider Start -->
<section class="slider" style="background:url({{image($data["slider"][0]->image()->pluck('image')[0])}})" >
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <span class="h6 d-inline-block mb-4 subhead text-uppercase" @if(app()->getLocale() == 'ar') style="float: right"@endif>@lang('slider.Gym-fitness-club')</span>
                <div>
                    @if(app()->getLocale() == 'ar')
                         {!!$data['slider'][0]->title_ar!!}
                    @else
                         {!!$data['slider'][0]->title_en!!}
                    @endif
                </div>
                <a href="pricing.html" target="_blank" class="btn btn-main " @if(app()->getLocale() == 'ar') style="float: right"@endif>@lang('slider.join-us') @if(app()->getLocale()=='ar')<i class="ti-angle-left ml-3"></i>@else<i class="ti-angle-right ml-3"></i>@endif</a>
            </div>
        </div>
    </div>
</section>
<!-- Section Slider End -->
