@php
$title = "title_".__('lang.lang') ;
$text = "text_".__('lang.lang');
@endphp
@section('page' ,__('front.about'))
<!-- Start Services Section-->
<section class="section services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <div class="divider mb-3"></div>
                    <h2>@lang('front.our-services')</h2>
                    <p class="mt-3">{{$category->text}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="media align-items-center mb-4">
                    <img src="{{asset_public('storage/images/'.$service->image()->pluck('image')[0])}}" class="mr-3 w-50" alt="...">

                    <div class="media-body">
                        <span class="letter-spacing text-sm">{{$category->title}}</span>
                        <h4 class="mb-3 text-uppercase">{{$service->$title}}</h4>
                        <p>{{$service->$text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Services Section-->
