@extends('layouts.admin')
@section('content')
<form action="{{route('backend.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Edit Posts</h1>
            <a href="{{route('backend.posts.index')}}" class="btn btn-primary float-end">Cancel</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Posts</a></li>
            <li class="breadcrumb-item active">Edit Posts</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               Edit Posts Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control @error ('title') is -invalid @enderror" placeholder="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
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
                            <img src="{{$post->image}}" class="w-25 h-25 my-3" alt="">
                            <input type="hidden" name="old_image" id="" value="{{$post->image}}">
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
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error ('description') is -invalid @enderror"  rows="3" name="description" id="">{{$post->description}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-select @error ('category_id') is -invalid @enderror">
                    <option selected value="">Choose Category.....</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$post->category_id == $category->id ?'selected':''}}>{{$category->name}}</option>
                    @endforeach    
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror      
                </div>
                <div class="m-2">
                    <label for="user_id" class="form-label">User</label>
                    <input type="text" name="user_id" class="form-control @error ('user_id') is -invalid @enderror" placeholder="">
                    @error('user_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
            
        </div>
    </div>
</form>

@endsection