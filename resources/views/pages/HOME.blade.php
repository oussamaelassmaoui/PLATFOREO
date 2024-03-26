@extends('layouts.navbare')

@section('content')
    <!-- Banner area start -->
    <section class="banner__area banner-height d-flex align-items-center p-relative">
        <div class="banner-shape d-none d-lg-block">
            <img class="banner__shape-two" src="{{ asset('Frontend/imgs/shape/tower-shape-small.png') }}" alt="image not found">
        </div>
        <!-- when slide active remove this class -->
        @foreach ($teams as $item )
        <div class="swiper banner__active overflow-visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner_more_item">
                    <div class="container">
                        <div class="row align-items-center gy-5">
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__content p-relative">
                                    <h3 class="banner__title large wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration=".7s">Hi, <span class="banner__shape-hand"><img
                                                src="{{ asset('Frontend/imgs/shape/hand-shape.png') }}" alt="image not found"></span>
                                        I’m <span class="bd-text-primary">{{$item->name}}</span> <br>{{$item->work}}
                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">{{$item->About_Me}}</p>
                                </div>
                                <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                    <a class="bd-btn is-btn-anim" href="{{ route('Portfolio') }}">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Get my work</span>
                                            <span class="bd-btn-hover">Get my work</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__thumb-wrapper wow fadeInRight" data-wow-delay=".8s"
                                    data-wow-duration="1.2s">
                                    <div class="banner__shape">
                                        <img class="banner__shape-one" src="{{ asset('Frontend/imgs/shape/tower-shape.png') }}"
                                            alt="image not found">
                                    </div>
                                    <div class="banner__bg"></div>
                                   @foreach ( $Settings as $item )
                                   <div class="banner__thumb">
                                    <img src="{{ asset('storage/' . $item->photo_profil) }}" alt="image not found">
                                </div>
                                   @endforeach
                                   @foreach ($teams as $item )
                                   <div class="theme__social banner-social">
                                   
                                    <a href="{{$item->instagram}}"><i class="fa-brands fa-instagram"></i>
                                        <div class="banner__social-tooltip">
                                            <p>Instagram</p>
                                        </div>
                                    </a>
                                    <a href="{{$item->Twitter}}"><i class="icon-twiter"></i>
                                        <div class="banner__social-tooltip">
                                            <p>Twitter</p>
                                        </div>
                                    </a>
                                    <a href="{{$item->Linkedin}}"><i class="fa-brands fa-linkedin"></i>
                                        <div class="banner__social-tooltip">
                                            <p>Linkedin</p>
                                        </div>
                                    </a>
                                    <a href="{{$item->Github}}"><i class="fa-brands fa-github"></i>
                                        <div class="banner__social-tooltip">
                                            <p>Github</p>
                                        </div>
                                    </a>
                                    
                                </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- Banner area end -->

    <!-- About area start -->
    <section id="homeabout" class="bd-about__area section-space theme-bg-secondary">
        <div class="container">
           @forelse ($teams as $item )
           <div class="row g-5 align-items-lg-center">
                
            <div class="col-lg-6 col-md-6">
                <div class="about__thumb-wrapper wow fadeInLeft tilt" data-wow-delay=".3s">
                    <div class="about__thumb">
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="image not found">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__content wow fadeInRight" data-wow-delay=".3s">
                    <div class="section__title-wrapper mb-25">
                        <div class="section__title-wrapper">
                            <span class="section__subtitle">ABOUT ME</span>
                            <h2 class="section__title">{{$item->name}}</h2>
                            <p class="contentHidden">contentHiddenText</p>
                        </div>
                    </div>
                    <p class="about__text">{{$item->About_Me}}</p>
                    
                    <div class="about__counter-wrapper">
                        <div class="about__counter-info">
                            <div class="about__counter-count">
                                <h3><span class="counter">{{$item->Years_of_Experience}}</span>th</h3>
                            </div>
                            <p>Years of Experience</p>
                        </div>
                        <div class="about__counter-info">
                            <div class="about__counter-count">
                                <h3><span class="counter">{{$totalProject}}</span></h3>
                            </div>
                            <p>Project Completed</p>
                        </div>
                    </div>
                    <div class="about__btn">
                        <a class="bd-btn is-btn-anim" href="{{ route('about') }}">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">Know more</span>
                                <span class="bd-btn-hover">Know more</span>
                                <i class="contentHidden"></i>
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
    </section>
    <!-- About area end -->

    <!-- Service area start -->
    <section id="homeservices" class="bd-service__area section-space p-relative fix">
        <div class="service__shape-wrapper">
            <img class="service__shape" src="{{ asset('Frontend/imgs/service/shape/service-shape-01.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle">MY SERVICE</span>
                        <h2 class="section__title mb-20">Professional Services</h2>
                        <p class="section__paragraph is-br-none">Begin with a brief introduction or summary that
                            <br> highlights who you are and what
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
           @forelse ( $servic_edetails as $item)
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                <div class="service__wrapper service__item bg-solid bordered-style">
                    <div class="service__shape"></div>
                    <div class="service__shape-2"></div>
                    <span class="service__icon-wrap">
                        {!! $item->icon !!}
                    </span>
                    <div class="service__content">
                        <h5 class="service__title"><a href="{{ route('servic-edetails.show', $item) }}">{{$item->title_Golobale}}</a></h5>
                        <p>{{$item->slug}}</p>
                        <div class="contentHidden">
                            <a class="contentHidden" href="{{ route('servic-edetails.show', $item) }}"><span><i
                                        class="contentHidden"></i></span></a>
                            <a class="contentHidden" href="{{ route('servic-edetails.show', $item) }}"> <span class="contentHidden"></span></a>
                        </div>
                    </div>
                </div>
            </div>
               @empty
              <h3>No Data Found!</h3> 
               @endforelse
                
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- Portfolio area start -->
    <section id="homeworks" class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-end section__title-space">
                <div class="col-lg-5 col-md-7">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle">MY RECENT PORTFOLIO</span>
                        <h4 class="section__title">Check My Latest Works </h4>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="portfolio__more text-md-end">
                        <a class="bd-btn is-btn-anim" href="{{ route('Portfolio') }}">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">View all project</span>
                                <span class="bd-btn-hover">View all project</span>
                                <i class="contentHidden"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio__wrapper">
                <div class="row grid g-5 wow fadeInUp" data-wow-delay=".5s">
                    
                    @forelse ($projects as $item )
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="{{ route('projects.show',$item) }}">
                                <img src="{{ asset('storage/'.$item->photo) }}"
                                        alt="img not found"></a>
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        <a href="{{ route('projects.show',$item) }}">{{$item->Categorie->name}}</a>
                                    </div>
                                    <h5 class="portfolio__title"><a href="{{ route('projects.show',$item) }}">{{$item->name}}</a>
                                    </h5>
                                </div>
                                <div class="portfolio__btn">
                                    <a href="{{ route('projects.show',$item) }}" class="circle-btn">
                                        <span class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h4>No Project Found!</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio area start -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- qualification start -->
    <section class="bd-qulafication__area section-space">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="section__title-wrapper text-center">
                        <span class="section__subtitle">Education & SKILL</span>
                        <h2 class="section__title mb-25">My Curriculum Vitae</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30">
                <div class="col-lg-6 col-md-6">
                    <div class="faq__tab-wrapper bd-tab">
                        <nav>
                            <div class="nav nav-tabs faq-tab-slide justify-content-center" id="nav-tab" role=tablist>
                                <label for="faq-tab-check" class="nav faq-separate">
                                    <span class="nav-link" id="nav-experience-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-experience" role="tab" aria-controls="nav-experience"
                                        aria-selected="true">Experience</span>
                                    <input type="checkbox" id="faq-tab-check">
                                    <i></i>
                                    <span class="nav-link active" id="nav-education-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-education" role="tab" aria-controls="nav-education"
                                        aria-selected="false">Education</span>
                                </label>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center wow fadeInUp" data-wow-delay=".3s">
                <div class="tab-content wow fadeInUp" id="nav-tabContent" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="tab-pane fade show  active" id="nav-experience" role="tabpanel"
                        aria-labelledby="nav-experience-tab">
                        <div class="row g-5">
                            <div class="col-md-12">
                                <div class="faq__style">
                                    <div class="bd__faq">
                                        <div class="accordion" id="accordionExampleFour">
                                            @forelse ($Experiences as $item)
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo{{ $loop->iteration}}"
                                                        aria-expanded="false" aria-controls="collapseTwo{{ $loop->iteration }}">
                                                        {{$item->subject}}
                                                    </button>
                                                </h5>
                                                <div id="collapseTwo{{ $loop->iteration }}" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExampleFour">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">{{$item->name_company}} | ({{$item->Start_Date}} -
                                                            {{$item->date_final}})</span>
                                                        <p>{!! $item->description !!}</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                              <h4>No Experiences Yet!</h4>
                                            @endforelse
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="tab-pane fade " id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                        <div class="row g-5">
                            <div class="col-md-12">
                                <div class="faq__style">
                                    <div class="bd__faq">
                                        <div class="accordion" id="accordionExampleThree">
                                            @forelse ($Educations as $item )
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingSix_1">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix_1{{ $loop->iteration }}"
                                                        aria-expanded="false" aria-controls="collapseSix_1{{ $loop->iteration }}">
                                                        {{$item->specialty}}
                                                    </button>
                                                </h5>
                                                <div id="collapseSix_1{{ $loop->iteration }}" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix_1"
                                                    data-bs-parent="#accordionExampleThree">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">{{$item->name_ecole}} |({{$item->Start_Date}} -
                                                            {{$item->date_final}})</span>
                                                        <p>{!! $item->description !!}</p>
                                                       
                                                    </div>
                                                </div>
                                            </div> 
                                            @empty
                                               <h4>Education is not available yet!</h4>  
                                            @endforelse
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- qualification end -->

    <!-- counter area start -->

    <div class="brand__area section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <div class="elements-section__wrapper elements-line">
                            <div class="separator__line line-left"></div>
                            <div class="elements-title__wrapper">
                                <h4 class="section__title elements__title">
                                @foreach ($Skills_Type as $iteme)
                                    {{$iteme->SkillsType->name}}
                                @endforeach
                                </h4>
                            </div>
                            <div class="separator__line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand__wrapper style-two">
            <div class="container">
                <div class="swiper brand__active">
                    <div class="swiper-wrapper">
                        @forelse ($Skills as $Skill)
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="{{ asset('storage/' . $Skill->Photo) }}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                                @empty
                                <h4>No Data Found!</h4>
                         @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- counter area end -->


    <!-- counter area start -->

    <div class="brand__area section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <div class="elements-section__wrapper elements-line">
                            <div class="separator__line line-left"></div>
                            <div class="elements-title__wrapper">
                                <h4 class="section__title elements__title">
                                    @foreach ($Skills_TypeF as $itemeF)
                                    {{$itemeF->SkillsType->name}}
                                    
                                @endforeach
                                </h4>
                            </div>
                            <div class="separator__line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand__wrapper style-two">
            <div class="container">
                <div class="swiper brand__active">
                    <div class="swiper-wrapper">
                        @forelse ($SkillsF as $SkillF)
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="{{ asset('storage/' . $SkillF->Photo) }}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4>No Data Found!</h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- counter area end -->

    <!-- counter area start -->

    <div class="brand__area section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <div class="elements-section__wrapper elements-line">
                            <div class="separator__line line-left"></div>
                            <div class="elements-title__wrapper">
                                <h4 class="section__title elements__title">
                                    @foreach($Skills_TypeO as $itemeO)
                                    {{$itemeO->SkillsType->name}}
                                   
                                @endforeach
                                </h4>
                            </div>
                            <div class="separator__line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand__wrapper style-two">
            <div class="container">
                <div class="swiper brand__active">
                    <div class="swiper-wrapper">
                        @forelse ($SkillsO as $SkillO)
                            <div class="swiper-slide">
                                <div class="brand__item text-center">
                                    <div class="brand__thumb">
                                        <img src="{{ asset('storage/' . $SkillO->Photo) }}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4>No Data Found!</h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- counter area end -->



    <!-- testimonial area start -->
    <section class="bd-testimonial__area section-space theme-bg-secondary p-relative z-index-1">
        <div class="container">
            <div class="row align-items-center g-5 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial__thumb-wrap">
                        @foreach ( $Settings as $item )
                        <div class="testimonial__thumb">
                            <div class="testimonial__bg"></div>
                            <img src="{{ asset('storage/' . $item->Testimonial_photo1) }}" alt="img not found">
                            <div class="testimonial__thumb-small">
                                <img class="img-one" src="{{ asset('storage/' . $item->Testimonial_photo2) }}" alt="img not found">
                                <img class="img-two" src="{{ asset('storage/' . $item->Testimonial_photo3) }}" alt="img not found">
                                <img class="img-three" src="{{ asset('storage/' . $item->Testimonial_photo4) }}" alt="img not found">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial__item">
                        <div class="section__title-wrapper mb-25">
                            <span class="section__subtitle mb-15">Client say</span>
                            <h2 class="section__title">Client Experiences and Testimonials</h2>
                        </div>
                        <div class="swiper testimonial__active p-relative">
                            <div class="swiper-wrapper">
                                
                                @forelse ( $Testimonials as $item)
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <div class="testimonial__text">
                                            <p>“{{$item->text}}”</p>
                                        </div>
                                        <div class="testimonial__avatar-item">
                                            <div class="testimonial__avatar-thumb">
                                                <img src="{{ asset('storage/' . $item->photo) }}" alt="img not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">{{$item->name}}</h6>
                                                <span class="testimonial__avatar-designation">{{$item->work}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <h3>No Data Found!</h3>
                                @endforelse
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

            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- blog area start -->
    <div id="homeblog" class="bd-blog__area section-space">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle">MY BLOG</span>
                        <h2 class="section__title mb-20">Read My Latest Blog</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
            </div>
            <div class="row g-30 wow fadeInUp" data-wow-delay=".3s">
                @forelse ($Articles as  $Article)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <section class="blog__wrap blog__item bg-solid">
                            <div class="blog__thumb is-hover">
                                <a href="{{ route('Articles.show', $Article) }}">
                                    <img src="{{ asset('storage/' . $Article->photo1) }}" alt="image not found">
                                </a>
                                <div class="blog__meta style-one">
                                    <h2 class="date"> {{ $Article->updated_at->format('d') }} <span
                                            class="month">{{ $Article->updated_at->format('F') }} </span></h2>
                                </div>
                            </div>
                            <div class="blog__content">
                                <h4 class="blog__title small"><a
                                        href="{{ route('Articles.show', $Article) }}">{{ $Article->title }}</a></h4>
                                <p>{{ $Article->slug }}</p>
                                <div class="blog__btn-text">
                                    <a href="{{ route('Articles.show', $Article) }}" class="underline-btn">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </section>

                    </div>
                @empty
                    <h4>No Data Found!</h4>
                @endforelse


            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- Contact area start -->
    <div id="homecontact" class="bd-contact__area theme-bg-secondary section-space p-relative fix">
        <div class="contact__shape">
            
            <img class="contact__shape-one" src="{{ asset('Frontend/imgs/shape/contact-shape-01.png') }}" alt="image not found">
            <img class="contact__shape-two" src="{{ asset('Frontend/imgs/shape/contact-shape-02.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-0 order-1 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="section__title-wrapper section__title-space">
                        <span class="section__subtitle mb-15">GET IN TOUCH</span>
                        <h2 class="section__title">Feel Free Contact Me</h2>
                    </div>
                    <form action="{{ route('Contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="floating__form-content">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="floating__form-input">
                                    <input type="text" name="name" class="inputText" required>
                                    <span class="floating-label">Name*</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating__form-input">
                                    <input type="text" name="email" class="inputText" required>
                                    <span class="floating-label">Email*</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="floating__form-input">
                                    <input type="text" name="subject" class="inputText" required>
                                    <span class="floating-label">Subject*</span>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="from__input-box">
                                    <div class="floating__form-input">
                                        <textarea name="message" class="textareaText" required></textarea>
                                        <span class="floating-label-two">Message*</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__btn">
                           
                            <button class="bd-btn w-100">Submit now</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-1 order-0 wow fadeInRight" data-wow-delay=".3s">
                    <div class="contact__info-wrapper">
                        @foreach ( $Settings as $item )
                        <div class="contact__thumb">
                            <img src="{{ asset('storage/' . $item->Contact_photo) }}" alt="img not found">
                        </div>
                        @endforeach
                        <div class="contact__info-item">
                           @foreach ($teams as $item )
                           <ul>
                               
                            <li>
                                <div class="contact__info">
                                    <div class="contact__info-icon">
                                        <span>
                                            <i class="icon-phone"></i>
                                        </span>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6><a href="tel:+{{$item->Mobile}}">+{{$item->Mobile}}</a></h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact__info">
                                    <div class="contact__info-icon">
                                        <span>
                                            <i class="icon-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6><a href="mailto:{{$item->email}}">{{$item->email}}</a></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact area end -->
@endsection
