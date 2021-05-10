<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('front.homepage')}}">
            <h2 class="text-white text-capitalize"></i>Gym<span class="text-color">Fit</span></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
                aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-view-list"></span>
        </button>
        <div class="collapse text-center navbar-collapse" id="navbarsid">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('front.homepage')}}">@lang('front.home') <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('front.contact')}}">@lang('front.contact')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('front.about')}}">@lang('front.about')</a></li>
                @if(\Illuminate\Support\Facades\Route::currentRouteName() == "front.homepage")
                <li class="nav-item"><a class="nav-link" href="#offersSection">@lang('front.offers')</a></li>
                <li class="nav-item"><a class="nav-link" href="#servicesSection">@lang('front.services')</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallary">@lang('front.our-gallery')</a></li>
                <li class="nav-item"><a class="nav-link" href="#reviews">@lang('front.reviews')</a></li>
                @endif
            </ul>
            <div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
                @if(app()->getLocale() =='ar')
                    <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                        <h3 class="text-color mb-0">EN</h3>
                    </a>
                @else
                    <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                        <h3 class="text-color mb-0">AR</h3>
                    </a>
                @endif
            </div>
            <div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
                <a href="tel:+23-345-67890">
                    <h3 class="text-color mb-0"><i class="ti-mobile mr-2"></i>+201201611733</h3>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Header Close -->
