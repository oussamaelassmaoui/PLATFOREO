@extends('layouts.navbare')

@section('content')
<br><br>
     <!-- breadcrumb area  start -->
     <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
        <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
            data-background="{{ asset('Frontend/imgs/breadcrumb/breadcrumb-bg-02.png') }}"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-7 col-lg-8">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                        <div class="breadcrumb__title-wrapperr">
                            <h1 class="breadcrumb__title mb-25">Services Details</h1>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li><span><a href="#">Service</a></span></li>
                                    <li><span>Service Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area  end -->

    <!-- Service area start -->
    <section class="bd__service-area section-space">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-5">
                    <div class="service__widget">
                        <div class="service__widget-item mb-30">
                            
                        </div>
                        <div class="service__widget-item mb-30">
                            <div class="service__contact underline-full">
                                <h5>Get in Touch </h5>
                                <form  action="{{ route('Contacts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="from__input-box">
                                        <div class="contentHidden">
                                            <label for="name">first Name<span>*</span></label>
                                        </div>
                                        <div class="form__input style-two">
                                            <input name="name" id="name" type="text" placeholder="First Name">
                                            <div class="contentHidden"><span><i
                                                        class="fa-solid fa-house"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="from__input-box">
                                        <div class="contentHidden">
                                            <label for="email">email<span>*</span></label>
                                        </div>
                                        <div class="form__input style-two">
                                            <input name="email" id="email" type="email" placeholder="Email">
                                            <div class="contentHidden"><span><i
                                                        class="fa-solid fa-house"></i></span></div>
                                        </div>
                                    </div>

                                    <div class="from__input-box">
                                        <div class="contentHidden">
                                            <label for="name">message<span>*</span></label>
                                        </div>
                                        <div class="form__input style-two">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                            <div class="contentHidden"><span><i
                                                        class="fa-solid fa-envelope"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="contact__btn">
                                        <button class="bd-btn w-100" >Submit now</button>
                                    </div>
                                </form>
                                <!-- <p class="ajax-response"></p> -->
                            </div>
                        </div>
                        <div class="service__widget-item mb-30">
                            <div class="service__contact-info-item underline-full">
                                <h5>Contact Info</h5>
                                <div class="contact__info-item">
                                    <ul>
                                     @foreach ($user as $item )
                                     <li>
                                        <div class="contact__info">
                                            <div class="contact__info-icon">
                                                <span>
                                                    <i class="icon-phone"></i>
                                                </span>
                                            </div>
                                            <div class="contact__info-content">
                                                <h6><a href="tel:{{$item->user->Mobile}}">{{$item->user->Mobile}}</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                     @endforeach  
                                     @foreach ($user as $item )
                                        <li>
                                            <div class="contact__info">
                                                <div class="contact__info-icon">
                                                    <span>
                                                        <i class="icon-envelope"></i>
                                                    </span>
                                                </div>
                                                <div class="contact__info-content">
                                                    <h6><a href="mailto:{{$item->user->email}}">{{$item->user->email}}</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 order-first order-lg-last">
                    <div class="service__details-wrapper">
                        <h2 class="service__details-title mb-25">{{$servic_edetail->title}}
                        </h2>
                        <p>{{$servic_edetail->text}}</p>
                        <div class="service__details-thumb">
                            <img src="{{ asset('storage/' . $servic_edetail->photo) }}" alt="image not found">
                        </div>
                        <div class="service__details-text">
                            {!! $servic_edetail->description !!}
                        </div>
                        
                    </div>
                    <div class="service__details-sec text-center mt-50">
                        <h2 class="service__details-title mb-25">Our Featured Service</h2>
                    </div>
                    <div class="service__details-item">
                      
                        @foreach ($servic_edetails as $item)
                        <div class="service__wrapper service__item style-seven bg-solid">
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
                        @endforeach
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- testimonial area start -->
    <section class="bd-testimonial__area section-space theme-bg-secondary p-relative">
        <div class="testimonial__shape">
            <img class="testimonial__shape-three" src="{{ asset('Frontend/imgs/shape/four-line-shape-1.png') }}  "            alt="image not found">
            <img class="testimonial__shape-four" src="{{ asset('Frontend/imgs/shape/four-line-shape-2.png') }}  "  alt="image not found">
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title-wrapper section__title-space">
                        <span class="section__subtitle bg-field">TESTIMONIALS </span>
                        <h2 class="section__title">Client Experiences and Testimonials</h2>
                        <p class="contentHidden">contentHidden</p>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="swiper testimonial__active-two">
                        <div class="swiper-wrapper">
                            @forelse ($Testimonials as $item )
                            <div class="swiper-slide">
                                <div class="testimonial__wrapper style-five">
                                    <div class="testimonial__top-item">
                                        <div class="testimonial__thumb-wrap">
                                            <div class="testimonial__thumb">
                                                <img src="{{ asset('storage/' . $item->photo) }}" alt="image not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h5 class="testimonial__avatar-title">{{$item->name}}</h5>
                                                <span class="testimonial__avatar-designation">{{$item->work}}/
                                                    
                                                </span>
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
                                                <p>{{$item->text}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h4>No Testimonials Yet</h4>
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