@extends('layouts.admin')
@section('pageName')
Create Roles
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Service</h3>
        <div class="card-tools">
            <a href="{{ route("services.index") }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all services</a>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <h1>Create Service</h1>
    
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
    
              <div class="row">
                {{-- <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="header" class="form-label">Header</label>
                        <input type="text" name="header" id="header" class="form-control" value="{{ old('header') }}" required>
                    </div>
        
                </div> --}}
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
                </div>
              </div>
    
                <div class="form-group mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
                </div>
    
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
    
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>

@section("js_app")
    <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/vr3y2q88fqi6tlc1njmacrchhy2lt40zklrrnv3d8im4jjab/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

@endsection
@endsection


