@php
$title ='title_'.__('lang.lang');
$text ='text_'.__('lang.lang');
@endphp
<section class="section why">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <div class="divider mb-3"></div>
                    <h2>@lang('front.why-choose-us')</h2>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach($data["cards"] as $card)
                @if($loop->iteration % 2 == 0)
                <div class="col-lg-4 col-md-6">
                    <div class="card p-4 text-center mb-4 border-0 rounded-0 ">
                        {!!$card->icon()->pluck('icon')[0]!!}
                        {!!$card->$title!!}
                        {!!$card->$text!!}
                    </div>
                </div>
                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-4 text-center mb-4 border-0 bg-black-50 rounded-0 ">
                            {!!$card->icon()->pluck('icon')[0]!!}
                            {!!$card->$title!!}
                            {!!$card->$text!!}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
