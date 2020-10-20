@php
    $text = 'text_'.__('lang.lang');
    $title = 'title_'.__('lang.lang') ;
 @endphp
<!--Section Skills Start -->
<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                 <img src="{{asset_public('storage/images/'.$data["skills"]->image()->pluck('image')[0])}}" alt="" class="img-fluid rounded shadow w-100">
            </div>
            <div class="col-lg-6">
                <div class="pl-3 mt-5 mt-lg-0">
                    {!! $data["skills"]->$title !!}
                    {!! $data["skills"]->$text !!}
                    <a href="{{route('front.about')}}" class="btn btn-main">@lang('front.learn-more')<i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section Skills Start -->
