<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title> @yield('pageTitle') - {{env('APP_NAME')}}  </title>

<!-- Stylesheets -->
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link rel="icon" href="/images/favicon.png" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->


    <!-- search-box-layout -->
    @include('includes.search_box')
    <!-- search-box-layout end -->


    <!-- main header -->
    @include('includes.main_header')
    <!-- main-header end -->


    <!-- main-slider -->
    @include('includes.main_slider')
    <!-- main-slider end -->


    <!-- intro-section -->
    @include('includes.intro_section')
    <!-- intro-section -->


    <!-- oilgas-section -->
    @include('includes.oil_gas')
    <!-- oilgas-section end -->


    <!-- weare-section-two -->
    @include('includes.we_are')
    <!-- weare-section-two end -->


    <!-- project-style-four -->
    @include('includes.projects')
    <!-- project-style-four -->


    <!-- growth-section -->
    @include('includes.growth')
    <!-- growth-section end -->


    <!-- testimonial-style-three -->
    @include('includes.testimonial')
    <!-- testimonial-style-three end -->


    <!-- team-style-three -->
    @include('includes.team')
    <!-- team-style-two end -->


    <!-- news-style-three -->
    @include('includes.news')
    <!-- news-style-three end -->


    <!-- subscribe-style-two -->
    @include('includes.subscribe')
    <!-- subscribe-style-two end -->


    <!-- main-footer -->
    @include('includes.footer')
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>



<!-- jequery plugins -->
<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/validation.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/jquery.countTo.js"></script>

<!-- main-js -->
<script src="/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
