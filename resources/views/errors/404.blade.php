<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/imgs/favicon.svg') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/hover-reveal.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/main.css') }}">
</head>
<body>
<section class="bd-error__area section-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="error__thumb-wrapper p-relative wow fadeInUp" data-wow-delay=".3s"
                    data-wow-duration=".7s">
                    <div class="error__thumb">
                        <img src="{{ asset('Frontend/imgs/error/error.png') }}" alt="image">
                    </div>
                    <div class="error__shape-wrapper">
                        <div class="error__shape-one">
                            <img src="{{ asset('Frontend/imgs/shape/error-shape-01.png') }}" alt="image">
                        </div>
                        <div class="error__shape-two">
                            <img src="{{ asset('Frontend/imgs/shape/error-shape-02.png') }}" alt="image">
                        </div>
                        <div class="error__shape-three">
                            <img src="{{ asset('Frontend/imgs/shape/error-shape-03.png') }}" alt="image">
                        </div>
                        <div class="error__shape-four">
                            <img src="{{ asset('Frontend/imgs/shape/error-shape-04.png') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="error__content wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                    <h2 class="error__title mb-15">Opps! Page Not Found</h2>
                </div>
                <div class="error__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                    <a class="bd-btn is-btn-anim" href="/">
                        <span class="bd-btn-inner">
                            <span class="bd-btn-normal">Back to home</span>
                            <span class="bd-btn-hover">Back to home</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error area end -->



    <!-- JS here -->
    <script src="{{ asset('Frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/tween-max.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/vanilla.tilt.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/hover-reveal.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/jarallax.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/js_circle-progress.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/main.js') }}"></script>
</body>
</html>