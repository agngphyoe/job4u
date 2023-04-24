@extends('layouts.enduser.app')
@section('title', 'Job Categories')
@section('contents')
<main>  
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
                           <h5>
                            <a href="{{ route('enduser.allJobs', ['category_id' => $category->id]) }}">{{ $category->name }}
                               @php
                                   $jobCount = App\Models\JobPost::where('job_category_id', $category->id)->count();
                               @endphp
                               ({{ $jobCount }})
                            </a>
                        </h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Services End -->
</main> 
@endsection