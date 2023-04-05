@extends('layouts.admin.app')
@section('title', 'Create Company')

@section('contents')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <h3>
                    CREATE NEW COMPANY
                </h3>
            </div>    
        </div>
    </div>            
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name" class="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="type" class="">TYPE</label>
                            <input type="text" class="form-control" name="type" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="total_emp" class="">Total Employee</label>
                            <input type="number" class="form-control" name="total_emp" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="address" class="">Address</label>
                            <input type="address" class="form-control" name="address" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="location" class="">Location</label>
                            <input type="text" class="form-control" name="location" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="bio" class="">Bio</label>
                            <input type="textarea" class="form-control" name="bio" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="profile" class="">Profile</label>
                            <input type="file" class="ml-3" name="profile" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('companies.index') }}" type="button" class="btn btn-lg btn-secondary">Back</a>
                    <button type="submit" class="btn btn-lg btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection