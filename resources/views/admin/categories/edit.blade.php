@extends('layouts.admin')
@section('content')
<form action="{{route('backend.categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Categories</h1>
            <a href="{{route('backend.categories.index')}}" class="btn btn-primary float-end">Cancel</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Categories</a></li>
            <li class="breadcrumb-item active">Update Categories</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Update Categories Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control @error ('name') is-invalid @enderror" placeholder="">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Image</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Image</button>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <img src="{{$category->image}}" class="w-25 h-25 my-3" alt="">
                            <input type="hidden" name="old_image" id="" value="{{$category->image}}">
                        </div>
                        <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                            <input class="form-control my-3 @error('image')is-invalid @enderror" type="file" accept="image/*" id="image" name="image">
                        </div>
                        
                    </div>
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection