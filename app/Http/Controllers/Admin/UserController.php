<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Storage;
use Auth;
use Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function add(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        
        if ($request->file('image')) {
            $photo = $request->file('image');
            $destinationPath = 'img/profiles/users';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);
        }
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'image' => $profileImage,
            'image_url' => asset('img/profiles/users/' . $profileImage),
        ]);

        return redirect()->route('users.index');
    }

    public function edit(Request $request){
        $user = User::find($request->id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        if($request->password){
            $user->password = Hash::Make($request->password);
            $user->save();
        }
        if ($request->file('image')) {
            $photo = $request->file('image');
            $destinationPath = 'img/profiles/users';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);

            $user->image = $profileImage;
            $user->image_url = asset('img/profiles/users/' . $profileImage);
            $user->save();
        }

        return redirect()->route('users.index');
    }

    public function delete(Request $request){
        $user = User::find($request->id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
