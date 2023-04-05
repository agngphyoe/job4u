<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('admin.companies.index', ['companies' => $companies]);
    }

    public function add(){
        return view('admin.companies.create');
    }

    public function store(Request $request){        
        $photo = $request->file('profile');
        $destinationPath = 'img/profiles/companies';
        $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
        $photo->move($destinationPath, $profileImage);

        Company::create([
            'name' => $request->name,
            'industry_type' => $request->type,
            'employee_count' => $request->total_emp,
            'address' => $request->address,
            'location' => $request->location,
            'bio' => $request->bio,
            'profile' => $profileImage,
            'profile_url' =>  asset('img/profiles/companies/' . $profileImage),
        ]);

        return redirect()->route('companies.index');
    }

    public function edit(Request $request){
        $company = Company::find($request->id);
        
        return view('admin.companies.edit', ['company' => $company]);
    }

    public function update(Request $request){
        $company = Company::find($request->id);

        $company->name = $request->name;
        $company->industry_type = $request->type;
        $company->employee_count = $request->total_emp;
        $company->address = $request->address;
        $company->location = $request->location;
        $company->bio = $request->bio;
        $company->save();

        if($request->file('profile')){
            $photo = $request->file('profile');
            $destinationPath = 'img/profiles/companies';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);

            $company->profile = $profileImage;
            $company->profile_url = asset('img/profiles/companies/' . $profileImage);
            $company->save();
        }

        return redirect()->route('companies.index');
    }

    public function delete(Request $request){
        $company = Company::find($request->id);
        $company->delete();

        return redirect()->route('companies.index');
    }
}
