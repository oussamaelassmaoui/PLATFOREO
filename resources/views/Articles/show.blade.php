@extends('layouts.navbare')

@section('content')
<br><br>
    <!-- postbox area start -->
    <section class="postbox__area section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-10 col-md-10">
                    <div class="section__title-wrapper section__title-space">
                        <h2 class="section__title">{{ $Article->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xxl-12">
                    <div class="postbox__wrapper style-two">
                        <div class="row g-5">
                            <div class="col-lg-8">
                                <div class="postbox__top">
                                    <div class="postbox__thumb">
                                        <img src="{{ asset('storage/' . $Article->photo1) }}" alt="image not found">
                                    </div>
                                </div>
                                <div class="postbox__main-wrapper">
                                    <div class="postbox__meta-wrapper">
                                        <div class="postbox__meta-item">
                                            <div class="postbox__meta-author">
                                                <div class="postbox__meta-author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/profile_pictures/' . $Article->user->photo) }}"
                                                        class="rounded-circl"  width="50"  alt="image not found">
                                                    </a>
                                                </div>
                                                <div class="postbox__meta-content">
                                                    <span class="postbox__meta-type">Author</span>
                                                    <p class="postbox__meta-name">{{$Article->user->name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="postbox__meta-item">
                                            <div class="postbox__meta-content">
                                                <span class="postbox__meta-type">Published</span>
                                            <p class="postbox__meta-name">{{$Article->updated_at->format('d F Y')}}</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="postbox__details-content-wrapper">
                                        <h5 class="postbox__details-title">{{ $Article->slug}}</h5>
                                        <p class="mb-20">{!! $Article->text1 !!}</p>
                                        
                                        <div class="postbox__thumb-wrapper">
                                            <div class="postbox__thumb">
                                                <img src="{{ asset('storage/' . $Article->image) }}"
                                                    alt="image not found">
                                            </div>
                                            <div class="postbox__thumb">
                                                <img src="{{ asset('storage/' . $Article->photo3) }}"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <p>
                                            {!! $Article->text2 !!}
                                        </p>
                                        <div class="postbox__quote">
                                            <blockquote>
                                                <div class="postbox__quote-icon">
                                                    <img src="{{ asset('Frontend/imgs/shape/testimonial-quote-02.png')}}"
                                                        alt="image not found">
                                                </div>
                                                <p>“{!! $Article->text_motivation !!}”</p>
                                            </blockquote>
                                        </div>
                                        
                                        <p> {!! $Article->text3 !!}</p>

                                           
                                        
                                     

                                    </div>
                                    
                                    
                                    <br>
                                    <div class="postbox__related">
                                        <h4 class="postbox__related-title mb-35">You May Also Like</h4>
                                        <div class="row g-5">
                                          @forelse ($ARTICLES as $ARTICLE)
                                          <div class="col-xl-6 col-lg-12 col-md-6 wow fadeInUp"
                                          data-wow-delay=".3s">
                                          <div class="blog__wrap blog__item style-five">
                                              <div class="blog__thumb is-hover">
                                                  <a href="{{ route('Articles.show', $ARTICLE) }}">
                                                      <img src="{{ asset('storage/' . $ARTICLE->photo1) }}"
                                                          alt="image not found">
                                                  </a>
                                                  <div class="blog__tag">
                                                      <a href="#">{{$Article->Categorie->name}}</a>
                                                  </div>
                                              </div>
                                              <div class="blog__content bg-solid">
                                                  <div class="blog__meta">
                                                      <span>
                                                          <i class="fa-light fa-calendar"></i>
                                                          {{$ARTICLE->updated_at}}
                                                      </span>
                                                      
                                                  </div>
                                                  <h5 class="blog__title"><a href="{{ route('Articles.show', $ARTICLE) }}"> {{$ARTICLE->title}}</a></h5>
                                                  <div class="blog__btn">
                                                      <a class="bd-btn bordered-light is-btn-anim"
                                                          href="{{ route('Articles.show', $ARTICLE) }}">
                                                          <span class="bd-btn-inner">
                                                              <span class="bd-btn-normal">Read More</span>
                                                              <span class="bd-btn-hover">Read More</span>
                                                              <i class="contentHidden"></i>
                                                          </span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          @empty
                                              <h3>No Data Found!</h3>
                                          @endforelse
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="sidebar__wrapper">
                                    
                                    <div class="sidebar__widget is-padding-none">
                                        <div class="sidebar__widget-content">
                                            @foreach ( $teams as $item )
                                            <div class="sidebar__author">
                                                <div class="sidebar__author-thumb">
                                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="image not found">
                                                </div>
                                                
                                                <div class="sidebar__author-content">
                                                    <h6 class=" sidebar__author-title">{{$item->name}}</h6>
                                                    <p>{{$item->About_Me}}</p>
                                                    <div class="sidebar__author-social">
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
                                    <div class="sidebar__widget">
                                        <h5 class=" sidebar__widget-title">Categories</h5>
                                        <div class="sidebar__widget-content">
                                            <ul>
                                               @foreach ($Categories as $Categorie )
                                               <li><a href="blog.html">{{$Categorie->name}}<span>{{$Categorie->blog_count}} </span></a></li>
                                               @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="sidebar__widget">
                                        <h5 class=" sidebar__widget-title">Recent Post</h5>
                                        <div class="sidebar__widget-content">
                                            <div class="sidebar__post">
                                              @forelse ( $Post as $Post )
                                              <div class="rc__post">
                                                <div class="rc__post-thumb">
                                                    <a href="{{ route('Articles.show', $Post) }}"><img
                                                            src="{{ asset('storage/' . $Post->photo1) }}"
                                                            alt="image not found"></a>
                                                </div>
                                                <div class="rc__post-content">
                                                    <h6 class="rc__post-title">
                                                        <a href="{{ route('Articles.show', $Post) }}">{{$Post->title}}</a>
                                                    </h6>
                                                    <div class="rc__meta">
                                                        <span>
                                                            <i class="fa-sharp fa-light fa-clock"></i>
                                                            {{$Post->updated_at}}
                                                        </span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- postbox area end -->

@endsection