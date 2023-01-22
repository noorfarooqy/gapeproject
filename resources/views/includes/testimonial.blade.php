<section class="testimonial-style-three centred">
    <div class="container">
        <div class="title-box">
            <div class="top-text">Testimonial</div>
            <div class="sec-title">
                <h1>What people say about us</h1>
                <p>We take pride in the feedback, suggestions and comments from our partners and clients.</p>
            </div>
        </div>
        <div class="two-column-carousel owl-carousel owl-theme">
            @foreach ($testimonies as $testimony)
            <div class="testimonial-content">
                <div class="inner-box">
                    <div class="text">"{{$testimony->testimony}}"</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="{{$testimony?->profile ?? '/images/resource/testimonial-1.png'}}" alt=""></figure>
                        <h5>{{$testimony?->who_said ?? 'Unknown'}}</h5>
                        <span class="designation">{{$testimony?->profession ?? ''}}</span>
                    </div>
                </div>
            </div>

           @if (count($testimonies) <= 1)
           <div class="testimonial-content">
            <div class="inner-box">
                <div class="text">"{{$testimony->testimony}}"</div>
                <div class="author-info">
                    <figure class="author-thumb"><img src="{{$testimony?->profile ?? '/images/resource/testimonial-1.png'}}" alt=""></figure>
                    <h5>{{$testimony?->who_said ?? 'Unknown'}}</h5>
                    <span class="designation">{{$testimony?->profession ?? ''}}</span>
                </div>
            </div>
           @endif
            @endforeach
    
        </div>
    </div>
</section>