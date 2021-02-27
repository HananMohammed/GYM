@php
$text = 'text_'.__('lang.lang');
$title = 'title_'.__('lang.lang');
@endphp
<!-Start Service Category Section-->
<section class="section services " id="servicesSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <div class="divider mb-3"></div>
                    <h2>@lang('services.our-services')</h2>
                    <p>@lang('services.offer')</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            @foreach($data["services-category"] as $category)
            <div class="col-lg-4 col-md-6 col-sm-6"><div class="text-center  px-4 py-5 hover-style-1">
                    <a href="{{urldecode(route('front.services.redirect' ,["id"=>$category->id ,"title" => str_replace(' '  ,'-',$category->title_en)]))}}" style="text-decoration: none;color:inherit;">
                        {!!$category->icon()->pluck('icon')[0]!!}
                        <h4 class="mt-3 mb-4 text-uppercase">{{$category->$title}}</h4>
                        <p>{{$category->$text}}</p>
                    </a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
<!-End Service Category Section-->
