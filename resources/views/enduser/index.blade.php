@extends('layouts.enduser.app')
@section('title', 'Job4U')
@section('contents')
<main>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('assets2/img/hero/h1_hero.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            <form action="{{ route('enduser.searchJobs') }}" method="get">
                                {{-- <div class="input-form"> --}}
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Find Position" name="search" style="height: 58px">
                                        </div>
                                        <div class="col-xl-6">
                                            <button class="btn btn-xs btn-primary" type="submit"> Find Jobs</button>
                                        </div> 
                                    </div>
                                                                      
                                {{-- </div> --}}
                                {{-- <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Location BD</option>
                                            <option value="">Location PK</option>
                                            <option value="">Location US</option>
                                            <option value="">Location UK</option>
                                        </select>
                                    </div>
                                </div> --}}
                                
                            </form>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        {{-- <span>FEATURED TOURS Packages</span> --}}
                        <h2>Browse Various Categories </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach ($categories as $category)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-cap">
                           <h5><a href="{{ route('enduser.allJobs', ['category_id' => $category->id]) }}">{{ $category->name }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="{{ route('enduser.jobByCategories') }}" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    
    <!-- Featured_job_start -->
    <section class="">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    @foreach ($posts as $post)
                    @php
                        $company = App\Models\Company::find($post->company_id);
                        
                    @endphp
                            <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('job.details', ['id' => $post->id]) }}"><img src="{{ $company->profile_url }}" class="img-fluid" style="width: auto; height: 90px;" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{ route('job.details', ['id' => $post->id]) }}"><h4>{{ $post->title }}</h4></a>
                                    <ul>
                                        <li>{{ $company->name }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $company->location }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('job.details', ['id' => $post->id]) }}">
                                    @if ($post->type == 'FTE')
                                        Full Time
                                    @else
                                        Part Time
                                    @endif
                                </a>
                                <span class="ml-3">{{ $post->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endforeach               
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{ asset('assets2/img/gallery/how-applybg.png') }}">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                           <h5>1. Search a job</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                           <h5>2. Apply for job</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                           <h5>3. Get it done</h5>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- How  Apply Process End-->
    <!-- Blog Area Start -->
    {{-- <div class="home-blog-area blog-h-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our latest blog</span>
                        <h2>Our recent news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('assets2/img/blog/home-blog1.jpg') }}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/blog/home-blog2.jpg" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog Area End -->

</main>   
@endsection
