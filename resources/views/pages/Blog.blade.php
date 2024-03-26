@extends('layouts.navbare')

@section('content')
    <!-- breadcrumb area  start -->
    <section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
        <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
        @foreach ( $Settings as $item )
        data-background="{{ asset('storage/' . $item->banner_blog) }}"></div>
    @endforeach
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-7 col-lg-8">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                        <div class="breadcrumb__title-wrapperr">
                            <h1 class="breadcrumb__title mb-25">Blog Grid</h1>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li><span><a href="#">Blog</a></span></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area  end -->

    <!-- blog area start -->
    <div class="bd-blog__area section-space">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle bg-field">OUR BLOG</span>
                        <h2 class="section__title">Read My Latest Article</h2>
                        <p class="contentHidden">contentHidden</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
               @forelse ( $Articles as  $Article)
               <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <div class="blog__wrap blog__item style-three">
                    <div class="blog__thumb is-hover">
                        <a href="{{ route('Articles.show', $Article) }}">
                            <img src="{{ asset('storage/' . $Article->photo1) }}" alt="image not found">
                        </a>
                        <div class="blog__tag">
                            <a href="{{ route('Articles.show', $Article) }}">{{$Article->Categorie->name}}</a>
                        </div>
                    </div>
                    <div class="blog__content">
                        <div class="blog__meta">
                            <span>
                                <i class="fa-light fa-calendar"></i>
                                {{ $Article->updated_at}}
                            </span>
                           
                        </div>
                        <h5 class="blog__title"><a href="{{ route('Articles.show', $Article) }}">{{ $Article->title }}</a></h5>
                        <div class="blog__btn-text">
                            <a href="{{ route('Articles.show', $Article) }}" class="underline-btn">
                                <span class="">Read More</span>
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
        <!-- blog area end -->
    @endsection
