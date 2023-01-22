<section class="project-style-four">
    <div class="container">
        <div class="sortable-masonry">
            <div class="top-content clearfix">
                <div class="title-box">
                    <div class="top-text">Done Case</div>
                    <div class="sec-title"><h1>Feature Project</h1></div>
                    <div class="text">Our experienced staff, combined with our global network, allow us to provide the support you need</div>
                </div>
                <div class="filters">
                    <ul class="filter-tabs filter-btns centred clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        @foreach ($project_categories as $category)
                            
                        <li class="filter" data-role="button" data-filter=".{{$category->category}}">{{$category->category}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="items-container row clearfix">
                @foreach ($project_categories as $category)
                @foreach ($category?->projects ?? [] as $project)
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all {{$category->category}} factory">
                    <div class="project-block-four">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{'/storage/'.$project?->project_feature_image ?? '/images/gallery/project-12.jpg'}}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="inner">
                                        <h3><a href="case-single.html">{{$project->project_title}}</a></h3>
                                        <div class="btn-box"><a href="case-single.html">Learn more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($category->projects) <= 1)
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all {{$category->category}} factory">
                    <div class="project-block-four">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{'/storage/'.$project?->project_feature_image ?? '/images/gallery/project-12.jpg'}}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="inner">
                                        <h3><a href="case-single.html">{{$project->project_title}}</a></h3>
                                        <div class="btn-box"><a href="case-single.html">Learn more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all {{$category->category}} factory">
                    <div class="project-block-four">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{'/storage/'.$project?->project_feature_image ?? '/images/gallery/project-12.jpg'}}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="inner">
                                        <h3><a href="case-single.html">{{$project->project_title}}</a></h3>
                                        <div class="btn-box"><a href="case-single.html">Learn more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endif
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>