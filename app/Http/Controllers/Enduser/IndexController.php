<?php

namespace App\Http\Controllers\Enduser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\JobPost;

class IndexController extends Controller
{
    public function index(){
        $categories = JobCategory::inRandomOrder()->limit(8)->get();
        $posts = JobPost::inRandomOrder()->limit(5)->get();

        return view('enduser.index', ['categories' => $categories,
                                      'posts' => $posts]);
    }
}
