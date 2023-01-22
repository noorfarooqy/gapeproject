<section class="oilgas-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="top-box">
                        <h2>{{$basic_info?->title ?? 'Oil and Gas'}}</h2>
                        <p>{{$basic_info?->description ?? 'none'}}</p>
                    </div>
                    <figure class="image-box"><img src="{{'/storage/'.$basic_info?->resource_image ?? '/images/resource/oil-1.jpg'}}" alt=""></figure>
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h3>{{$basic_info?->second_title ?? ''}}</h3>
                        <div class="text">{{$basic_info?->second_description ?? ''}}</div>
                        <div class="btn-box"><a href="#">{{$basic_info?->button_text ?? 'Read More'}}</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                <div class="inner-box clearfix">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-idea"></i></div>
                        <h2>65%</h2>
                        <div class="text">Growth in turnover over last 2 years</div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-pollution"></i></div>
                        <h2>4,121 MB</h2>
                        <div class="text">Registered capital</div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-repair"></i></div>
                        <h2>2000+</h2>
                        <div class="text">Completed work</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>