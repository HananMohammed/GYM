<section class="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <div class="divider mb-3"></div>
                    <h2>@lang('front.our-gallery')</h2>
                    <p>@lang('front.offer')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row no-gutters portfolio-gallery">
            @foreach($data["gallary"] as $gallary)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{asset_public('storage/images/'.$gallary->image()->pluck('image')[0])}}" class="popup-gallery">
                    <img src="{{asset_public('storage/images/'.$gallary->image()->pluck('image')[0])}}"  alt="" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
