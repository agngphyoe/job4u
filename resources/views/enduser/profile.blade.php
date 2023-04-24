@extends('layouts.enduser.app')
@section('title', 'My Profile')
@section('contents')
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets2/img/hero/about.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>My Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                
                <!-- Right Content -->
                <div class="col-xl-12 col-lg-12">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h2>My Profile</h2>
                           <a href="{{ route('enduser.editProfile') }}" type="button" class="btn btn-rounded-primary">Edit Profile</a>
                       </div>
                      <ul class="mt-5">
                          <li class="h5">Name : <span class="h5">{{ $user->name }}</span></li>
                          <li class="h5">Email : <span class="h5">{{ $user->email }}</span></li>
                          <li class="h5">Phone : <span class="h5">{{ $user->phone }}</span></li>
                          <li class="h5">address: <span class="h5">{{ $user->address }}</span></li>
                      </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main> 
@endsection