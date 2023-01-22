<section class="news-style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                <div class="title-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="top-text">Some News</div>
                    <h1>News from around the world</h1>
                    <div class="text">Subscribe today to make sure you are update to date on life</div>
                    <div class="link-btn"><a href="#">Discover More Blog</a></div>
                </div>
            </div>
            @foreach ($news as $new)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-two wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="blog-single.html">{{$new->news_title}}</a></h4>
                        <div class="post-info">by {{$new->AuthorInfo?->name}} , on {{$new->created_at->format('Y-m-d')}}</div>
                        <div class="text">{{ substr($new->news_content, 0, 124) }}</div>
                        <div class="link-btn"><a href="blog-single.html">Read More<i class="flaticon-slim-right"></i></a></div>
                    </div>
                </div>
            </div>

            @if (count($news) <= 1)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-two wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="blog-single.html">{{$new->news_title}}</a></h4>
                        <div class="post-info">by {{$new->AuthorInfo?->name}} , on {{$new->created_at->format('Y-m-d')}}</div>
                        <div class="text">{!! substr(htmlspecialchars_decode(stripslashes($new->news_content)), 0, 124) !!}</div>
                        <div class="link-btn"><a href="blog-single.html">Read More<i class="flaticon-slim-right"></i></a></div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            
        </div>
    </div>
</section>