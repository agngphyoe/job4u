@extends('layouts.admin.app')
@section('title', 'Create Categoruy')

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
                    CREATE CATEGORY
                </h3>
            </div>    
        </div>
    </div>            
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name" class="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <a href="{{ route('categories.index') }}" type="button" class="btn btn-lg btn-secondary">Back</a>
                    <button type="submit" class="btn btn-lg btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection