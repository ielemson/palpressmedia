@extends("layouts.app")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("title",$portfolio->title)
@section("content")
    @include("partials.page-header")
    @include("partials.page-hero",["title"=>$portfolio->title])

    <section class="project-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-details-wrap">
                        <div class="project-details-thumb">
                            <img src="{{ asset('storage/' . $portfolio->cover_picture) }}" alt="img">
                            <div class="details-list-wrap">
                                <h4 class="list-title">Project Information</h4>
                                <ul class="details-list">
                                    <li>
                                        <div class="icon"><i class="fa-solid fa-user"></i></div>
                                        <div class="content">
                                            <span>Clients:</span>
                                            <h4 class="title">{{ $portfolio->project_client }}</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                                        <div class="content">
                                            <span>Category:</span>
                                            <h4 class="title">{{ $portfolio->project_category }}</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa-sharp fa-solid fa-calendar-days"></i></div>
                                        <div class="content">
                                            <span>Date:</span>
                                            <h4 class="title">{{ \Carbon\Carbon::parse($portfolio->project_date)->format('d M, Y') }}</h4>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                                        <div class="content">
                                            <span>Address:</span>
                                            <h4 class="title">258 Daniel Lane, Berlin</h4>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <h3 class="details-title">{{ $portfolio->title }}</h3>
                        <p class="mb-50 desc" style="text-align: justify">
                        {!! $portfolio->content !!}    
                        </p>
            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

@endsection