<?php

namespace App\Http\Controllers\Enduser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\Applicant;
use App\Models\ApplicantCompany;

class JobController extends Controller
{
    public function details(Request $request){
        $post = JobPost::find($request->id);
        $company = Company::find($post->company_id);
        $category = JobCategory::find($post->job_category_id);
        
        return view('enduser.job_detail', ['post' => $post,
                                           'company' => $company,
                                           'category' => $category]);
    }

    public function applyJob(Request $request){
        $post = JobPost::find($request->id);
        $company = Company::find($post->company_id);
        $category = JobCategory::find($post->job_category_id);

        ApplicantCompany::create([
            'applicant_id' => $applicant->id,
            'company_id' => $company->id,
        ]);

        return redirect()->back()->with('success', 'You Applied Job Successfully');
    }

    public function postJob(Request $request){
        $exist_applicant = Applicant::where('email', $request->email)->first();
        $company = Company::where('name', $request->company)->first();
        $category = JobCategory::where('name', $request->category)->first();
        if($exist_applicant){
            ApplicantCompany::create([
                'applicant_id' => $exist_applicant->id,
                'company_id' => $company->id,
            ]);
        }else{
            $photo = $request->file('cv');
            $destinationPath = 'img/cv/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);

            $applicant = Applicant::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'resume' => asset('img/cv/' . $profileImage),
            ]);

            ApplicantCompany::create([
                'applicant_id' => $applicant->id,
                'company_id' => $company->id,
            ]);
        }
        
        return redirect()->route('enduser.home');
    }

    public function jobList(){
        return view('enduser.jobList');
    }
    
    public function allJobs(Request $request){
        if($request->category_id){
            $jobs = JobPost::where('job_category_id', $request->category_id)->get();
            return view('enduser.allJobs', ['jobs' => $jobs]);
        }elseif($request->company_id){
            $jobs = JobPost::where('company_id', $request->company_id)->get();
            return view('enduser.allJobs', ['jobs' => $jobs]);
        }else{
            $jobs = JobPost::orderBy('id', 'desc')->get();
            return view('enduser.allJobs', ['jobs' => $jobs]);
        }       
    }

    public function jobByCategories(){
        $categories = JobCategory::all();

        return view ('enduser.JobCategories', ['categories' => $categories]);
    }

    public function allCompanies(){
        $companies = Company::all();

        return view('enduser.companies', ['companies' => $companies]);
    }

    public function searchJobs(Request $request){
        $search = $request->query('search');
        $jobs = JobPost::where('title', 'like', '%' . $search . '%')
                        ->get();

        return view('enduser.allJobs', ['jobs' => $jobs]);                        
    }
}
