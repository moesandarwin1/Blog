@extends('layouts.admin')
@section('content')
<form action="{{route('backend.posts.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Items</h1>
            <a href="{{route('backend.posts.index')}}" class="btn btn-primary float-end">Posts</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Posts</a></li>
            <li class="breadcrumb-item active">Posts Create</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Posts Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control @error ('title') is -invalid @enderror" placeholder="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control @error ('image') is -invalid @enderror" type="file" id="formFile" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error ('description') is -invalid @enderror"  rows="3" name="description" id="">{{old('description')}}</textarea>
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
                        <option value="{{$category->id}}" {{old('category_id')== $category->id ?'selected':''}}>{{$category->name}}</option>
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