<section class="page-title bg-2" style="background:url({{asset_public('front/images/bg/bg-image-2-1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="{{route('front.homepage')}}" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">@lang('front.home')</a></li>
                    <li class="list-inline-item"><span class="text-white">|</span></li>
                    <li class="list-inline-item"><a href="{{\Illuminate\Support\Facades\URL::current()}}" class="text-color text-uppercase text-sm letter-spacing">@yield('page')</a></li>
                </ul>
                <h1 class="text-lg text-white mt-2">@lang('front.what-we-are')</h1>
            </div>
        </div>
    </div>
</section>
