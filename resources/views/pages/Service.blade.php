@extends('layouts.navbare')
@section('content')
 <!-- breadcrumb area  start -->
 <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
    <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
    @foreach ( $Settings as $item )
    data-background="{{ asset('storage/' . $item->banner_Services) }}"></div>
@endforeach
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-8 col-lg-8">
                <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                    <div class="breadcrumb__title-wrapperr">
                        <h1 class="breadcrumb__title mb-25">The Service We Provide is Only For Your Needs</h1>
                    </div>
                    <div class="breadcrumb__menu">
                        <nav>
                            <ul>
                                <li><span><a href="/">Home</a></span></li>
                                <li><span><a href="#">Service</a></span></li>
                                <li><span>Service </span></li>
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
<section class="bd-service__area section-space theme-bg-secondary">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="section__title-wrapper text-center section__title-space">
                    <span class="section__subtitle bg-field">MY SERVICE</span>
                    <h2 class="section__title mb-20">Professional Services</h2>
                    <p class="section__paragraph is-br-none">Begin with a brief introduction or summary that
                        <br> highlights who you are and what</p>
                </div>
            </div>
        </div>
        <div class="row g-5">
           @forelse ($servic_edetails as $item )
           <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".9s"
           data-wow-duration="1s">
           <div class="service__wrapper service__item style-eight text-center">
               <div class="contentHidden"></div>
               <div class="contentHidden"></div>
               <span class="service__icon-wrap is-icon-border">
                   {!! $item->icon !!}
               </span>
               <div class="service__content">
                   <h5 class="service__title underline"><a href="{{ route('servic-edetails.show', $item) }}">{{$item->title_Golobale}} </a></h5>
                   <p>{{$item->slug}}</p>
                   <div class="contentHidden">
                       <a class="contentHidden" href="{{ route('servic-edetails.show', $item) }}"></a>
                       <a class="contentHidden" href="{{ route('servic-edetails.show', $item) }}"><span class="contentHidden"></span></a>
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


@endsection