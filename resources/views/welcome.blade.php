@extends("layouts.app")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("content")
    @include("partials.header")
<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
<!-- /#popup-search-box -->

@include("partials.side-area")
<!--/.sidebar-area-->

<div id="preloader">
    <div class="loading" data-loading-text="Palpressmedia"></div>
</div>
<!-- ./ preloader -->

<section class="hero-section">
    <div class="hero-mask-img">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <img src="assets/img/images/hero-img.png" alt="hero">
    </div>
    <div class="shapes">
        <div class="shape shape-1"><img src="assets/img/shapes/hero-shape-1.png" alt="shape"></div>
        <div class="shape shape-2"><img src="assets/img/shapes/hero-shape-2.png" alt="shape"></div>
        <div class="shape shape-3"><img src="assets/img/shapes/hero-shape-3.png" alt="shape"></div>
        <div class="shape shape-4"><img src="assets/img/shapes/hero-shape-4.png" alt="shape"></div>
        <div class="round-shape"></div>
    </div>
    <div class="container">
        <div class="hero-wrap">
            <div class="hero-content">
                <div class="section-heading mb-40">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>We’re building Awesome brands</h4>
                    <h2 class="section-title text-animation-effect">Building Smart <br>Business From <br>Scratch</h2>
                    <p>We specialize in providing comprehensive solutions to help
                        businesses tackle their most pressing issues.</p>
                </div>
                <div class="hero-btn-wrap">
                    <a href="{{ route("contact") }}" class="bz-primary-btn">Contact With Us <i class="fa-regular fa-arrow-right"></i></a>
                    <a href="{{ route("services") }}" class="bz-primary-btn hero-btn">Our Services</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ hero-section -->

<section class="about-section pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-img-wrap">
                    <div class="about-img img-reveal">
                        <div class="img-overlay"></div>
                        <img src="assets/img/images/about-img-1.png" alt="img">
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content fade-wrapper">
                    <div class="section-heading heading-2 mb-30">
                        <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>About Our Company</h4>
                        <h2 class="section-title" data-text-animation data-split="word" data-duration="1">The Only Source of Knowledge is Experience</h2>
                        <p class="fade-top">Appropriately empower dynamic leadership skills after business portals. Globally myocardinate interactive supply chains with distinctive quality vectors.</p>
                    </div>
                    <div class="about-items">
                        <div class="about-item fade-top">
                            <div class="icon"><img src="assets/img/icon/about-icon-1.png" alt="img"></div>
                            <div class="content">
                                <h4 class="title">Provide Skills <br>Services</h4>
                            </div>
                        </div>
                        <div class="about-item fade-top">
                            <div class="icon"><img src="assets/img/icon/about-icon-2.png" alt="img"></div>
                            <div class="content">
                                <h4 class="title">Urgent Support <br>For Clients</h4>
                            </div>
                        </div>
                    </div>
                    <div class="about-btn-wrap fade-top">
                        <a href="{{ route("contact") }}" class="bz-primary-btn">Contact With Us<i class="fa-regular fa-arrow-right"></i></a>
                        <a href="tel:{{ $setting->phone }}" class="bz-transparent-btn"><i class="fa-sharp fa-solid fa-phone-volume"></i>+ 586 5864 5869</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ about-section -->

<section class="service-section pt-120 pb-120" data-background="assets/img/bg-img/service-bg.png">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Our Services<span class="right-shape"></span></h4>
            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Service We Provide</h2>
        </div>
        <div class="row fade-wrapper gy-lg-0 gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6 fade-top">
                <div class="service-item">
                    <div class="icon"><img src="assets/img/icon/service-icon-1.png" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="title"><a href="service-details.html">Operations Optimization</a></h3>
                        <p>Your operations and processes are fundamental to your company’s ability to deliver value to get you where you want to.</p>
                        <a href="service-details.html" class="bz-primary-btn">Read More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 fade-top">
                <div class="service-item">
                    <div class="icon"><img src="assets/img/icon/service-icon-2.png" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="title"><a href="service-details.html">Human Resources</a></h3>
                        <p>Your operations and processes are fundamental to your company’s ability to deliver value to get you where you want to.</p>
                        <a href="service-details.html" class="bz-primary-btn">Read More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 fade-top">
                <div class="service-item">
                    <div class="icon"><img src="assets/img/icon/service-icon-3.png" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="title"><a href="service-details.html">Risk Management</a></h3>
                        <p>Your operations and processes are fundamental to your company’s ability to deliver value to get you where you want to.</p>
                        <a href="service-details.html" class="bz-primary-btn">Read More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ service-section -->

