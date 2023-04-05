<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;

class JobCategoryController extends Controller
{
    public function index(){
        $categories = JobCategory::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function add(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        JobCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    public function edit(Request $request){
        $category = JobCategory::find($request->id);

        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request){
        $category = JobCategory::find($request->id);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function delete(Request $request){
        $category = JobCategory::find($request->id);
        $category->delete();

        return redirect()->route('categories.index');
    }
}
