<!-- Section About start -->
@php
$title ='title_'.__('lang.lang') ;
$text = 'text_'.__('lang.lang');
$images = $data['about']->image()->pluck('image');
@endphp
<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            @foreach($images as $image)
                <div class="col-lg-3 col-md-6">
                    <img src="{{asset_public('storage/images/'.$image)}}" alt="about-image" class="img-fluid">
                </div>
            @endforeach
            <div class="col-lg-6 col-md-12">
                <div class="about-item position-relative mt-5 mt-lg-0">
                    <span class="h5 text-lg text-muted " >@lang('front.est'){{$data['about']->year}}</span>
                    <h2 class="mt-1 mb-3">{!!$data['about']->$title!!}</h2>
                    <p class="mb-4">{!!$data['about']->$text!!}</p>
                    <a href="service.html" class="btn btn-main">
                        @lang('front.services')
                        @if(app()->getLocale() == 'ar')
                            <i class="ti-angle-left ml-2"></i>
                        @else
                            <i class="ti-angle-right ml-2"></i>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section About End -->