<section class="team-section pt-120 pb-120 fade-wrapper">
    <div class="bg-shape fade-right"><img src="assets/img/shapes/team-shape-1.png" alt="img"></div>
    <div class="container">
        <div class="team-top">
            <div class="section-heading white-content">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Our Team Members</h4>
                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Meet The Expert Team Members</h2>
            </div>
        </div>
    </div>
    <div class="team-wrap">
        <div class="row gy-lg-0 gy-4 fade-wrapper">
          
            <div class="col-lg-4 col-md-6 fade-top">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="assets/img/team/team-2.png" alt="team">
                        <div class="shapes">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                        </div>
                    </div>
                    <div class="team-content-wrap">
                        <div class="team-content">
                            <h3 class="title"><a href="team-details.html">Devon Lane</a></h3>
                            <span>Business Coach</span>
                        </div>
                        <div class="team-social">
                            <div class="expand">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <ul class="social-list">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 fade-top">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="assets/img/team/team-3.png" alt="team">
                        <div class="shapes">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                        </div>
                    </div>
                    <div class="team-content-wrap">
                        <div class="team-content">
                            <h3 class="title"><a href="team-details.html">Viv Richards</a></h3>
                            <span>Business Coach</span>
                        </div>
                        <div class="team-social">
                            <div class="expand">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <ul class="social-list">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-top">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="assets/img/team/team-4.png" alt="team">
                        <div class="shapes">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                        </div>
                    </div>
                    <div class="team-content-wrap">
                        <div class="team-content">
                            <h3 class="title"><a href="team-details.html">John Smith</a></h3>
                            <span>Business Coach</span>
                        </div>
                        <div class="team-social">
                            <div class="expand">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <ul class="social-list">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ team-section -->


<section class="blog-section pt-120 pb-120 fade-wrapper">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>News Blog</h4>
            <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Latest News & Articles</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="post-card fade-top">
                    <div class="post-thumb">
                        <img src="assets/img/blog/post-1.jpg" alt="post">
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><i class="fa-regular fa-calendar"></i>24 Feb, 2024</li>
                                <li><i class="fa-regular fa-user"></i>by admin</li>
                            </ul>
                            <h3 class="title"><a href="blog-details.html">Developer within team are
                                responsible for creating</a></h3>
                        </div>
                        <div class="post-bottom">
                            <a class="read-more" href="blog-details.html">Read More<i class="fa-solid fa-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-card fade-top">
                    <div class="post-thumb">
                        <img src="assets/img/blog/post-2.jpg" alt="post">
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><i class="fa-regular fa-calendar"></i>24 Feb, 2024</li>
                                <li><i class="fa-regular fa-user"></i>by admin</li>
                            </ul>
                            <h3 class="title"><a href="blog-details.html">Insights from Top Business Consultancy Experts</a></h3>
                        </div>
                        <div class="post-bottom">
                            <a class="read-more" href="blog-details.html">Read More<i class="fa-solid fa-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-card fade-top">
                    <div class="post-thumb">
                        <img src="assets/img/blog/post-3.jpg" alt="post">
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><i class="fa-regular fa-calendar"></i>24 Feb, 2024</li>
                                <li><i class="fa-regular fa-user"></i>by admin</li>
                            </ul>
                            <h3 class="title"><a href="blog-details.html">How Business Consultancy Propels Companies...</a></h3>
                        </div>
                        <div class="post-bottom">
                            <a class="read-more" href="blog-details.html">Read More<i class="fa-solid fa-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ blog-section -->
<!-- ./ sponsor-section -->
@endsection