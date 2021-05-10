<section class="contact-form section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <div class="divider mb-3"></div>
                    <h2>@lang('front.contact')</h2>
                    <p class="mt-3">@lang('front.offer')</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center pb-5">
            <div class="col-lg-9 text-center">
                <form id="contact-form" action="{{route('front.send-contact-email')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" value="{{old('name')}}" placeholder="Your Name">
                           @error('name')
                                <label for="#name" class="error">{{ $message }}</label>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="email" id="email" type="text" class="form-control"  value="{{old('email')}}" placeholder="Email Address">
                                @error('email')
                                <label for="#email" class="error">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group-2">
                                <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message">{{old('message')}}</textarea>
                                @error('message')
                                <label for="#message" class="error">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button class="btn btn-main mt-3 " type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="error" id="error">Sorry Msg dose not sent</div>
                    <div class="success" id="success">@lang('front.send-message')</div>
                </form>
            </div>
        </div>
    </div>


    <div class="google-map position-relative mt-5">
        <iframe  class="map" id="map_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.891244843036!2d31.32969091164425!3d30.693335881285552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ebea212b9987%3A0x56e393ad2a2feb84!2z2KjZgtin2YTYqSDYrNmF2KfZhCDZhti12YrYsQ!5e0!3m2!1sar!2seg!4v1619948835456!5m2!1sar!2seg" loading="lazy"></iframe>
    </div>
    <div class="container mt--170">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
                    <i class="ti-mobile mb-3 text-lg text-color"></i>
                    <span>Call us</span>
                    <p class="lead text-black mb-0 mt-3">+201201611733</p>
                    <p class="lead">9:00 am - 17:00 pm</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
                    <i class="ti-email mb-3 text-lg text-color"></i>
                    <span>Email at</span>
                    <p class="lead text-black mt-3 mb-0">info@gymfit.com</p>
                    <p class="lead text-black ">support@gymfit.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
                    <i class="ti-home mb-3 text-lg text-color"></i>
                    <span>Location</span>
                    <p class="lead text-black mt-3">Fitness Center Bedford Heights,Egypt,Cairo</p>
                </div>
            </div>
        </div>
    </div>
</section>
