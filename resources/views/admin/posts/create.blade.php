@extends('layouts.admin.app')
@section('title', 'Create Post')

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
                    CREATE JOB POST
                </h3>
            </div>    
        </div>
    </div>            
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form action="{{ route('jobposts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="title" class="">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="company" class="">Company</label>
                            <select name="company" class="form-control" required>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="category" class="">Category</label>
                            <select name="category" class="form-control" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="type" class="">Type</label>
                            <select name="type" class="form-control" required>
                                <option value="FTE">Full Time</option>
                                <option value="PTE">Part Time</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="amount" class="">Required Amount</label>
                            <input type="number" class="form-control" name="amount" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="remote" class="">Remote</label>
                            <select name="remote" class="form-control" required>
                                <option value="1">YES</option>
                                <option value="0">NO</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="description" class="">Description</label>
                            <input type="textarea" class="form-control" name="description" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="requirements" class="">requirements</label>
                            <input type="textarea" class="form-control" name="requirements" required>
                        </div>
                    </div>
                </div> 
                
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="image" class="">Image</label>
                            <input type="file" class="" name="image" required>
                        </div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <a href="{{ route('jobposts.index') }}" type="button" class="btn btn-lg btn-secondary">Back</a>
                    <button type="submit" class="btn btn-lg btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection