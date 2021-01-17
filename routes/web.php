<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
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

    Route::view('/listing', 'job.index')
        ->name('job.index');

    Route::get('/show/{jobPost:slug}', [JobPostController::class, 'show'])
        ->name('job.show');

    Route::view('/detail', 'job.show');

    Route::view('/post-a-job', 'job.create')
        ->name('job.create');

    Route::post('/create', [JobPostController::class, 'store'])
        ->name('job.store');
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
