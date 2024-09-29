@extends("layouts.app")

@section("content")
    @include("partials.page-header")
    @include("partials.page-hero",["title"=>"Our Services"])

    <section class="service-section-4 pt-120 pb-120">
        <div class="container">
            <div class="row gy-4 fade-wrapper">
                @if($services->isEmpty())
            <div class="alert alert-info">No services found. Create a new one!</div>
        @else
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-4 fade-top">
                        <div class="service-thumb">
                            <img class="main-img" src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route("ourservice",$service->slug) }}">{{ $service->title }}</a></h3>
                            <p>{{ Str::limit($service->content, 100, '...') }}</p>
                            <a href="{{ route("ourservice",$service->slug) }}" class="read-more">Read Details <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        @endif
                 
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

@endsection