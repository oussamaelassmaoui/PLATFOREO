@extends('layouts.navbare')

@section('content')

        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area section-space theme-bg-secondary p-relative">
            <div class="breadcrumb__shape-one">
                <img src="{{ asset('Frontend/imgs/shape/four-line-shape-1.png') }}" alt="image not found">
            </div>
            <div class="breadcrumb__shape-two">
                <img src="{{ asset('Frontend/imgs/shape/four-line-shape-2.png') }}" alt="image not found">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="breadcrumb__content-wrapper">
                            <div class="breadcrumb__title-wrapper text-center">
                                <h1 class="breadcrumb__title mb-25">Know About Myself</h1>
                            </div>
                            <div class="breadcrumb__menu text-center">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li><span><a href="#">Team</a></span></li>
                                        <li><span>Team Details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- team area start -->
        <section class="bd-team-details__area section-space">
            <div class="container">
                <div class="team__details-wrapper">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="team__details-thumb bg-solid">
                                <img src="{{ asset('storage/' . $Member->photo) }}" alt="image not found">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-7">
                            <div class="team__details-content">
                                <div class="team__details-author">
                                    <h3 class="team__details-title">{{$Member->name}}</h3>
                                    <span class="team__details-designation">{{$Member->work}}</span>
                                </div>
                                
                                <div class="theme__social">
                                   
                                    <a href="{{$Member->Linkedin}}"><i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <a href="{{$Member->Github}}"><i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->

@endsection