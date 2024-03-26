@extends('layouts.navbare')

@section('content')
    <!-- breadcrumb area  start -->
    <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
        <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
        @foreach ( $Settings as $item )
            data-background="{{ asset('storage/' . $item->banner_About1) }}"></div>
        @endforeach
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1">
                        <div class="breadcrumb__title-wrapper text-center">
                            <h1 class="breadcrumb__title mb-25">Know About Myself</h1>
                        </div>
                        <div class="breadcrumb__menu text-center">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li><span>About </span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area  end -->
    <section class="bd-team-details__area section-space">
        <div class="container">
            <div class="team__details-wrapper">
                <div class="row g-5 align-items-center">
                    @foreach ($teams as $item )
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="team__details-thumb bg-solid">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="image not found">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <div class="team__details-content">
                            <div class="team__details-author">
                                <h3 class="team__details-title">{{$item->name}}</h3>
                                <span class="team__details-designation">{{$item->work}}</span>
                            </div>
                            <p>{{$item->About_Me}}</p>
                            <!-- social -->
                            <div class="theme__social">
                                <a href="{{$item->Facebook}}"><i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="{{$item->Twitter}}"><i class="icon-twiter"></i>
                                </a>
                                <a href="{{$item->Linkedin}}"><i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="{{$item->Github}}"><i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- about text area start -->
   
   <section class="bd-feature__list section-space">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-5">
                <div class="section__title-wrapper section__title-space">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle bg-field">SERVICE VISION</span>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="feature__list-wrapper">
                    @forelse ($Service_visions as $item)
                    <div class="feature__single-item">
                        <ul>
                            <li>{{$item->name}}</li>
                           
                        </ul>
                    </div>
                    @empty
                        <h4>No Data Found!</h4>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- about text area end -->

   

   

    <!-- service area start -->
    <section class="bd-service__area section-space">
        <div class="container">
            <div class="row g-5">
                @forelse ( $servic_edetails as $item )
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn"
                        data-wow-delay=".3s">
                        <span class="service__icon-wrap">
                           {!! $item->icon !!}
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="{{ route('servic-edetails.show', $item) }}">{{$item->title_Golobale}}</a></h5>
                            <p>{{$item->slug}}</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-two" href="{{ route('servic-edetails.show', $item) }}">Read More <span
                                        class="icon__box">
                                        <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                        <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <h4>No Data Found!</h4>
                @endforelse
             
            </div>
        </div>
    </section>
    <!-- service area start -->

   
 

    <!-- testimonial area start -->
    <section class="bd-testimonial__area section-space p-relative style-seven">
        @foreach ( $Settings as $item )
        <div class="bg__thumb-position include-bg is-overlay" data-background="{{ asset('storage/' . $item->banner_About2) }}">
        </div>
        @endforeach
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section__title-wrapper section__title-space text-center">
                        <span class="section__subtitle bg-field">TESTIMONIALS </span>
                        <h2 class="section__title">What Our Clients Say</h2>
                        <p class="contentHidden">contentHidden</p>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="swiper testimonial__active-two">
                        <div class="swiper-wrapper">
                            @forelse ( $Testimonials as $item )
                            <div class="swiper-slide">
                                <div class="testimonial__wrapper style-five">
                                    <div class="testimonial__top-item">
                                        <div class="testimonial__thumb-wrap">
                                            <div class="testimonial__thumb">
                                                <img src="{{ asset('storage/' . $item->photo) }}" alt="image not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">{{$item->name}}</h6>
                                                <span class="testimonial__avatar-designation">{{$item->work}}</span>
                                            </div>
                                        </div>
                                        <div class="testimonial__shape">
                                            <img class="testimonial__shape-quote"
                                                src="{{ asset('Frontend/imgs/shape/testimonial-quote-small.png') }}"
                                                alt="image not found">
                                        </div>
                                    </div>
                                    <div class="testimonial__item">
                                        <div class="testimonial__content">
                                            <div class="testimonial__text">
                                                <p>{{$item->text}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h3>No Data Found!</h3>
                            @endforelse
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="testimonial__navigation d-none d-sm-block">
                        <button class="testimonial__button-prev circle-btn slider__nav-btn"><i
                                class="fa-regular fa-arrow-left-long"></i></button>
                        <button class="testimonial__button-next circle-btn ml-5 slider__nav-btn"><i
                                class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

   
@endsection
