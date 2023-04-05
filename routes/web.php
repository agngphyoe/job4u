<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Enduser\IndexController;
use App\Http\Controllers\Enduser\JobController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function(){
//     return view ('enduser.index');
// });

Route::get('/', [IndexController::class, 'index'])->name('enduser.home');
Route::get('job-details', [JobController::class, 'details'])->name('job.details');
Route::get('apply-job', [JobController::class, 'applyJob'])->name('job.apply');
Route::post('post-job', [JobController::class, 'postJob'])->name('job.post');
Route::get('job-list', [JobController::class, 'jobList'])->name('job.list');


Auth::routes();

Route::middleware(['auth'])->group(function (){
    //dashboard
    Route::prefix('admin')->group(function() {
        Route::get('/', [HomeController::class, 'index'])->name('dashboard');

        //users
        Route::prefix('users')->controller(UserController::class)->group(function() {
            Route::get('/', 'index')->name('users.index');
            Route::get('add', 'add')->name('users.create');
            Route::post('store', 'store')->name('users.store');
            Route::get('/edit', 'edit')->name('users.edit');
            Route::post('update', 'update')->name('users.update');
            Route::get('delete', 'delete')->name('users.delete');
        });

        // companies
        Route::prefix('companies')->controller(CompanyController::class)->group(function(){
            Route::get('/','index')->name('companies.index');
            Route::get('add', 'add')->name('companies.create');
            Route::post('store', 'store')->name('companies.store');
            Route::get('edit', 'edit')->name('companies.edit');
            Route::post('update', 'update')->name('companies.update');
            Route::get('delete', 'delete')->name('companies.delete');
        });

        //categories
        Route::prefix('categories')->controller(JobCategoryController::class)->group(function(){
            Route::get('/', 'index')->name('categories.index');
            Route::get('add', 'add')->name('categories.create');
            Route::post('store', 'store')->name('categories.store');
            Route::get('edit', 'edit')->name('categories.edit');
            Route::post('update', 'update')->name('categories.update');
            Route::get('delete', 'delete')->name('catgories.delete');
        });

        //posts
        Route::prefix('posts')->controller(JobPostController::class)->group(function(){
            Route::get('/', 'index')->name('jobposts.index');
            Route::get('add', 'add')->name('jobposts.create');
            Route::post('store', 'store')->name('jobposts.store');
            Route::get('edit', 'edit')->name('jobposts.edit');
            Route::post('update', 'update')->name('jobposts.update');
            Route::get('delete', 'delete')->name('jobposts.delete');
        });

        //applicants
        Route::prefix('applicants')->controller(ApplicantController::class)->group(function(){
            Route::get('/', 'index')->name('applicants.index');
        });
    });
    
});