<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/set_language/{lang}', [Controller::class, 'setLanguage'])
    ->name( 'set_language');

Route::get('/images/{path}/{attachment}', function($path, $attachment) {
    $file = sprintf('storage/%s/%s', $path, $attachment);
    if(File::exists($file)) {
        return Image::make($file)->response();
    }
});

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::group(['prefix' => 'job'], function () {
    Route::get('/search', [JobPostController::class, 'search'])
        ->name('job.search');
    Route::view('/listing', 'job.index')
        ->name('job.index');

    Route::get('/show/{jobPost:slug}', [JobPostController::class, 'show'])
        ->name('job.show');

    Route::view('/detail', 'job.show');


});

Route::group(['prefix' => 'company'], function () {

    Route::view('/listing', 'company.index')
        ->name('company.index');

    Route::get('/show/{companyPost:slug}', [CompanyController::class, 'show'])
        ->name('company.show');

    Route::view('/detail', 'company.show');

    Route::view('/post-a-company', 'company.create')
        ->name('company.create');

    Route::post('/create', [JobPostController::class, 'store'])
        ->name('company.store');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(["middleware" => ['auth', sprintf("role:%s", \App\Models\Role::COMPANY)]], function() {

    Route::view('/post-a-job', 'job.create')
        ->middleware(['auth'])
        ->name('job.create');

    Route::post('/create', [JobPostController::class, 'store'])
        ->middleware(['auth'])
        ->name('job.store');
});

Route::group(["middleware" => ['auth', sprintf("role:%s", \App\Models\Role::CANDIDATE)]], function() {

    Route::get('/dashboard', [CandidateController::class, 'dashboard'])
        ->name('candidate.dashboard');

    Route::view('/profile', 'candidate.profile')
        ->name('candidate.profile');

    Route::get('/applied-jobs', [CandidateController::class, 'applied'])
        ->name('candidate.applied');

});
