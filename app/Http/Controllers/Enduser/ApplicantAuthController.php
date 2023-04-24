<?php

namespace App\Http\Controllers\Enduser;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Applicant;
use Hash;


class ApplicantAuthController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectedTo = '/';

    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
     return Auth::guard('applicant');
    }

    public function showLoginForm()
    {
        return view('enduser.login');
    }

    public function login(Request $request){
        if (Auth::guard('applicant')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            // return auth::guard('applicant')->user();
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');   
    }

    public function showRegisterForm(){
        return view('enduser.register');
    }

    public function register(Request $request){
        $resume = $request->file('resume');
        $destinationPath = 'img/resumes';
        $resumePath = date('YmdHis') . "." . $resume->getClientOriginalExtension();
        $resume->move($destinationPath, $resumePath);

        $applicant = Applicant::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'resume' => $resumePath,
            'phone' => $request->phone,[]
        ]);

        return redirect()->route('enduser.home');
    }
}
