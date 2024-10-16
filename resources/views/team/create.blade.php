@extends('layouts.admin')
@section('pageName')
Team Member
@endsection

@section('content')
<div class="card card-primary my-2">
<div class="container my-4">

    <h1>Create New Team Member</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="about">About</label>
            <textarea name="about" class="form-control" rows="4" required>{{ old('about') }}</textarea>
        </div>

        <div class="form-group">
            <label for="portfolio">Portfolio</label>
            <input type="text" name="portfolio" class="form-control" value="{{ old('portfolio') }}" required>
        </div>

        <div class="form-group">
            <label for="picture">Picture</label>
            <input type="file" name="picture" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
</div>
@endsection
