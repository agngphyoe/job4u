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
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href=""><img src="{{ $company->profile_url }}" class="img-fluid" style="width: auto; height: 90px;" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $post->title }}r</h4>
                                </a>
                                <ul>
                                    <li>{{ $company->name }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $company->location }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details2 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            @php
                                $requirements = explode(';', $post->requirements)
                            @endphp
                           <ul>
                            @foreach ($requirements as $requirement)
                                <li>{{ $requirement }}</li>
                            @endforeach
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                            @php
                                $requirements = explode(';', $post->requirements)
                            @endphp
                           <ul>
                            @foreach ($requirements as $requirement)
                                <li>{{ $requirement }}</li>
                            @endforeach
                           </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Posted date : <span>{{ date('d-m-Y', strtotime($post->created_at)); }}</span></li>
                          <li>Location : <span>{{ $company->location }}</span></li>
                          <li>Vacancy : <span>{{ $post->req_ammount }}</span></li>
                          <li>Job nature : 
                            <span>
                                @if ($post->type == 'FTE')
                                    Full Time
                                @else
                                    Part Time
                                @endif
                            </span>
                          </li>
                         
                      </ul>
                     <div class="apply-btn2">
                        <a href="{{ route('job.apply', ['id' => $post->id]) }}" class="btn">Apply Now</a>
                     </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                          <span>{{ $company->name }}</span>
                          <p>{{ $company->bio }}</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>  
@endsection
