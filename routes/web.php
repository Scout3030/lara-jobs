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
    Route::get('/list', [JobPostController::class, 'list'])
        ->name('job.list');

    Route::get('/show/{jobPost:slug}', [JobPostController::class, 'show'])
        ->name('job.show');

    Route::view('/detail', 'job.show');
});

Route::group(["middleware" => ['auth', sprintf("role:%s", \App\Models\Role::ADMIN)]], function() {

    Route::view('/post-a-job', 'job.create')
        ->middleware(['auth'])
        ->name('job.create');

    Route::post('/create', [JobPostController::class, 'store'])
        ->middleware(['auth'])
        ->name('job.store');
});

