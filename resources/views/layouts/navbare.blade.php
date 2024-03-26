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


    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader start -->

    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            @foreach ( $Settings as $item )
                            <a href="/">
                                <img src="{{ asset('storage/' . $item->logo) }}" alt="logo not found">
                            </a>
                            @endforeach
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <div class="offcanvas__social">
                        <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                        <div class="theme__social">
                            @foreach ($teams as $item )
                            <a href="{{$item->Github}}"><i class="fa-brands fa-github"></i></a>
                            <a href="{{$item->Twitter}}"><i class="icon-twiter"></i></a>
                            <a href="{{$item->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                            <a href="{{$item->Linkedin}}"><i class="fa-brands fa-linkedin"></i></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="offcanvas__btn">
                        <div class="header__btn-wrap">
                            <a class="bd-btn is-btn-anim" href="{{ route('download.cv') }}">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">DOWNLOAD CV</span>
                                    <span class="bd-btn-hover">DOWNLOAD CV</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area end-->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-transparent">
            <div class="container">
                <div class="mega__menu-wrapper p-relative">
                    <div class="header__main">
                        <div class="header__left">
                            @foreach ( $Settings as $item )
                            <div class="header__logo">
                                <a href="/">
                                    <img class="logo__white" src="{{ asset('storage/' . $item->logo) }}" alt="logo not found">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="header__middle">
                            <div class="mean__menu-wrapper d-none d-md-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="onepage-menu">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{route('about')}}">About</a>
                                            </li>
                                            <li><a href="{{route('Service')}}">Services</a>
                                            </li>
                                            <li><a href="{{route('Portfolio')}}">Portfolio</a>
                                            </li>
                                            <li><a href="{{route('Blog')}}">Blog</a>
                                            
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                    <div class="header__hamburger ml-20 d-none">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span>01</span>
                                            <span>01</span>
                                            <span>01</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__action d-flex align-items-center">
                                <div
                                    class="header__btn-wrap d-none d-sm-inline-flex d-inline-flex align-items-center gap-5">
                                    <a class="bd-btn is-btn-anim bordered-blue" href="{{ route('download.cv') }}">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">
                                                DOWNLOAD CV</span>
                                            <span class="bd-btn-hover">
                                                DOWNLOAD CV</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>



                                </div>
                                <div class="header__hamburger ml-20 d-lg-none">
                                    <div class="sidebar__toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- for wp -->
                                <div class="header__hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Body main wrapper start -->
    <main>
        @yield('content') 
    </main>
    <!-- Body main wrapper end -->

    <!-- Footer area start -->
    <footer>
        <section class="footer__area section-space-top">
            <div class="container">
                <div class="section__divider">
                    <hr>
                </div>
                <div class="footer__bottom">
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>About us</h5>
                        </div>
                        @foreach ($teams as $item)
                        <div class="footer__widget-content">
                            <p class="mb-30">{{$item->About_Me}}</p>
                          
                        </div>
                       @endforeach
                    </div>
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>Contacts</h5>
                        </div>
                        <div class="footer__links">
                              <div class="contact__info-item style-two">
                                <ul>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                                    <i class="icon-phone"></i>
                                                </span>
                                            </div>
                                            @foreach ($teams as $item)
                                            <div class="contact__info-content">
                                                <p>Phone</p>
                                                <h6><a href="tel:{{$item->Mobile}}">{{$item->Mobile}}</a></h6>
                                            </div>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                                    <i class="icon-envelope"></i>
                                                </span>
                                            </div>
                                            @foreach ($teams as $item)
                                            <div class="contact__info-content">
                                                <p>Email</p>
                                                <h6><a href="mailto:{{$item->email}}">{{$item->email}}</a></h6>
                                            </div>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>Services</h5>
                        </div>
                        <div class="footer__links">
                            <ul>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('Service')}}">Services</a></li>
                                <li><a href="{{route('Portfolio')}}">Project</a></li>
                                
                                <li><a href="{{route('Blog')}}">Blog</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>Subscribe Now</h5>
                        </div>
                        <div class="footer__widget-content">
                            <p>Subscribe to get the latest news from me</p>
                            <form action="{{ route('send.email') }}" method="POST">
                                @csrf
                                <div class="footer__input">
                                    <input  type="email" name="email" placeholder="Enter your mail">
                                    <button class="footer__btn" type="submit"><i class="icon-plane"></i></button>
                                </div>
                            </form>
                            <p>*I am not going to save your data</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section divider -->
            <div class="section__divider">
                <hr>
            </div>
            <div class="footer__copyright style-two">
                <div class="container">
                    <div class="footer__copyright">
                        <p>Copyright @ 2024 <a href="#">oussama elassmaoui.</a> All Right Reserved</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer area end -->

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