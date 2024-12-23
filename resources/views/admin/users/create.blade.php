@extends('layouts.admin')
@section('content')
<form action="{{route('backend.users.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Users</h1>
            <a href="{{route('backend.users.index')}}" class="btn btn-primary float-end">Users</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Users</a></li>
            <li class="breadcrumb-item active">User Create</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                User Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="name" class="form-label">User Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" placeholder="">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="profile" class="form-label">Profile</label>
                    <input class="form-control @error('profile') is-invalid @enderror" type="file" accept="image/*" id="profile" name="profile">
                    @error('profile')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="" class="form-select @error('role') is-invalid @enderror">
                        <option value="admin" selected>Admin</option>
                        <option value="user">User</option>
                        <option value="super_admin">Super Admin</option>
                        
                    </select>   
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div> 
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