@extends('layouts.admin.app')
@section('title', 'Edit User')

@section('contents')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <h3 style="font-weight:bold">
                    EDIT USER
                </h3>
            </div>    
        </div>
    </div>            
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name" class="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="email" class="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="phone" class="">Phone</label>
                            <input type="number" class="form-control" name="phone" value="{{ $user->phone }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="password" class="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="phone" class="">Image:</label>
                            <input type="file" class="ml-3" name="image">
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('users.index') }}" type="button" class="btn btn-lg btn-secondary">Back</a>
                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection