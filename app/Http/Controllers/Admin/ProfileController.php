<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function changePassword(){
        return view('admin.profile.changPassword');
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        if($user->password != Hash::make($request->old_password)){
            return redirect()->route('dashboard')->with('error', 'Your old Password is incorrect');
        }else{
            dd('lee');
            $user->password == Hash::make($request->new_password);
            $user->save();
            
            return redirect()->route('dashboard')->with('success', 'Your Password is Updated');
        }
    }
}
