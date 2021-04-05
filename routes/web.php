<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subscription;
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
});

Route::group(['prefix' => 'admin', "middleware" => ['auth', sprintf("role:%s", \App\Models\Role::ADMIN)]], function() {

    Route::group(['prefix' => 'company'], function () {

        Route::get('/', [CompanyController::class, 'index'])
            ->name('admin.company.index');
        Route::get('/create', [CompanyController::class, 'create'])
            ->name('admin.company.create');
        Route::post('/store', [CompanyController::class, 'store'])
            ->name('admin.company.store');
        Route::get('/edit/{company:slug}', [CompanyController::class, 'edit'])
            ->name('admin.company.edit');
        Route::put('/update/{company:slug}', [CompanyController::class, 'update'])
            ->name('admin.company.update');


        Route::get('/datatable', [CompanyController::class, 'datatable'])
            ->name('admin.company.datatable');
    });

    Route::group(['prefix' => 'job'], function () {
        Route::get('/', [JobPostController::class, 'index'])
            ->name('admin.job.index');
        Route::get('/create/{company:slug}', [JobPostController::class, 'create'])
            ->name('admin.job.create');
        Route::get('/edit/{jobPost}', [JobPostController::class, 'edit'])
            ->name('admin.job.edit');
        Route::put('/update/{jobPost:slug}', [JobPostController::class, 'update'])
            ->name('admin.job.update');
        Route::post('/store', [JobPostController::class, 'store'])
            ->name('admin.job.store');

        Route::get('/datatable', [JobPostController::class, 'datatable'])
            ->name('admin.job.datatable');
    });
});

Route::post('/subscription', [SubscriptionController::class, 'store'])
    ->name('subscription.store');
