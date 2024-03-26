@extends('layouts.navbare')

@section('content')

  <!-- breadcrumb area  start -->
  <section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
    <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
    @foreach ( $Settings as $item )
    data-background="{{ asset('storage/' . $item->banner_Portfolio) }}"></div>
    @endforeach
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-7 col-lg-8">
                <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                    <div class="breadcrumb__title-wrapperr">
                        <h1 class="breadcrumb__title mb-25">Portfolio</h1>
                    </div>
                    <div class="breadcrumb__menu">
                        <nav>
                            <ul>
                                <li><span><a href="/">Home</a></span></li>
                                <li><span><a href="#">Portfolio</a></span></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area  end -->

<!-- portfolio area start -->
<div class="bd__portfolio-area section-space">
    <div class="container-fluid">
        <div class="row g-5 section__title-space justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="bd__menu-tab justify-content-center">
                    <ul class="bd__menu style-two nav" id="myTab" role="tablist">
                        <li class="bd__btn-item" role="presentation">
                            <button class="active" id="view-tab" data-bs-toggle="tab" data-bs-target="#view"
                                type="button" role="tab" aria-controls="view" aria-selected="true">View
                                All</button>
                        </li>
                      
                        @foreach ($Categories as $item )
                        
                        <li class="bd__btn-item" role="presentation">
                           <a href="{{ route('filter', $item ) }}">{{$item->name}}</a>
                        </li> 
                       @endforeach
               
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="tab-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s"
                    id="myTabContent">
                    <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="view-tab">
                        <div class="row  g-5">
                            @forelse ($projects as $item)
                            <div class="col-lg-4 col-md-6">
                            
                                <div class=" portfolio__item style-seven">
                                    <div class="portfolio__item-thumb">
                                        <img src="{{ asset('storage/'.$item->photo) }}" alt="image not found">
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="{{ route('projects.show',$item) }}">{{$item->Categorie->name}}</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="{{ route('projects.show',$item) }}">{{$item->name}}</a></h5>
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
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12">
               
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="pagination__wrapper">
                            <div class="bd-basic__pagination style-2">
                                <nav>
                                    <ul>
                                        <li>
                                            <span><a href="#">Next</a></span>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <span><a href="#">Prev</a></span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- portfolio area end -->


@endsection