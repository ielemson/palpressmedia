@extends("layouts.app")

@section("content")
    @include("partials.page-header")
    @include("partials.page-hero",["title"=>$service->title])



@endsection