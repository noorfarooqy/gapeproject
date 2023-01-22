<section class="weare-section-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="top-content wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="top-text">{{$we_are?->small_title ?? 'About us'}}</div>
                        <div class="sec-title"><h1> {{$we_are?->big_title}} </h1></div>
                        <h2>{{$we_are?->sub_title ?? ''}}</h2>
                        <div class="text">{{$we_are?->description}}</div>
                    </div>
                    <div class="lower-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-rocket"></i></div>
                                    <h5><a href="#">{{$we_are?->tagline_one_title ?? 'Top Petrol'}}</a></h5>
                                    <div class="text">{{$we_are?->tagline_one_description}}</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-oil"></i></div>
                                    <h5><a href="#">{{$we_are?->tagline_two_title}}</a></h5>
                                    <div class="text">{{$we_are?->tagline_two_description}}</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-factory-machine"></i></div>
                                    <h5><a href="#">{{$we_are?->tagline_three_title}}</a></h5>
                                    <div class="text">{{$we_are?->tagline_three_description}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="inner-content wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <figure class="image-box"><img src="{{'/storage/'.$we_are?->left_image ?? '/images/resource/weare-1.jpg'}}" alt=""></figure>
                    <div class="inner-box">
                        <div class="link-btn"><a href="#"><i class="flaticon-slim-right"></i></a></div>
                        <div class="text-content">
                            <h2>The safe choice for your supply needs Oil & Gas</h2>
                            <div class="text">Analyze overall plant capacity by planning for incoming supply and market demand</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>