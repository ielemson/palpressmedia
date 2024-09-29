@extends("layouts.app")

@section("content")
    @include("partials.page-header")
    @include("partials.page-hero",["title"=>"About Us"])

    <section class="about-section-4 pt-120 pb-120"> 
        <div class="shapes">
            <div class="shape"><img src="assets/img/shapes/about-shape-3.png" alt="shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center fade-wrapper">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content-4">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>About Our Company</h4>
                            <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Inspiring Tech Needs for Business</h2>
                        </div>
                        <p class="fade-top">Dynamically monetize enabled processes through based action items. Authoritatively grow goal is oriented markets through ompletely generate technically sound content without robust users.</p>
                        <div class="about-contact-items fade-top">
                            <div class="about-contact">
                                <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                <div class="content">
                                    <span>Call To Ask Any Queary</span>
                                    <a href="tel:+25821562154">+(258) 2156 2154</a>
                                </div>
                            </div>
                            <div class="about-author">
                                <img src="assets/img/images/about-author.png" alt="img">
                                <h4 class="name"><span>Founder & CEO</span>Julia Lopez</h4>
                            </div>
                        </div>
                        <div class="about-btn-wrap fade-top">
                            <a href="#" class="bz-primary-btn about-btn">Read Details <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img-wrap-4 fade-top">
                        <div class="about-img img-1">
                            <img src="assets/img/images/about-img-6.png" alt="about">
                        </div>
                        <div class="about-img img-2">
                            <img src="assets/img/images/about-img-7.png" alt="about">
                        </div>
                        <div class="about-counter">
                            <div class="shape"><img src="assets/img/shapes/about-counter-shape.png" alt="shape"></div>
                            <h3 class="title"><span class="odometer" data-count="1589">0</span></h3>
                            <p>Successful Query</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <section class="about-cta fade-wrapper">
        <div class="container">
            <div class="about-cta-wrap pt-120 pb-120 text-center fade-top">
                <div class="bg-item">
                    <div class="bg-img" data-background="assets/img/bg-img/about-cta-bg.jpg"></div>
                    <div class="overlay"></div>
                    <div class="overlay-2"></div>
                    <div class="shape"><img src="assets/img/shapes/about-cta-shape.png" alt="shape"></div>
                </div>
                <div class="section-heading white-content mb-40">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>About Our Company</h4>
                    <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Revolutionize your digital presence with our strategic services</h2>
                </div>
                <a href="about.html" class="bz-primary-btn">Read Details <i class="fa-regular fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- ./ about-cta -->

    <section class="feature-section pt-120 pb-120">
        <div class="container">
            <div class="section-heading">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Our Features</h4>
                <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Unique Features We Provide</h2>
            </div>
            <div class="row gy-lg-0 gy-4 justify-content-center fade-wrapper">
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="feature-item">
                        <div class="bg-img"><img src="assets/img/images/feature-img-1.png" alt="feature"></div>
                        <div class="icon"><img src="assets/img/icon/feature-1.png" alt="feature"></div>
                        <div class="feature-content">
                            <h3 class="title">Quality Assurance</h3>
                            <p>Cardinate premier technology without sustainable leadership work...</p>
                            <a href="service-details.html" class="read-more">Read Details <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="feature-item">
                        <div class="bg-img"><img src="assets/img/images/feature-img-2.png" alt="feature"></div>
                        <div class="icon"><img src="assets/img/icon/feature-2.png" alt="feature"></div>
                        <div class="feature-content">
                            <h3 class="title">Clients Satisfaction</h3>
                            <p>Cardinate premier technology without sustainable leadership work...</p>
                            <a href="service-details.html" class="read-more">Read Details <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="feature-item">
                        <div class="bg-img"><img src="assets/img/images/feature-img-1.png" alt="feature"></div>
                        <div class="icon"><img src="assets/img/icon/process-2.png" alt="feature"></div>
                        <div class="feature-content">
                            <h3 class="title">Planning & Strategy</h3>
                            <p>Cardinate premier technology without sustainable leadership work...</p>
                            <a href="service-details.html" class="read-more">Read Details <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ feature-section -->
@endsection