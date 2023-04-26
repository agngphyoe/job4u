@extends('layouts.admin.app')
@section('title', 'Change Password')

@section('contents')
@if(session()->has('error'))
    <div class="alert alert-danger" style="color:red">
        {{ session()->get('error') }}
    </div>
@endif
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <h3 style="font-weight:bold">
                    Change Password
                </h3>
            </div>    
        </div>
    </div>            
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form action="{{ route('profile.updatePassword') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name" class="">Old Password</label>
                            <input type="password" class="form-control" name="old_password" value="" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name" class="">New Password</label>
                            <input type="password" class="form-control" name="new_password" value="" required>
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