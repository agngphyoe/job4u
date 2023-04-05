<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index(){
        $applicants = Applicant::all();

        return view('admin.applicants.index', ['applicants' => $applicants]);
    }
}
