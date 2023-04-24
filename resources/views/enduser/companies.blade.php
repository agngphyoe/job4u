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
                        <span>Companies You Can Work</span>
                        <h2> Our Client Companies </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach ($companies as $company)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span>
                                    <img src="{{ $company->profile_url }}" class="img-fluid" style="width: auto; height: 90px;" alt="">
                                </span>
                            </div>
                            <div class="services-cap mt-2">
                            <h5><a href="{{ route('enduser.allJobs', ['company_id' => $company->id]) }}">{{ $company->name }}</a></h5>
                                @php
                                    $jobCount = App\Models\JobPost::where('company_id', $company->id)->count();
                                @endphp
                                <span>({{ $jobCount }})</span>
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