<section class="team-style-three">
    <div class="container">
        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-three wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{'/storage/'.$team?->profile}}" alt=""></a></figure>
                        <div class="content-box">
                            <h4><a href="#">{{$team->name}}</a></h4>
                            <span class="designation">{{$team->profession}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($teams) <=1)
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-three wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{'/storage/'.$team?->profile}}" alt=""></a></figure>
                        <div class="content-box">
                            <h4><a href="#">{{$team->name}}</a></h4>
                            <span class="designation">{{$team->profession}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-three wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{'/storage/'.$team?->profile}}" alt=""></a></figure>
                        <div class="content-box">
                            <h4><a href="#">{{$team->name}}</a></h4>
                            <span class="designation">{{$team->profession}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            
        </div>
    </div>
</section>