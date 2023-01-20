<header class="main-header style-four">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="inner-container clearfix">
                <ul class="header-info pull-left">
                    {{-- <li><a href="#">Spiritnow stories</a></li>
                    <li><a href="#">Reports & resources</a></li>
                    <li><a href="#">News & media</a></li> --}}
                </ul>
                <ul class="header-nav pull-right">
                    <li>{{$main_header?->ht_time ?? 'Time : Monday-Friday 09am-5pm'}}</li>
                    <li class="phone"><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:{{$main_header?->ht_contact_phone ?? '(+88)01912704287'}}">{{$main_header?->ht_contact_phone ?? '(+88)01912704287'}}</a></li>
                    <li>
                        <div class="language dropdownn">
                            <a class="dropdown-toggle" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Eng</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                <li><a href="#">Eng</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- header-top end -->

    <!-- header-bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="outer-container">
                <div class="nav-outer clearfix">
                    <div class="menu-area pull-left clearfix">
                        <figure class="logo-box"><a href="index.html"><img src="{{$main_header?->hb_logo ?? '/images/logo-4.png'}}" alt=""></a></figure>
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="#">Home</a></li>
                                    <li class=""><a href="#">About us</a></li>
                                    <li class=""><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="info-box pull-right clearfix">
                        <div class="search-box">
                            <div class="header-flyout-searchbar">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <div class="shop-cart"><a href="shop.html"><i class="flaticon-shopping-bag"></i><span>0</span></a></div>
                        <div class="btn-box"><a href="#"><i class="fas fa-arrow-right"></i>Get Quick Support</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header-bottom end -->

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="index.html"><img src="{{$main_header?->sh_logo ?? '/images/logo-4.png'}}" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <!-- Toggle Button -->      
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="#">Home</a></li>
                            <li class=""><a href="#">About us</a></li>
                            <li class=""><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div><!-- sticky-header end -->
</header>