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
            'phone' => $request->phone,
        ]);

        return redirect()->route('enduser.home');
    }

    public function me(){
        $user = auth::guard('applicant')->user();

        return view('enduser.profile', ['user' => $user]);
    }

    public function editProfile(){
        $user = auth::guard('applicant')->user();

        return view('enduser.editProfile', ['user' => $user]);
    }

    public function updateProfile(Request $request){
        $user = Applicant::find($request->id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('enduser.me');

        if($request->password){
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('enduser.me');
        }
        if($request->file('resume')){
            $resume = $request->file('resume');
            $destinationPath = 'img/resumes';
            $resumePath = date('YmdHis') . "." . $resume->getClientOriginalExtension();
            $resume->move($destinationPath, $resumePath);

            $user->resume = $resumePath;
            $usder->save();

            return redirect()->route('enduser.me');
        }
    }
}
