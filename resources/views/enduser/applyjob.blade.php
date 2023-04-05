@extends('layouts.enduser.app')
@section('title', 'Job Details')
@section('contents')
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets2/img/hero/about.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $post->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-50 pb-120">
        <div class="container">
            <div>
                <h1 class="text-center">Applicant Form</h1>
                {{-- <div class="row mt-5">
                    <div class="col-md-6">
                        <h5 class="mr-auto">Name</h5>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div> --}}
                <form action="{{ route('job.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 mt-1">
                            Name :
                        </div>
                        <div class="ml-3">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 mt-1">
                            Email :
                        </div>
                        <div class="ml-4">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 mt-1">
                            Phone :
                        </div>
                        <div class="ml-3">
                            <input type="number" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 mt-1 mr-1">
                            Company :
                        </div>
                        <div class="ml-1">
                            <input type="text" class="form-control" name="company" value="{{ $company->name }}" readonly>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 mt-1">
                            Posts :
                        </div>
                        <div class="ml-4">
                            <input type="text" class="form-control" name="category" value="{{ $category->name }}" readonly>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 mt-1 mr-1 ml-5">
                            Resume :
                        </div>
                        <div class="">
                            <input type="file" name="cv" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>  
@endsection
