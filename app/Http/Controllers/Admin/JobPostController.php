<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Company;
use App\Models\JobCategory;

class JobPostController extends Controller
{
    public function index(){
        $posts = JobPost::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function add(){
        $companies = Company::all();
        $categories = JobCategory::all();

        return view('admin.posts.create', ['companies' => $companies,
                                           'categories' => $categories]);
    }

    public function store(Request $request){
        $photo = $request->file('image');
        $destinationPath = 'img/posts/';
        $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
        $photo->move($destinationPath, $profileImage);

        JobPost::create([
            'title' => $request->title,
            'company_id' => $request->company,
            'job_category_id' => $request->category,
            'type' => $request->type,
            'req_ammount' => $request->amount,
            'remote' => 0,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'image' => $profileImage,
            'image_url' => asset('img/posts/' . $profileImage),
        ]);

        return redirect()->route('jobposts.index');
    }

    public function edit(Request $request){
        $post = JobPost::find($request->id);
        $companies = Company::all();
        $categories = JobCategory::all();

        return view('admin.posts.edit', ['post' => $post,'companies' => $companies, 'categories' => $categories]);
    }

    public function update(Request $request){
        $post = JobPost::find($request->id);

        $post->title = $request->title;
        $post->company_id = $request->company;
        $post->job_category_id = $request->category;
        $post->type = $request->type;
        $post->req_ammount = $request->amount;
        $post->remote = $request->remote;
        $post->description = $requst->description;
        $post->requirments = $request->requirments;
        $post->save();

        if($request->file('image')){
            $photo = $request->file('image');
            $destinationPath = 'img/posts/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);

            $post->image = $profileImage;
            $post->image_url = asset('img/posts/' . $profileImage);
            $post->save();
        }
    }

    public function delete(Request $request){
        $post = JobPost::find($request->id);
        $post->delete();

        return redirect()->route('jobposts.index');
    }
}
