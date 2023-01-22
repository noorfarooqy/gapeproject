<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title> @yield('pageTitle') - {{env('APP_NAME')}}</title>

<!-- Stylesheets -->
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->


    <!-- error-section -->
    <section class="error-section centred" style="background-image: url(images/e_ba.png);">
        <div class="container">
            <div class="content-box">
                <h1 class="error-title"> @yield('error_code') </h1>
                <h2>@yield('title')</h2>
                <div class="text">@yield('content')</div>
                <div class="btn-box"><a href="index.html"><i class="fas fa-angle-left"></i>Go back Home</a></div>
                <figure class="image-box"><img src="/images/error_image.png" alt=""></figure>
            </div>
        </div>
    </section>
    <!-- error-section end -->



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
<script src="/js/jquery-ui.js"></script>
<script src="/js/countdown.js"></script>

<!-- main-js -->
<script src="/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
