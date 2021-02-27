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
                <form id="contact-form">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="user_name" type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="user_email" type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group-2">
                                <textarea name="user_message" class="form-control" rows="8" placeholder="Your Message"></textarea>
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
        <div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"
             data-marker="{{asset_public('front/images/marker.png')}}"></div>
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
