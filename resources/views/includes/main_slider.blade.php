<section class="slider-style-four centred">
    <div class="main-slider-carousel-2 owl-carousel owl-theme">
        @foreach ($main_sliders as $slider)
        <div class="slide" style="background-image:url({{'/storage/'.$slider->background_image ?? 'images/main-slider/slider-3.jpg'}})">
            <div class="container">
                <div class="content-box">
                    <div class="top-text">{{$slider->main_title}}</div>
                    <h1>{{$slider->sub_title}}</h1>
                    <h3>{{$slider->sub_subtitle}}</h3>
                    <div class="btn-box">
                        <a href="#" class="btn-one">{{$slider->button_title_one}}</a>
                        <a href="#" class="btn-two">{{$slider->button_title_two}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>