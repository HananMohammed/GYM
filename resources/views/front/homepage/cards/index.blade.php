@php
$title = 'title_'.trans('lang.lang');
$text = 'text_'.trans('lang.lang');
$count = 1;
@endphp
<!-- Start of intro Cards-->
<section class="mt-80px">
    <div class="container">
        <div class="row ">
            @foreach($data["cards"] as $card)
                 @if($loop->iteration % 2 == 0)
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-5 border-0 rounded-top border-bottom position-relative hover-style-1">
                            <span class="number">0{{$count++}}</span>
                            {!! $card->$title !!}
                            {!! $card->$text !!}
                            <a href="{{route('front.about')}}" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold">
                                @if(app()->getLocale()=='ar')
                                    @lang('front.more-details')<i class="ti-minus mr-2 "></i>
                                @else
                                    <i class="ti-minus mr-2 "></i>@lang('front.more-details')
                                @endif
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
