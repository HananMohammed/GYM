<section id="reviews" class="section textimonial position-relative bg-3" style="background: url({{asset_public('front/images/bg-cta.jpg')}})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="opinion-title text-center">
                    <h2 class="text-white">@lang('front.What-People-say')</h2>
                </div>
            </div>
            <div class="col-12">
                 <div class="testimonial-slider">
                     @foreach($data["opinions"] as $opinion)
                         <div class="text-center mb-4 counter" data-slick-index="-1" aria-hidden="true" style="width: 730px;" tabindex="-1">
                             <i class=" text-lg text-color c-counter">{{$opinion->counter}}</i>
                             <h3 class="mt-4 text-white letter-spacing">{{$opinion->title}}</h3>
                             <p class="my-4 text-white-50">{{$opinion->text}}</p>
                             <div>
                                 <h4 class="mb-0 text-capitalize text-white font-weight-normal">{{$opinion->name}}</h4>
                                 <span class="text-white-50">{{$opinion->role}}</span>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
        </div>
    </div>
</section>
@section('scripts')
   @if(app()->getLocale()=='ar')
       <script type="text/javascript">
             $(document).ready(function () {
                 $('.testimonial-slider').not('.slick-initialized').slick({
                     slidesToShow: 1,
                     infinite: true,
                     arrows: false,
                     autoplay: true,
                     autoplaySpeed: 5000,
                     dots: true,
                     rtl:true
                 });
             })
       </script>
   @else
       <script>
           $('.testimonial-slider').not('.slick-initialized').slick({
               slidesToShow: 1,
               infinite: true,
               arrows: false,
               autoplay: true,
               autoplaySpeed: 5000,
               dots: true,
           });
       </script>
   @endif
<script>
    $(function () {
        function isScrolledIntoView($elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $elem.offset().top;
            var elemBottom = elemTop + $elem.height();
            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }

        function count($this) {
            var current = parseInt($this.html(), 10);
            if (isScrolledIntoView($this) && !$this.data("isCounting") && current < $this.data('count')) {
                $this.html(++current);
                $this.data("isCounting", true);
                setTimeout(function () {
                    $this.data("isCounting", false);
                    count($this);
                }, 50);
            }
        }

        $(".c-counter").each(function () {
            $(this).data('count', parseInt($(this).html(), 10));
            $(this).html('0');
            $(this).data("isCounting", false);
        });

        function startCount() {
            $(".c-counter").each(function () {
                count($(this));
            });
        };

        $(window).scroll(function () {
            startCount();
        });

        startCount();
    });

</script>
@endsection
