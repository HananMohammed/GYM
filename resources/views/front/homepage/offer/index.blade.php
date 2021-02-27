<!--Start Section Offer-->
@php
$title = 'title_'.__('lang.lang');
$text = 'text_'.__('lang.lang');
@endphp
<section class="section cta" style="background: url({{asset_public('storage/images/'.$data["offer"]->image()->pluck('image')[0])}})" id="offersSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="text-center">
                    <span class="h6 letter-spacing text-white">{{$data["offer"]->$title}}</span>
                    {!!$data["offer"]->$text!!}

                    <a href="{{route('front.contact')}}" class="btn btn-main text-white">@lang('front.join-today')</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Section Offer-->
