@extends("layouts.app")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("content")
    @include("partials.page-header")
    @include("partials.page-hero",["title"=>"About Us"])

    <section class="about-section-4 pt-60 pb-30"> 
        {{-- <div class="shapes">
            <div class="shape"><img src="{{ asset("assets/img/shapes/about-shape-3.png") }}" alt="shape"></div>
        </div> --}}
        <div class="container">
            <div class="row align-items-center fade-wrapper">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content-4">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>About Our Company</h4>
                            <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">About PalpressMedia</h2>
                        </div>
                        <p class="fade-top" style="text-align: justify">
                          {!!  $setting->about !!}
                        </p>
                       
                      
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img-wrap-4 fade-top">
                        <div class="about-img img-1">
                            <img src="{{ asset("assets/img/images/about-img.png") }}" alt="about palpresmedia">
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

@endsection